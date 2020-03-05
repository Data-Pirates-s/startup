<?php include 'includes/links.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <style>
        .prefix {
            position: absolute;
            right: 22px;
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
    <div class="wrapper">
        <div class="content-wrapper">
        <?php include 'includes/navbar.php' ?>
            <section class="content" style="background: #fff">

                <div class="row">
                    <div class="col l6 m5 s12">
                        <img id="loginpageimg" src="images/signin.svg" alt="">
                    </div>
                    <div class="col l6 s12 m7" style="padding: 0">
                        <div class="container">
                            <div class="card" id="card-login">
                                <div class="card-title center-align">
                                    <h4>
                                        <b>Register</b>
                                    </h4>
                                    <?php
                                if (isset($_SESSION['error'])) {
                                    echo "
            <p>" . $_SESSION['error'] . "</p> 
        ";
                                    unset($_SESSION['error']);
                                }

                                if (isset($_SESSION['success'])) {
                                    echo "
            <p>" . $_SESSION['success'] . "</p> 
        ";
                                    unset($_SESSION['success']);
                                }
                                ?>
                                </div>
                                
                                <div class="card-content">
                                    <form class="col s12" action="register.php" method="post">
                                        <div class="row">
                                            <div class="input-field input-outlined col l12 m12 s12">
                                                <input id="fname" name="fname" type="text">
                                                <label for="fname">First Name</label>
                                                <i class="material-icons prefix">person</i>
                                            </div>
                                            <div class="input-field input-outlined col l12 m12 s12">
                                                <input id="lname" name="lname" type="text">
                                                <label for="lname">Last Name</label>
                                                <i class="material-icons prefix">person</i>
                                            </div>
                                            <div class="input-field input-outlined col l12 m12 s12">
                                                <input id="useremail" name="email" type="email">
                                                <label for="useremail">Email</label>
                                                <i class="material-icons prefix">email</i>
                                            </div>
                                            <div class="input-field input-outlined col l12 m12 s12">
                                                <input id="password" name="password" type="password">
                                                <label for="password">Password</label>
                                                <span id="showPassword2"><i class="material-icons prefix" onclick="myFunction(this)">visibility</i></span>
                                            </div>
                                            <div class="input-field input-outlined col l12 m12 s12">
                                                <input id="cpassword" name="cpassword" type="password">
                                                <label for="cpassword">Confirm Password</label>
                                                <i class="material-icons prefix">visibility</i>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col l4 m4 s4"></div>
                                            <div class="col l4 m4 s4">
                                                <button id="login-btn" type="submit" class="waves-effect waves-light btn" name="signup">Sign up</button>
                                            </div>
                                    </form>
                                    <div class="col l4 m4 s4"></div>
                                </div>
                                <div class="center-align">
                                    <small>Already have an account ? <span><a href="login.php">Login</a></span> </small>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>

    <script>
        function myFunction(x) {
            x.classList.toggle(visibility_off);
        }
    </script>
    <script>
        // preview and hide password
        $("#showPassword2").click(function() {
            var foo1 = $(this).prev().attr("type");
            if (foo1 == "password") {
                $(this).prev().attr("type", "text");
            } else {
                $(this).prev().attr("type", "password");
            }
        });
    </script>
</body>

</html>