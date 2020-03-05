<?php include 'includes/links.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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

        #nw-crd {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 11px 0.2px;
        }

        .abt-ic-lns {
            font-size: 20px;
            font-weight: bold;
        }

        #abt-sec {
            background-color: #f5f5f6;
            padding: 20px 0px;
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
    <div class="container">
        <h1 class="center-align">
            About Data Pirates
        </h1>
        <h5 class="center-align opensans">
            Data Pirates is the leading all-in-one monetization platform that allows businesses to quickly expand internationally and optimize recurring revenue streams across channels, by simplifying the back-end complexities that modern digital commerce creates.
        </h5>
        <br>
    </div>
    <section id="abt-sec">
        <div class="container">
            <div class="center-align">
                <div class="row">
                    <div class="col l2 m3 s12">
                        <img src="images/about-us-founded.png" style="border-radius: 50%;" alt="" height="70px" width="70px">
                        <p class="abt-ic-lns">Founded in</p>
                        <p class="abt-ic-lns">2020</p>

                    </div>
                    <div class="col l2 m3 s12">
                        <img src="images/agent.svg" style="border-radius: 50%;" alt="" height="70px" width="70px">
                        <p class="abt-ic-lns">600+</p>
                        <p class="abt-ic-lns">Active Sellers</p>
                    </div>
                    <div class="col l2 m3 s12">
                        <img src="images/market.svg" style="border-radius: 50%;" alt="" height="70px" width="70px">
                        <p class="abt-ic-lns">480+</p>
                        <p class="abt-ic-lns">Active Buyers</p>
                    </div>
                    <div class="col l2 m3 s12">
                        <img src="images/web-traffic.svg" style="border-radius: 50%;" alt="" height="70px" width="70px">
                        <p class="abt-ic-lns">900+</p>
                        <p class="abt-ic-lns">Traffic</p>
                    </div>
                    <div class="col l2 m3 s12">
                        <img src="images/shopping-items.svg" style="border-radius: 50%;" alt="" height="70px" width="70px">
                        <p class="abt-ic-lns">1500+</p>
                        <p class="abt-ic-lns">Products</p>
                    </div>
                    <div class="col l2 m3 s12">
                        <img src="images/codefirst.png" style="border-radius: 50%;" alt="" height="70px" width="70px">
                        <p class="abt-ic-lns">Backed by</p>
                        <p class="abt-ic-lns">CODEFIRST</p>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <!-- <div class="row">

        <div class="col l2 m6 s12">
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

    </div> -->

    <h1 class="center-align">
        Network
    </h1>
    <h5 class="center-align">
        Use our vast online directory to connect with other stakeholders in the Indian Startup Ecosystem. Click on a stakeholder to view listings.
    </h5>
    <br>
    <div class="container">
        <div class="row">

            <div class="col l4 m6 s12">
                <div id="nw-crd" class="card">
                    <div class="card-content">
                        <span class="card-title">
                            STARTUPS
                        </span>
                        <p>Connet with 50K Startups spread across all sectors and Stages.</p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12">
                <!-- Promo Content 2 goes here -->
                <div id="nw-crd" class="card">
                    <div class="card-content">
                        <span class="card-title">
                            INVESTORS
                        </span>
                        <p>
                            An opportunity to get in touch with individual/institutional Investors.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12">
                <!-- Promo Content 3 goes here -->
                <div id="nw-crd" class="card">
                    <div class="card-content">
                        <span class="card-title">
                            MENTORS
                        </span>
                        <p>
                            Get a chance to get connect with wide range of Mentors ready to mentor a Startup.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col l4 m6 s12">
                <!-- Promo Content 1 goes here -->
                <div id="nw-crd" class="card">
                    <div class="card-content">
                        <span class="card-title">
                            INCUBATORS
                        </span>
                        <p>
                            Connet with Government.Private and Institutional Incubators registered with us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12">
                <!-- Promo Content 2 goes here -->
                <div id="nw-crd" class="card">
                    <div class="card-content">
                        <span class="card-title">
                            ACCELERATORS
                        </span>
                        <p>
                            Explore a wide range of Accelerators & connect for your chance to scale up.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col l4 m6 s12">
                <!-- Promo Content 3 goes here -->
                <div id="nw-crd" class="card">
                    <div class="card-content">
                        <span class="card-title">
                            GOVERNMENT BODIES
                        </span>
                        <p>
                            30+ Government Departments registered on the portal,Register and connect!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="center-align">
        <b>Frequently Asked Questions</b>
    </h1>
    <h5 class="opensans center-align">
        Find answers here to common questions about the public procurement process.
    </h5>
    <br>
    <section id="general">
        <div class="container">
            <ul class="collapsible popout">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
    </section>
    <section id="startup">
        <div class="container">
            <ul class="collapsible popout">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>
    </section>



    <?php include 'includes/footer.php' ?>

    <script>
        $(document).ready(function() {
            $('.collapsible').collapsible();
        });
    </script>

</body>

</html>