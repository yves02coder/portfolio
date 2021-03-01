

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body >
<header class="container text-center">
    <div class="text-center"style="margin-left: 30%" >
        <nav class="navbar navbar-expand-lg navbar-light bg "style="#030C2A">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active text-center" aria-current="page" href="header.php" style="color: white"><b>ACCUEIL</b></a>
                        <a class="nav-link " href="contact.php" style="color: white"><b>CONTACT</b></a>
                        <a class="nav-link " href="#" style="color: white"><b>MES COMPETENCES</b></a>
                        <a class="nav-link " href="projetMySQL.php" style="color: white"><b>A PROPOS</b></a>

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<section id="contact" class="contact"style="background-color: lightblue;background-attachment: fixed, scroll;
    background-repeat: no-repeat, repeat-y;">
    <div class="container" data-aos="fade-up">

        <div class="text-center">
            <span class="text  text-info" >contact</span>
        </div>

        <div class="section-title">

            <p style="font-size: 30px;"><b class="text-success">
                    Bonjour,</br>
                    Vous pouvez me joindre pour de plus amples explications et ou précisions.</br>
                    Merci !
                </b></p>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.lacroixjacquemard-immo.com/public/files/images/vivre-a-echirolles-38130-isere.jpg" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Adresse:</h4>
                        <p>3 rue Albert Einstein 38130 Echirolles</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>telephone:</h4>
                        <p>0751576721</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="text-center mt-2 "><button class="btn btn button ml-5" type="submit" >Envoyer</button></div>
                        <div class="error-message"></div>
                       <!-- <div class="sent-message">Votre message a été envoyé!</div>-->
                    </div>

                </form>

            </div>

        </div>

    </div>


</main><!-- End #main -->
</div>



<!-- End Contact Section -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</section>

</body>
</html>
</div>