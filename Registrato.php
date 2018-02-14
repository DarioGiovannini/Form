<?php
try{
    include_once 'Php library/classverifyEmail.php';
    $vmail = new verifyEmail();
    if($vmail->check($_GET['email'])){
        echo $_GET['email'];
        echo "<br>";
        echo $_GET['password'];
    }
    else header("Location: http://localhost:63342/Form/Registrazione.html");
}
catch (verifyEmailException $emailException){

}

