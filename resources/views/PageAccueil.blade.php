<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7c69adda45.js" crossorigin="anonymous"></script>

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css\PageAccueil.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Gestion de secretariat</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--Changer le logo -->
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Secret'arit</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
   <!--
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
            </ul>
            -->

            <ul class="logout-mode">
                <li><a href="{{ route('logout') }}">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">se deconnecter</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>


    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Gestion des</span>
                        <span class="number">ABSENCES</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Gestion des</span>
                        <span class="number">CONSOMMABLES</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Gestion du</span>
                        <span class="number">COURRIERS</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Liste du personnel</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Nom</span>
                        <span class="data-list">coulibali ahmed</span>
                        <span class="data-list">konan sylla</span>
                        <span class="data-list">Kouakou Max</span>
                        <span class="data-list">Fatima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">coulibaliahmed@gmail.com</span>
                        <span class="data-list">konanylla@gmail.com</span>
                        <span class="data-list">kouakoumax@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">Fatimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Postes</span>
                        <span class="data-list">Stagiaire</span>
                        <span class="data-list">Stagiaire</span>
                        <span class="data-list">Stagiaire</span>
                        <span class="data-list">Stagiaire</span>
                        <span class="data-list">Stagiaire</span>
                        <span class="data-list">Stagiaire</span>
                        <span class="data-list">Stagiaire</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Statut</span>
                        <span class="data-list">Nouveau</span>
                        <span class="data-list">Anciens</span>
                        <span class="data-list">Anciens</span>
                        <span class="data-list">Nouveau</span>
                        <span class="data-list">Anciens</span>
                        <span class="data-list">Nouveau</span>
                        <span class="data-list">Anciens</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="js\script.js"></script>
</body>
</html>
