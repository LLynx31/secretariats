<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7c69adda45.js" crossorigin="anonymous"></script>
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css\Gholiday.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Gestion du Personnel</title> 
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
                    <span class="link-name">Dashboard</span>
                </a></li>
                
                <li><a href="Gpersonnel.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Personnel</span>
                </a></li>
                <li><a href="Gholiday.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Permission</span>
                </a></li>
                    <li><a href="ListPermission.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Liste Permission</span>
                </a></li>
              
                <li><a href="ListAbsence.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Fiches d'Absence</span> 
                </a></li>
                
                <li><a href="#"> 
                    <span class="link-name"></span>
                </a></li>

                <li><a href="Gconsommable.php">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Gestion articles</span>
                </a></li>

                 <li><a href="Gcourrier.php">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Gestion courriers</span>
                </a></li>
                
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
               <h1 class="titre">Gestion du <span>Personnel</span></h1>
            </div>

            
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Permission</span>
                </div>

                <div class="boxes">

                <div class="form-in">
                <form action="" method="POST" enctype="multipart/form-data">
                    <Label for="debut">Date de debut</Label>
                    <input type="date" id="" name="debut"  placeholder="" required>
                    <Label for="fin">Date de fin</Label>
                    <input type="date" id="" name="fin"  placeholder="" required>
                    <textarea name="description" class="" cols="30" rows="10" placeholder="Motif" required></textarea>
                    
                    <div class="selection">
                        <select name="selection" id="selectionner" required>
                            <option value="utiliseur">Sagoe Christian</option>
                            <option value="utilisateur">Brou Yavo Pacome</option>
                        </select>
                        <button class="btn_add" type="submit" name="creer">Créer</button>
                    </div>
                </form>
            </div>
                    
                </div>
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