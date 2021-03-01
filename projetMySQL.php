<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <title></title>
</head>
<body>
<div id="projet">
    <div class="text-center" >
        <span class="text  " >Mes projets MySQL</span>
    </div>
<article>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
    </script>
    <div id="flip">Mes projets MySQL</div>
    <div id="panel">
        <div class="row">
            <div class="col-6">
                <?php
                //header("location:http://localhost/CRUD-ecommerce-master/");
                ?>
            </div>
        </div>
        <div class="col-6">
            <?php
            //header("location:http://localhost/Projet_3B-master/listeAmpoule.php");
            ?>
        </div>

    </div>
</article>






</body>
</html>