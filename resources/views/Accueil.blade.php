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

    <title>Page d'accueil</title>
</head>
<body>


    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <!--Changer le logo -->
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Secret'Arit</span>
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
                -->
            </ul>

            <ul class="logout-mode">
                <li class="button"><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Se deconnecter</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle"> <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>


            <div class="search-box">
               <h1 class="titre">Bienvenue sur <span>Secret'Ariat</span></h1>
            </div>


        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Tableau de bord</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="fa-solid fa-user-check"></i>
                        <span class="text"><a href="{{route('mesCourriers')}}" class="gestion">Gestion du</a></span>
                        <span class="number"><a href="{{route('mesCourriers')}}" class="gestion">PERSONNEL</a></span>
                    </div>
                    <div class="box box2">
                        <i class="fa-regular fa-paste"></i>
                        <span class="text"><a href="Gconsommable.php" class="gestion">Gestion des</a></span>
                        <span class="number"><a href="Gconsommable.php" class="gestion">CONSOMMABLES</a></span>
                    </div>
                    <div class="box box3">
                        <i class="fa-sharp fa-solid fa-envelope"></i>
                        <span class="text"><a href="Gcourrier.php" class="gestion">Gestion des</a></span>
                        <span class="number"><a href="Gcourrier.php" class="gestion">COURRIERS</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pop-up">
        <div class="pop-content">
            <p>Voulez vous vraiment quitter ?</p>
            <div class="pop-button">
                <a href="{{route('logout')}}">
                    <button class="pop-but">Quitter</button>
                </a>

                <button class="pop-but1">Annuler</button>
            </div>
        </div>
    </div>

    <script src="js\script.js"></script>
</body>
</html>
