<!DOCTYPE html>

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

    <title>Gestion de consommables</title>
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
                <li><a href="{{route('dashboard')}}">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>

                <li><a href="seeMail.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Courrier</span>
                </a></li>
                <li>
                    <i class=""></i>
                    <span class="link-name"></span>
                </li>
                <li><a href="#">

                    <span class="link-name"></span>
                </a></li>
                 <li><a href="#">

                    <span class="link-name"></span>
                </a></li>
                  <li><a href="#">

                    <span class="link-name"></span>
                </a></li>

                <li><a href="{{route('mesConsommable')}}">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Gestion Articles</span>
                </a></li>
                <li><a href="{{route('monPersonnel')}}">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Gestion personnel</span>
                </a></li>
            </ul>


            <ul class="logout-mode">
                <li><a href="{{route('logout')}}">
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
                <h1 class="titre">Gestion des <span>Consommables</span></h1>
            </div>


        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Tableau de bord</span>
                </div>

                <!--  <div class="boxes">
                    <div class="box box1">
                        <i class="fa-regular fa-paste"></i>
                        <span class="text"><a href="Gpersonnel.php" class="gestion">Gestion des</a></span>
                        <span class="number"><a href="Gpersonnel.php" class="gestion">CONSOMMABLES</a></span>


                     </div>
                        <div class="box box2">
                        <i class=""></i>
                        <span class="text"><a href="conso.php" class="gestion">Gestion des</a></span>
                        <span class="number"><a href="conso.php" class="gestion"></a></span>
                    </div>
                    <div class="box box3">
                        <i class="fa-sharp fa-solid fa-envelope"></i>
                        <span class="text"><a href="courrier.html" class="gestion">Gestion des</a></span>
                        <span class="number"><a href="courrier.html" class="gestion">COURRIERS</a></span>
                    </div>
                </div> -->

            </div>
            <div class="activity">


            </div>
        </div>
    </section>
    <div class="pop-up">
        <div class="pop-content">
            <p>Voulez vous vraiment quitter ?</p>
            <div class="pop-button">
                <a href="index.php">
                    <button class="pop-but">Quitter</button>
                </a>

                <button class="pop-but1">Annuler</button>
            </div>
        </div>
    </div>

    <script src="js\script.js"></script>
</body>
</html>
