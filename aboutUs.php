<?php include 'includes/links.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .acces-title {
            font-weight: bold;
        }

        .card {
            border: none;
            box-shadow: none;
        }

        #b-crumb {
            display: flex;
            padding: 20px;
        }

        #b-crumb li {
            padding-left: 20px
        }

        #b-crumb li:last-child {
            color: grey
        }


        #b-crumb li a {
            color: #010101;
        }
    </style>
</head>

<body>
    <?php include 'includes/navbar.php' ?>
    <div class="container-fluid" style="background: #f5f5f6;">
        <ul id="b-crumb">
            <li><a href="index.php">Home</a></li>
            <li><i class="material-icons">chevron_right</i></li>
            <li>About Us</li>
        </ul>
    </div>

    <h1 class="center-align">
        Access
    </h1>
    <h5 class="center-align">
        Register on the Portal to access valuable online tools & resources for free.
    </h5>
    <br>

    <div class="row">

        <div class="col offset-l1 l2 m6 s12">
            <!-- Promo Content 1 goes here -->

            <div class="card">
                <div class="card-image">
                    <img src="images/acess-img1.png">
                </div>
                <span class="card-title">
                    <h5 class="acces-title center-align">
                        KNOWLEDGE BANK FOR STARTUPS
                    </h5>
                </span>
                <div class="card-content">
                    <p class="center-align">
                        Your online guide to starting a business in India, with an overview of key terms, processes, stakeholders, legal requirements and more
                    </p>
                </div>
            </div>
        </div>
        <div class="col l2 m6 s12">
            <!-- Promo Content 2 goes here -->
            <div class="card">
                <div class="card-image">
                    <img src="images/acess-img2.png">

                </div>
                <span class="card-title">
                    <h5 class="acces-title center-align">
                        PARTNERED <br> SERVICES
                    </h5>
                </span>
                <div class="card-content">
                    <p class="center-align">
                        Avail valuable services for free from our partnered providers, including legal help, banking, cloud services and more.
                    </p>
                </div>
            </div>
        </div>
        <div class="col l2 m6 s12">
            <!-- Promo Content 3 goes here -->
            <div class="card">
                <div class="card-image">
                    <img src="images/acess-img3.png">

                </div>
                <span class="card-title">
                    <h5 class="acces-title center-align">
                        TEMPLATES FOR EVERY SITUATION
                    </h5>
                </span>
                <div class="card-content">
                    <p class="center-align">
                        Download from our collection of verified templates for every function, from Legal to HR to Finance to Customer Support.
                    </p>
                </div>
            </div>
        </div>
        <div class="col l2 m6 s12">
            <!-- Promo Content 4 goes here -->
            <div class="card">
                <div class="card-image">
                    <img src="images/acess-img4.png">

                </div>
                <span class="card-title">
                    <h5 class="acces-title center-align">
                        ONLINE COURSES
                    </h5>
                </span>
                <div class="card-content">
                    <p class="center-align">
                        Keep your skills updated with our curated list of entrepreneur-friendly courses on topics ranging from data analytics to design thinking
                    </p>
                </div>
            </div>
        </div>
        <div class="col l2 m6 s12">
            <!-- Promo Content 5 goes here -->
            <div class="card">
                <div class="card-image">
                    <img src="images/acess-img5.png">

                </div>
                <span class="card-title">
                    <h5 class="acces-title center-align">
                        INNOVATION CHALLENGES
                    </h5>
                </span>
                <div class="card-content">
                    <p class="center-align">
                        Participate in corporate & government challenges to get noticed, win cash grants, incubation, mentorship support and more.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <h1 class="center-align">
        Network
    </h1>
    <h5 class="center-align">
        Use our vast online directory to connect with other stakeholders in the Indian Startup Ecosystem. Click on a stakeholder to view listings.
    </h5>
    <br>
    <div class="row">

        <div class="col l4 m6 s4">
            <!-- Promo Content 1 goes here -->
            <div class="card">
                <div class="card-content">
                    <span class="card-title center-align">
                        STARTUPS
                    </span>
                    <p class="center-align">Connet with 50K Startups spread across all sectors and Stages.</p>
                </div>
            </div>
        </div>
        <div class="col l4 m6 s4">
            <!-- Promo Content 2 goes here -->
            <div class="card">
                <div class="card-content">
                    <span class="card-title center-align">
                        STARTUPS
                    </span>
                    <p class="center-align">Connet with 50K Startups spread across all sectors and Stages.</p>
                </div>
            </div>
        </div>
        <div class="col s4">
            <!-- Promo Content 3 goes here -->
        </div>

    </div>
    </div>

    <?php include 'includes/footer.php' ?>

</body>

</html>