<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['M_pengaduan', 'M_wilayah', 'M_setting']);
        $this->load->library('recaptcha');
    }

    function generatekodelaporan()
    {
        //generate kode laporan
        $last_idlap = $this->M_pengaduan->get_lastrow();
        if ($last_idlap->num_rows > 0) {
            $idlap = (int)$last_idlap->row()->id + 1;
        } else {
            $idlap = 1;
        }
        return $kodelaporan = date("YmdHis") . $idlap;
    }

    public function index()
    {
        //map
        $setting = $this->M_setting->list_setting();
        $this->load->library('googlemaps');
        $config['center'] = "$setting->latitude, $setting->longitude";
        $config['zoom'] = "$setting->zoom";
        $config['apiKey'] = "$setting->apikey";
        $this->googlemaps->initialize($config);

        $marker['position'] = "$setting->latitude, $setting->longitude";
        $marker['draggable'] = true;
        $marker['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
        $this->googlemaps->add_marker($marker);

        $map = $this->googlemaps->create_map();
        $data['map'] = $map;

        $data['kodelaporan'] = $this->generatekodelaporan();
        $data['wil_kab'] = $this->M_wilayah->get_all_kab();
        $data['recaptcha'] = $this->recaptcha->create_box();

        $data['title'] = 'LAPOR';
        $data['_view'] = "company/lapor";
        $this->load->view('company/layout', $data);
    }

    function savelaporan()
    {
        $params = array(
            'kodelaporan' => $this->input->post('kodelaporan'),
            'tgl_laporan' => date("Y-m-d H:i:s"),
            'nama_pelapor' => $this->input->post('nama_pelapor'),
            'nik' => $this->input->post('nik'),
            'alamat_pelapor' => $this->input->post('alamat_pelapor'),
            'kab_pelapor' => $this->input->post('kab_pelapor'),
            'kec_pelapor' => $this->input->post('kec_pelapor'),
            'des_pelapor' => $this->input->post('des_pelapor'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'isi_laporan' => $this->input->post('isi_laporan'),
            'infrastruktur' => 'Irigasi',
            'nama_ruasjalan' => $this->input->post('nama_ruasjalan'),
            'lokasi_kabkota' => $this->input->post('lokasi_kabkota'),
            'lokasi_distrik' => $this->input->post('lokasi_distrik'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'status' => 'Menunggu',
        );

        $laporan_id = $this->M_pengaduan->add($params);
        $nowapelapor = $this->input->post('no_hp');
        $namapelapor = $this->input->post('nama_pelapor');
        $ruasjalan = $this->input->post('nama_ruasjalan');
        $distrik = $this->M_setting->get_wilayah($this->input->post('lokasi_distrik'));
        $kabupaten = $this->M_setting->get_wilayah($this->input->post('lokasi_kabkota'));
        $this->wasendpelapor($nowapelapor, $namapelapor, $ruasjalan, $distrik, $kabupaten);

        $nowakabid = '082248789065'; //anggap aja km sebagai kabid, tapi km jg melapor sbg pelapor
        $kodelap = $this->input->post('kodelaporan');
        $image = $this->M_setting->get_image($kodelap);
        $imageurl = base_url() . 'upload/dokumentasi/' . $image;
        $this->wasendkabid2($nowakabid, $kodelap, $ruasjalan, $kabupaten, $distrik, $imageurl);
        echo json_encode(array('status' => TRUE, 'gambar' => $imageurl));
    }


    function wasendpelapor($nowapelapor, $nama, $ruasjalan, $distrik, $kabupaten)
    {
        $setting = $this->M_setting->list_setting();
        $userkey = $setting->userkey;
        $passkey = $setting->passkey;
        $telepon = $nowapelapor;
        $message = 'Hai *' . $nama . '*, ' . PHP_EOL . 'Laporan Anda Tentang Irigasi *' . $ruasjalan . '* di Distrik *' . strtoupper($distrik) . ' ' . $kabupaten . '* telah kami terima dan akan diverifikasi lebih lanjut. ' . PHP_EOL . ' ' . PHP_EOL . 'Terima Kasih. | siripabar.com' . PHP_EOL . ' ' . PHP_EOL . '*-Don\'t Reply!-*';;
        $url = 'https://console.zenziva.net/wareguler/api/sendWA/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'message' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
    }

    function wasendkabid2($nowakabid, $kodelap, $ruasjalan, $kabupaten, $distrik, $imageurl)
    {
        $setting = $this->M_setting->list_setting();
        $userkey = $setting->userkey;
        $passkey = $setting->passkey;
        $telepon = $nowakabid;
        $image_link = $imageurl;
        $caption  = 'Yth. Kabid. Sumber Daya Air ' . PHP_EOL . ' ' . PHP_EOL . 'Anda mendapatkan 1 laporan tentang Irigasi *' . $ruasjalan . '* di Distrik *' . strtoupper($distrik) . ', ' . $kabupaten . '*.' . PHP_EOL . 'Silahkan masuk ke dashboard siripabar.com untuk melihat detail laporan.' . PHP_EOL . 'Kode: *' . $kodelap . '* ' . PHP_EOL . ' ' . PHP_EOL . 'Terima Kasih. | siripabar.com' . PHP_EOL . ' ' . PHP_EOL . '*-Don\'t Reply!-*';
        $url = 'https://console.zenziva.net/wareguler/api/sendWAFile/';
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'to' => $telepon,
            'link' => $image_link,
            'caption' => $caption
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
    }
    function add_ajax_kec($id)
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 8 AND LEFT(kode,5) = '$id' ORDER BY kode ASC");
        $data = "<option value=''> - Pilih Kecamatan/Distrik - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function add_ajax_des($id)
    {
        $query = $this->db->query("SELECT * FROM wilayah_2020 WHERE LENGTH(kode) = 13 AND LEFT(kode,8) = '$id' ORDER BY kode ASC");
        $data = "<option value=''> - Pilih Kelurahan/Desa - </option>";
        foreach ($query->result() as $value) {
            $data .= "<option value='" . $value->kode . "'>" . $value->nama . "</option>";
        }
        echo $data;
    }

    function uploadktp()
    {

        $config['upload_path']   = FCPATH . '/upload/ktp/';
        $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filektp')) {
            $token = $this->input->post('token_foto');
            $kodelaporan = $this->input->post('kodelaporan');
            $file_name = $this->upload->data('file_name');
            $kategori = 'ktp';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $file_name, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }

    function uploaddokumentasi1()
    {
        $config['upload_path']   = FCPATH . '/upload/dokumentasi/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filedokumentasi1')) {
            $token = $this->input->post('token_dokumentasi');
            $kodelaporan = $this->input->post('kodelaporan');
            $nama = $this->upload->data('file_name');
            $kategori = 'dokumentasi1';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $nama, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }

    function uploaddokumentasi2()
    {
        $config['upload_path']   = FCPATH . '/upload/dokumentasi/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filedokumentasi2')) {
            $token = $this->input->post('token_dokumentasi');
            $kodelaporan = $this->input->post('kodelaporan');
            $nama = $this->upload->data('file_name');
            $kategori = 'dokumentasi2';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $nama, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }

    function uploaddokumentasi3()
    {
        $config['upload_path']   = FCPATH . '/upload/dokumentasi/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filedokumentasi3')) {
            $token = $this->input->post('token_dokumentasi');
            $kodelaporan = $this->input->post('kodelaporan');
            $nama = $this->upload->data('file_name');
            $kategori = 'dokumentasi3';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $nama, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }

    function dokumen_tambahan()
    {
        $config['upload_path']   = FCPATH . '/upload/dokumen-tambahan/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('dokumen_tambahan')) {
            $token = $this->input->post('token_dokumentasi');
            $kodelaporan = $this->input->post('kodelaporan');
            $nama = $this->upload->data('file_name');
            $kategori = 'dokumen_tambahan';
            $uploaded_on = date("Y-m-d H:i:s");
            $this->db->insert('upload', array('nama_file' => $nama, 'token' => $token, 'kategori' => $kategori, 'uploaded_on' => $uploaded_on, 'kodelaporan' => $kodelaporan));
        }
    }
}
