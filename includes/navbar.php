<div class="navbar-fixed">
    <nav class="red" style="padding:0px 10px; position: fixed;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Data Pirates</a>

            <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down ">
                <li><a href="#search-modal" class="modal-trigger"><i class="material-icons">search</i></a></li>
                <?php
                if (isset($_SESSION['user'])) {
                    $image = (!empty($user['photo'])) ? 'images/users/' . $user['photo'] : 'images/profile.jpg';
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

<!-- Modal Structure -->
<div id="search-modal" class="modal">
    <div class="modal-content">
        <h4>Modal Header</h4>
        <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
</div>


<ul class="sidenav" id="mobile-nav">
    <li><a href="#">Carrers</a></li>
    <li><a href="#">About</a></li>
    <?php
    if (isset($_SESSION['user'])) {
        $image = (!empty($user['photo'])) ? 'images/users/' . $user['photo'] : 'images/profile.jpg';
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

<?php include 'includes/sidebar_modal.php'; ?>
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
        $('.modal').modal();
    });
</script>