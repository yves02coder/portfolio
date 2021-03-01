<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="image/favicon.jpg"size="any"type="image/jpg">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>portfolio</title>
</head>
<body class="respo">
<header class="container-fluid text-center ">
    <div class="text-center"style="margin-left:33%" >
        <nav class="navbar navbar-expand-lg navbar-light bg "style="#030C2A">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-center" aria-current="page" href="index.php" style="color: white;font-size: 20px;"><b>ACCUEIL</b></a>
                        <a class="nav-link " href="projet.php" style="color: white;font-size: 20px;"><b>MES PROJETS</b></a>
                        <a class="nav-link " href="cv_pdf.php" style="color: white;font-size: 20px;"><b>MON CV</b></a>
                        <a class="nav-link " href="projetMySQL.php" style="color: white;font-size: 20px;"><b>A PROPOS</b></a>


                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>




<header>
<div class="container-fluid">

<div class="box mt-5 text-center" >
    <div class="inner">
        <span>javascript</span>
    </div>
    <div class="inner">
        <span>php MySQL</span>
    </div>

</div>
    <div class="text-center">
<span class="text" >yves sanou</span>
    </div>
    <div class="text-center" style="display: flex;justify-content:center ">

            <a href="#hide-block" class="button" onclick="typeWriter()" style="margin-top: 2%;margin-left: 0%">A PROPOS </a>

    </div>



</div>


</header>

<div class="container-fluid" >
    <div id="hide-block"   style="">

        <p id="demo" class="container" >
            <script >
                var i = 0;
                var txt = 'Bonjour, je m\'appelle  Sanou,développeur Fullstack.\n' +
                    '          Auparavant,j\'ai effectué plusieurs années en tant que manager commercial et formateur(ENGIE,ORANGE FIBRE...)ce qui m\'a permis d\'acquérir\n' +
                    '          de très bonnes compétences:le travail en équipe,l\'organisation,l\'investissement,l\'autonomie,la rigueur et l\'écoute ainsi que des qualités relationnelles\n' +
                    '          importantes.\n' +
                    '        J\'ai decidé après trois mois de découverte et d\'application des languages de développement,d\'entreprendre ma reconversion professionnelle dans le développement web,\n' +
                    '            domaine qui m\'a toujours intéressé.\n' +
                    '            J\'ai ainsi integré une école de formation en développement web et web mobile(Fullstack) au sein d\'OnlineFormapro.';
                var speed = 50;

                function typeWriter() {
                    $("#hide-block").css("display","flex")
                    if (i < txt.length) {
                        document.getElementById("demo").innerHTML += txt.charAt(i);
                        i++;
                        setTimeout(typeWriter, speed);
                    }
                }
            </script>

        </p>
    </div>
    </div>
</section>








   <section  class="contact"  data-aos="fade-up"
             data-aos-duration="3000">
        <div class="container" >

            <div class="text-center">
                <span class="text   m-5" style=" word-break: break-word;">contact</span>
            </div>

            <div class="section-title">


            </div>

            <div>
                <iframe class="carte"  data-aos="flip-up" src="https://www.lacroixjacquemard-immo.com/public/files/images/vivre-a-echirolles-38130-isere.jpg" frameborder="0" allowfullscreen></iframe>
            </div>

            <!--  <div class="row mt-5">

                <div class="col-lg-4">
                     <div class="info">
                         <div class="address">
                             <i class="bi bi-geo-alt"></i>
                             <h4 style="color:black;font-size: 20px">Adresse:</h4>
                             <p style="color: black;font-size: 20px">2 berth </p>
                         </div>

                         <div class="email">
                             <i class="bi bi-envelope"></i>
                             <h4 style="color:black;font-size: 20px">Email:</h4>
                             <p style="color: black;font-size: 20px">pierre@gmail.com</p>
                         </div>

                         <div class="phone">
                             <i class="bi bi-phone"></i>
                             <h4 style="color: black;font-size: 20px">telephone:</h4>
                             <p style="color:black;font-size: 20px"></p>
                         </div>

                     </div>

                 </div>-->

                <div class="col-lg-8 mt-5 mt-lg-0"  data-aos="zoom-in-down" style="margin-left: 20%;">
                    <?php
                if (array_key_exists('errors',$_SESSION)):
                ?>
                <div class="alert alert-danger">
                    <?= implode('<br>',$_SESSION['errors']);    ?>
                </div>
                    <?php
                    unset($_SESSION['errors']);endif;
                    ?>

                    <form action="envoimail.php" method="post" role="form" class="php-email-form">
                        <div class="row mt-5"  >
                            <div class="col-md-6 form-group ">
                                <label for="name">votre nom</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required <?=isset($_SESSION['inputs']['name']) ? $_SESSION['inputs'] ['name'] :''; ?>>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <label for="email">email</label>
                                <input type="email" class="form-control " name="email" id="email" placeholder="Your Email" required  <?=isset($_SESSION['inputs']['email']) ? $_SESSION['inputs'] ['email'] :''; ?>>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="subject">objet</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required  <?=isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs'] ['subject'] :''; ?>>
                        </div>
                        <div class="form-group mt-3">
                            <label for="inputmessage">message</label>
                            <textarea id="inputmessage" class="form-control " name="message" rows="5" placeholder="Message" required  <?=isset($_SESSION['inputs']['message']) ? $_SESSION['inputs'] ['message'] :''; ?>></textarea>
                        </div>
                        <div class="my-3">
                            <div class="text-center mt-2 "><button class="btn btn-success ml-5" type="submit" >Envoyer</button></div>
                            <div class="error-message"></div>
                            <!-- <div class="sent-message">Votre message a été envoyé!</div>-->
                        </div>

                    </form>

                </div>

            </div>

        </div>

   </section>
       <!---------------------------------------------------contact essai------------------------------------>

<!------------------------------------------competences------------------------------------------------>
<div class="row">
    <div class="col-lg-12">
<div id="projet" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
<div class="text-center" data-aos="flip-left" >
    <span class="text  "style=" " >competences</span>
</div>

</div>
</div>
    <div class="text-center">
        <div class="text-center">
            <h2 style="color: white;overflow: hidden;" class="mt-2"> Elles sont en constantes améliorations car pour moi la joie de ce métier fait que l’on en apprend tous les jours,d’autant plus en étant impliqué, curieux et passionné.</h2>
        </div>
    <h2 style="color: #4ce09c;overflow: hidden;" class="mt-2">Le succès est un chemin que la patience et le travail rendent accessible.</h2>
    </div>
    <!-------------------------------------icon png----------------------------------------------->

    <article >
        <div class="container text-center mt-5" data-aos="fade-right" style="z-index:-1;">
            <div class="row">
                <div class="col-4">
                    <img class="img-fluid data-aos=fade-left" data-aos="fade-up" src="image/wordpress.jpg" alt="">
                </div>
                <div class="col-4">
                    <img class="img-fluid data-aos=fade-right" data-aos="fade-up" src="image/css%205.png" alt="">
                </div>
                <div class="col-4">
                    <img class="img-fluid data-aos=fade-left" data-aos="fade-up" src="https://www.icone-png.com/png/26/26122.png" alt="">
                </div>
            </div>
        </div>
    </article>

    <!-----------------------------------------barre progression------------------------------------------------------->


    <div class="container"data-aos="flip-right" id="progress">

    <p class="text-success"><b style="font-size: 20px;">JAVASCRIPT</b></p>
    <div class="progress">
        <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
            60%
        </div>
    </div>
    <p class="text-info"><b style="font-size: 20px;">HTML</b></p>
    <div class="progress">

        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
            70%
        </div>
    </div>
    <p class="text-warning"><b style="font-size: 20px;">PHP</b></p>
    <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:55%">
            55%
        </div>
    </div>
    <p class="text-danger"><b style="font-size: 20px;">CSS</b></p>
    <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
            70%
        </div>
    </div>
</div>
</div>

<!-- End Contact Section -->
<!-------------------------------------------------------------mes projets----------------------------------------------------------------------->
<section id="section" class="container-fluid" data-aos="flip-left"
         data-aos-easing="ease-out-cubic"
         data-aos-duration="2000" >
<div class="text-center"  data-aos="flip-up">
    <span class="text  text-info" style=" word-break: break-word;" >Mes projets</span>
</div>


    <div class="container-fluid">

        <div class="row">
            <div class="col card-git" data-aos="fade-right">
                <div id="card" class="card ml-5" style="width: 18rem;margin-left: 5%;margin-top: 2%"  data-aos="zoom-out-down">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/70/32/4f/parc-jouvet.jpg" style="width:100%; " class="rounded float-end" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Département de la Drôme</h5>
                        <p class="card-text">La Drôme la porte d'entrée du midi ♥</p>
                        <a href="http://localhost/drome/drome.html" class="btn btn-primary">Visitons</a>
                    </div>
                </div>
            </div>

            <div class="col">

            </div>


            <div class="col">

            </div>


            <div class="col card-git" data-aos="fade-left">
                <div id="card" class="card ml-5" style="width: 18rem" data-aos="fade-left">
                    <img src="https://blog.zenhub.com/content/images/2016/07/github-octocat.jpg" width="100%" class="rounded float-start" alt="...">

                    <div class="card" >
                        <h5 class="card-title">Mon Github</h5>
                        <p class="card-text">par ici pour voir mes codes  ♥</p>
                        <a href="https://github.com/yves-sanou?tab=repositories" class="btn btn-primary">Visitons</a>
                    </div>
                </div>
            </div>
        </div>




    </div>












</section>
<script>
    AOS.init();
</script>
<!-- Optional JavaScript; choose one of the two! -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

