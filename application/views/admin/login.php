<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>LOGIN | SIRIPABAR</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='#' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        .register-photo {
            background: #f1f7fc;
            padding: 80px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-photo .form-container {
            max-width: 900px;
            width: 90%;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .register-photo {
            background: #f1f7fc;
            padding: 80px 0
        }

        .register-photo .image-holder {
            display: table-cell;
            width: auto;
            background: url(https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=753&q=80);
            background-size: cover
        }

        .register-photo .form-container {
            display: table;
            max-width: 900px;
            width: 90%;
            margin: 0 auto;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
        }

        .register-photo form {
            display: table-cell;
            width: 400px;
            background-color: #ffffff;
            padding: 40px 60px;
            color: #505e6c
        }

        @media (max-width:991px) {
            .register-photo form {
                padding: 40px
            }
        }

        .register-photo form h2 {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 30px
        }

        .register-photo form .form-control {
            background: transparent;
            border: none;
            color: #61acb3;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 0px;
            height: 40px
        }

        .register-photo form .form-check {
            font-size: 13px;
            line-height: 20px
        }

        .register-photo form .btn-primary {
            background: #61acb3;
            border: none;
            border-radius: 25px;
            padding: 11px;
            box-shadow: none;
            margin-top: 35px;
            text-shadow: none;
            outline: none !important
        }

        .register-photo form .btn-primary:hover,
        .register-photo form .btn-primary:active {
            background: #61acb3
        }

        .register-photo form .btn-primary:active {
            transform: translateY(1px)
        }

        .register-photo form .already {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none
        }
    </style>
</head>

<body className='snippet-body'>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Welcome back!</strong></h2>
                <div class="form-group"><input class="form-control" type="Username" name="Username" placeholder="Username"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Remember
                                me </label> </div>
                        <div> <a href="#" class="text-info">Forgot Password</a> </div>
                    </div>
                </div>
                <div class="form-group"><button class="btn btn-success btn-block btn-info" type="submit">Login</button>
                </div><a class="already" href="#">Terms of Use and Privacy Policy</a>
            </form>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>



</body>

</html>