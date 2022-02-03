<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $mailto = "7.morrisarielle@gmail.com";
    $headers = "From: ".$mail;
    $txt = "You have recieved an email from ".$name. ".\n\n" .$message;

    mail($mail, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>