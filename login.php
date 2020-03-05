<?php include 'includes/session.php' ?>

<?php
if (isset($_SESSION['user'])) {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .prefix {
            position: absolute;
            right: 22px;
        }

        .login-err {
            background: #ff9966;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #ff5e62, #ff9966);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ff5e62, #ff9966);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            height: 40px;
            color: #fff;
            text-align: center;
            /* padding-top: 10px; */
            font-size: 1.5rem;
        }

        nav .brand-logo {
            padding-left: 15px;
        }

        nav {
            background: #667db6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        #login-btn {
            width: 100%;
            border-radius: 20px;
            background: #667db6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #667db6, #0082c8, #0082c8, #667db6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #667db6, #0082c8, #0082c8, #667db6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            height: 40px;
            padding-top: 4px;
        }

        #card-login {
            background: transparent;
            border: none;
            box-shadow: none;
            padding-top: 100px;
        }

        #moto-login {
            color: grey
        }

        #loginpageimg {
            width: 100%;
            height: 560px;
            padding-top: 100px
        }

        @media(max-width:600px) {
            #loginpageimg {
                display: none;
            }

            #card-login {
                padding-top: 50px
            }

        }

        @media(max-width:768px) {
            #loginpageimg {
                padding-top: 200px
            }
        }

        #forg-pswrd {
            float: right;
        }
    </style>
</head>

<body>
<?php include 'includes/links.php' ?>

    <div class="wrapper">
        <div class="content-wrapper">
            <?php include 'includes/navbar.php' ?>
            <section class="content" style="background: #fff">

                <div class="row">
                    <div class="col l6 m5 s12">
                        <img id="loginpageimg" src="images/loginpage.svg" alt="">
                    </div>
                    <div class="col l6 s12 m7" style="padding: 0">
                        <div class="container">
                            <div class="card" id="card-login">
                                <div class="card-title center-align">
                                    <h4>
                                        Welcome to <b>Data Pirates</b>
                                    </h4>
                                    <small id="moto-login" class="center-align">To keep connected with us please login with your personal information by email Address and Password</small>
                                </div>
                                <?php
                                if (isset($_SESSION['error'])) {
                                    echo "
          <div class='login-err'>
            <p>" . $_SESSION['error'] . "</p> 
          </div>
        ";
                                    unset($_SESSION['error']);
                                }
                                if (isset($_SESSION['success'])) {
                                    echo "
          <div class='callout callout-success text-center'>
            <p>" . $_SESSION['success'] . "</p> 
          </div>
        ";
                                    unset($_SESSION['success']);
                                }
                                ?>
                                <div class="card-content">
                                    <form class="col s12" action="verify.php" method="post">
                                        <div class="row">
                                            <div class="input-field input-outlined col l12 m12 s12">
                                                <input id="email" type="email" name="email" required>
                                                <label for="email">Email</label>
                                                <i class="material-icons prefix">email</i>
                                            </div>
                                            <div class="input-field input-outlined col l12 m12 s12">
                                                <input id="password" type="password" name="password" required>
                                                <label for="password">Password</label>
                                                <i class="material-icons prefix">visibility</i>
                                            </div>
                                            <div class="col l6 m6 s6">
                                                <label>
                                                    <input type="checkbox" class="filled-in" />
                                                    <span>Remember me</span>
                                                </label>
                                            </div>
                                            <div class="col l6 m6 s6">
                                                <a id="forg-pswrd" href="forgot.php">Forgot Password ?</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col l4 m4 s4"></div>
                                            <div class="col l4 m4 s4">
                                                <button id="login-btn" type="submit" name="signin" class="waves-effect waves-light btn">Login</button>
                                            </div>
                                    </form>
                                    <div class="col l4 m4 s4"></div>
                                </div>
                                <div class="center-align">
                                    <small>Don't have an account ? <span><a href="signup.php">Create Account</a></span> </small>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>
</body>

</html>