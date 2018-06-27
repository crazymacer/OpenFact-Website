<?php
// process.php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['plan-name']))
        $errors['plan_name'] = 'Debe seleccionar un Plan.';

    if (empty($_POST['user-name']))
        $errors['user_name'] = 'Debe ingresar un nombre y apellido de referencia.';

    if (empty($_POST['user-phone']))
        $errors['user_phone'] = 'Debe ingresar un número telefónico.';
    
// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
       
       
       
        // the message
        //$msg = "First line of text\nSecond line of text";

        // use wordwrap() if lines are longer than 70 characters
        //$msg = wordwrap($msg,70);

        // send email
        //mail("ventas@openfact.pe","My subject",$msg);



        $to      = 'ventas@openfact.pe';
        $subject = 'VENTAS OPENFACT';
        $message = 'Un nuevo usuario identificado como: '.$_POST['user-name'].', esta interesado en el plan: '.$_POST['plan-name'].' Favor de llamar al número: '.$_POST['user-phone'].' Lo antes posible.';
        $headers = 'From: soporte@openfact.pe' . "\r\n" .
            'Reply-To: soporte@openfact.pe' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Success!';

    }

    // return all our data to an AJAX call
    echo json_encode($data);

    ?>