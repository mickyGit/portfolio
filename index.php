<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css" >
        <link rel="stylesheet"href="css/responsive.css" type="text/css" />
        <link rel="stylesheet"href="css/circle.css" type="text/css" />
    </head>
    <body> 
        <!-- Contenu de la home -->
        <div id="content-home" class="content-home">
            <nav class="navbar  navbar-expand-lg nav-off">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#content-home"><strong>Accueil</strong> <span class="sr-only">(current)</span></a>
                        </li>                        
                        <li class="nav-item active">
                            <a class="nav-link" href="#content-presentation"><strong>presentation</strong> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#content-cv"><strong>cv</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#content-competences"><strong>Compétences</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#content-portfolio"><strong>Porfolio</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled text-danger"  href="#content-contact"><strong>Contact</strong></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="toggle-btn">
                <span></span>
            </div>
            <!-- Machine à écrire -->
            <div  class="console-text">
                <div id="consoleText2" ></div>
            </div>
        </div>

        <!-- Contenu de la présentation -->
        <div id="content-presentation" class="content-about">
            <?php include 'inc/presentation.php'; ?>
        </div>

        <!-- Contenu du cv -->
        <div id="content-cv" class="content-cv">
            <?php include 'inc/cv.php'; ?>


        </div>

        <!-- Contenu compétences -->
        <div id="content-competences" class="content-competences">
            <?php include 'inc/competences.php'; ?>
        </div>

        <!-- Contenu du portfolio -->
        <div  id="content-portfolio" class="content-portfolio">

            <?php include 'inc/portfolio.php'; ?>
        </div>

        <!-- Contenu contact -->
        <div id="content-contact" class="content-contact">
            <?php include 'inc/contact.php'; ?>
        </div>
        <footer class="footer"></footer>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
    </body>
</html>
