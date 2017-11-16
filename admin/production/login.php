<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dinas Kelautan dan Perikanan Kota Semarang</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
     <link rel="shortcut icon" href="images/img.png">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           <form role="form" method="post" action="proses-login.php">
             <h1>Login Form</h1>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                                <div class="form-group" align="center">
                                    <br/>
                                    <?php
                                        $cek = $_GET['hayo'];
                                        if ($cek == "salah"){
                                            echo "<i>Harap isi username dan password dengan benar!</i>";
                                        } else if ($cek == "logout")
                                        {
                                            echo "<i>Isi Username dan Password untuk Login!</i>";
                                        }
                                    ?>
                                    
                                </div>
                            </fieldset>
                        </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
