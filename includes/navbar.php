<!-- <nav>
    <div class="nav-wrapper" style="padding: 20px">
        <a href="index.php"><img src="images/brand_logo.png" width="200px" height="90px" alt=""></a>
    </div>
</nav> -->

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Data Pirates</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Home</a></li>
                <li><a href="badges.html">Carrers</a></li>
                <li><a href="includes/aboutUs.php">About Us</a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    $image = (!empty($user['photo'])) ? 'images/' . $user['photo'] : 'images/profile.jpg';
                    echo '
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#profile">
<img src="' . $image . '" class="user-image" alt="User Image">
</a>
</li>
';
                } else {
                    echo "

";
                ?>
                    <li><a href='login.php' class='login' style="color: white;font-weight:600;">LOGIN</a></li>
                    <li><a href='signup.php' class='login' style="color: white;font-weight:600;">SIGNUP</a></li>

                <?php

                }
                ?>

            </ul>
        </div>
    </nav>

</div>