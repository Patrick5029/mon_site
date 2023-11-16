<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&family=Montserrat&display=swap" rel="stylesheet">
    <title>Ma Page d'Accueil</title>
</head>
<script>
            function myResponsiveFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
                } else {
                x.className = "topnav";
                }
            }
            </script>
<body>
    <header>
        <div class="container">
            <div class="element1">
                <a href="index.php" class="lien-icone">
                    <img src="images/logo_kloarc.png" alt="Logo" width="150" height="150" >
                </a>
            </div>
            <div class="element2">

                <h1>KLO'ARC</h1>
                <h2> Le tir à l'arc Cloharsien</h2>
            </div>
            <div class="element3">
                <img src="images/image_cible.jpg" alt="logo" width="128" height="128">
            </div>
        </div>

        <nav>

            <div class="topnav" id="myTopnav">
                <a href="index.php"><i class="fa fa-fw fa-home"></i> Accueil</a>
                <a href="login_form.php"><i class="fa fa-fw fa-user"></i> Login</a>
                <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Adhérer</a>
                <a href="#news"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités </a>
                <a href="#"><i class="fa fa-fw fa-envelope"></i> Contacts</a> 	  
                <a style="float:right" href="#about"><i class="fa fa-question-circle" aria-hidden="true"></i> A propos</a>
                <a href="javascript:void(0);" class="icon" onclick="myResponsiveFunction()"><i class="fa fa-bars"></i></a>
            </div>

        </nav>

    </header>

    <main>
        <?php include 'accueil.php'; ?>
        

    </main>
    
    <footer>
        <?php include 'footer.php'; ?> <!-- Inclusion du fichier footer.php -->
    </footer>
</body>
</html>

