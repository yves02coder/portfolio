<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body style="background-color: lightblue;background-size: cover;
    background-repeat: no-repeat;">

<section id="contact" class="contact">


        <div class="text-center">
            <span class="text  text-info" >contact</span>
        </div>
 </div>

            <div class="col-lg-8 mt-5 mt-lg-0 "  data-aos="zoom-in-down" style="margin-left: 20%;width: 35%;">
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
                    <div class="row">
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


    </main><!-- End #main -->
    </div>



    <!-- End Contact Section -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</section>

</body>
</html>
<?php
unset($_SESSION['inputs']);

unset($_SESSION['errors']);