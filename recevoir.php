<?php
$name = $_POST['name'];
$fristname = $_POST['fristname'];
$email = $_POST['email'];
$telephone = $_POST['phone'];
// $path = "document/" . basename( $_GET['formFile']['name']);
// if (move_uploaded_file($_FILES['formFile']['tmp_name'],$path)) {
// 	$message ="Le mail a bien été envoyer ";
// }else{
// 	$message = "Le fichier n'a pas été envoyer";
// }


header("Location:mail/mail_receved.php");