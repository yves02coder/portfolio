<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/favicon.jpg"size="any"type="image/jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="cv.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Mon cv</title>
</head>
<body style="background-color: lightgray">

<header>

        <div class="text-center mb-5"  ><b class="text">Curriculum Vitae</b></div>

</header>
<!-------------------------------------------------------------card contact----------------------------------------------------------------------------------->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" id="card">
                <div class="card" style="width: 18rem;background-image: url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
                    <i class="fa fa-address-book fa-5x" aria-hidden="true" style="color: white"></i>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text" style="color: white"><b>NOM: SANOU</b></p>
                        <p class="card-text" style="color: white"><b>PRENOM: YVES</b></p>
                       <!-- <p class="card-text" style="color: white"><b>AGE: 37 ans</b></p>-->

                    </div>
                </div>
                <div class="card" style="width: 18rem;margin-top: 5px;background-image: url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
                    <i class="fa fa-envelope fa-5x" aria-hidden="true" style="color: white"></i>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text" style="color: white">soumou.yves@gmail.com</p>

                    </div>
                </div>


                <div class="card" style="width: 18rem;margin-top: 5px;background-image: url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
                    <i class="fa fa-phone-square fa-5x" aria-hidden="true" style="color: white"></i>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text" style="color: white">0751576721</p>

                    </div>
                </div>
                <div class="card" style="width: 18rem;margin-top: 5px;background-image: url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500')">
                    <i class="fa fa-map-marker fa-5x" aria-hidden="true" style="color: white"></i>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text" style="color: white">3 rue Albert einstein 38130 Echirolles</p>

                    </div>
                </div>

            </div>
            <!--------------------------------------------------------------------------cv------------------------------------------------------------->

            <div class="col-7" id="card2" style="margin-left: 3%">
                <h2>2021-2022</h2>
                <h4>► ONLINEFORMAPRO:Formation développeur web/web mobile.</h4></br>
                <h2>2017-2020</h2>
               <h4>►CAPCOM-GROUP(ENGIE,ORANGE FIBRE):Manager commercial/Formateur</h4></br>
                <h2>2016_2017</h2>
               <h4>►CHOREGRAPHE DANSEUR:Ho Chi Minh (VIETNAM)</h4></br>
                <h1>SPORT</h1></br>

                <h2>2018-2020</h2>
                <h4>►BASKET BALL:Amicale Laïque d'Echirolles</h4></br>
                <h2>2016-2017</h2>
                <h4>►BASKET BALL:Ho Chi Minh </h4></br>
                <h2>1990-2018</h2>
                <h4>►TAE KWON DO:Moniteur Self-defense</h4>


            </div>



<div class="col-2">

    <aside>
        <ul>
        <h2>LANGUES</h2>

        <li><h3>ANGLAIS</h3></li>
        <h4>►Independant</h4>
        <li><h3>FRANCAIS</h3></li>
        <h4>►Courant</h4>
<ul>
    </aside>

    <aside>

        <h2>FORMATIONS</h2>
        <h4>►Gestion des activités génératrices de revenus</h4></li>
        <h4>►Linguistique licence</h4></li>
        <h4>►Etude d'implantation</h4></li>

    </aside>
</div>

        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <a class="btn btn-success " style="margin-left: 50%;margin-bottom: 5%" href="" download>telecharger</a>

</body>

</html>



<?php
/*
if (isset($_GET['path'])){
    $file_name=$_GET['path'];
    if(file_exists($file_name)){
//requet HTTP
        header('content-description:file transfer');
        header('content-type:application /octet-stream');
        header('cache-control:no-cache,must-revalidate');
        header('expire:0');
        header('content-Disposition:attachement;file_name="'.basename($file_name).'"');
        header('pragma:public');

        //vide le cache et envoi au navigateur sous des conditions
        flush();
        //lire le fichier
        readfile($file_name);
        exit();

    }else{
        echo "fichier introuvable.";
    }
}else{
    echo "le fichier n'existe pas";

}
?>

<div class="text-center m-5">
<a href="cv_pdf.php" class="btn btn-success" target="_blank">voir le cv</a>
<a href="cv_pdf.php?path=cv_pdf.php" class=" btn btn-info ">Telecharger</a>
</div>

*/



