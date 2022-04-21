<!DOCTYPE html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="admin/assets/css/normalize.css">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="admin/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="admin/assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
	 <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="admin/images/logo3.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="cek_login.php">
                        
                        <div class="form-group">

                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Masukkan username" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Kata Sandi" id="password" name="password">
                        </div>
                        <input type="submit" value="Masuk" class="btn btn-primary m-b-30 m-t-30">
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>