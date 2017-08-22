<?php
    $email=$_POST['roryhoward@hotmail.co.uk'];
    $subject = 'Contact Request';
    $message = 'yes';

    mail($email, $subject, $message);
?>