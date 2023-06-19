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
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Rechercher ici...">
            </div>

            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Boite de reception</span>
                    <button class="sendMail"><a href="sendMail.php">Envoyer un mail</a></button>
                </div>


            <div class="activity">

                <div class="activity-data">

                    <div class="data email">
                        <span class="data-title">Email</span>
                        @foreach ($mesCourriers as $courrier)
                            <span class="data-list">{{$courrier->adr_recp}}</span>
                        @endforeach

                    </div>
                    <div class="data names">
                        <span class="data-title">Heure</span>
                        @foreach ($mesCourriers as $courrier)
                            <span class="data-list">{{$courrier->heur_cour}}</span>
                        @endforeach

                    </div>
                    <div class="data joined">
                        <span class="data-title">Date</span>
                        @foreach ($mesCourriers as $courrier)
                            <span class="data-list">{{$courrier->date_cour}}</span>
                        @endforeach

                    </div>
                    <div class="data type">
                        <span class="data-title">Détails</span>
                        @foreach ($mesCourriers as $courrier)
                            <span class="data-list"><a href="detailsMail.php">détails</a></span>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="js\script.js"></script>
</body>
</html>
