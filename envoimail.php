<?php
var_dump($_POST);
$errors=[];
if (!array_key_exists('name',$_POST) || $_POST['name']==''){
    $errors['name']="vous n'avez renseigné votre nom";
}
if (!array_key_exists('email',$_POST) || $_POST['email']==''|| filter_var($_POST['email'])){
    $errors['name']="vous n'avez renseigné un email valide";
}
if (!array_key_exists('object',$_POST) || $_POST['object']==''){
    $errors['name']="vous n'avez renseigné votre objet";
}
if (!array_key_exists('message',$_POST) || $_POST['message']==''){
    $errors['name']="vous n'avez renseigné votre message";
}
if (!empty($errors)){
    headers('location:mail.php');
    session_start();
    $_SESSION['errors']=$errors;
    $_SESSION['inputs']=$_POST;
}else{
    $_SESSION['success']="votre email a bien été envoyé ☺";
    $message=$_POST['message'];
    $headers='from: ';
    mail('soumou.yves@gmail.com','formulaire de contact','$message',$headers);
    header('location:http://localhost/yves%20portfolio/mail.php');
}
var_dump($errors);
die();
