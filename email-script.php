<?php

    //var_dump($_POST); 

    $email='roryhoward@hotmail.co.uk';
    $subject = 'Contact Request';
    $message = 'yes';

    mail($email, $subject, $message);
?>