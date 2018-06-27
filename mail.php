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

        $to         =   'ventas@openfact.pe';
        $subject    =   'VENTAS OPENFACT';
        $from       =   'soporte@openfact.pe'; 


        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= "From: ".$from."\r\n"."X-Mailer: php";
      
        /*$message = 'Un nuevo usuario identificado como: <b>'.$_POST['user-name'].'</b>'
                    .', esta interesado en el plan: <b>'.$_POST['plan-name'].'</b>'
                    .' Favor de llamar al número: <b>'
                    .$_POST['user-phone'].'</b>'
                    .' Lo antes posible.';
*/

$curr_timestamp = date('Y-m-d H:i:s');


        $message=' <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <title>OpenFact</title> <style type="text/css"> body { padding-top: 0 !important; padding-bottom: 0 !important; padding-top: 0 !important; padding-bottom: 0 !important; margin:0 !important; width: 100% !important; -webkit-text-size-adjust: 100% !important; -ms-text-size-adjust: 100% !important; -webkit-font-smoothing: antialiased !important; } .tableContent img { border: 0 !important; display: block !important; outline: none !important; } a{ color:#382F2E; } p, h1{ color:#382F2E; margin:0; } p{ text-align:left; color:#999999; font-size:14px; font-weight:normal; line-height:19px; } a.link1{ color:#382F2E; } a.link2{ font-size:16px; text-decoration:none; color:#ffffff; } h2{ text-align:left; color:#222222; font-size:19px; font-weight:normal; } div,p,ul,h1{ margin:0; } .bgBody{ background: #ffffff; } .bgItem{ background: #ffffff; }@media only screen and (max-width:480px){table[class="MainContainer"], td[class="cell"] {width: 100% !important;height:auto !important; }td[class="specbundle"] {width:100% !important;float:left !important;font-size:13px !important;line-height:17px !important;display:block !important;padding-bottom:15px !important;}td[class="spechide"] {display:none !important;} img[class="banner"] { width: 100% !important; height: auto !important;}td[class="left_pad"] {padding-left:15px !important;padding-right:15px !important;} }@media only screen and (max-width:540px) {table[class="MainContainer"], td[class="cell"] {width: 100% !important;height:auto !important; }td[class="specbundle"] {width:100% !important;float:left !important;font-size:13px !important;line-height:17px !important;display:block !important;padding-bottom:15px !important;}td[class="spechide"] {display:none !important;} img[class="banner"] { width: 100% !important; height: auto !important;}.font {font-size:18px !important;line-height:22px !important;}.font1 {font-size:18px !important;line-height:22px !important;}} </style><script type="colorScheme" class="swatch active">{ "name":"Default", "bgBody":"ffffff", "link":"382F2E", "color":"999999", "bgItem":"ffffff", "title":"222222"}</script></head><body paddingwidth="0" paddingheight="0" style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0"> <table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center" style="font-family:Helvetica, Arial,serif;"> <tbody> <tr> <td> <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" class="MainContainer"> <tbody> <tr> <td> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td valign="top" width="40">&nbsp;</td> <td> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tbody> <!-- =============================== Header ====================================== --> <tr> <td height="75" class="spechide"></td> <!-- =============================== Body ====================================== --> </tr> <tr> <td class="movableContentContainer " valign="top"> <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td height="35"></td> </tr> <tr> <td> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tbody> <tr> <td valign="top" align="center" class="specbundle"> <div class="contentEditableContainer contentTextEditable"> <div class="contentEditable"> <p style="text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;"><span class="specbundle2"><span class="font1">Nueva Solicitud de Información&nbsp;</span></span></p> </div> </div> </td> <td valign="top" class="specbundle"> <div class="contentEditableContainer contentTextEditable"> <div class="contentEditable"> <p style="text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#DC2828;"><span class="font">OPENFACT</span> </p> </div> </div> </td> </tr> </tbody> </table> </td> </tr> </tbody> </table> </div> <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;"> <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"> <tr> <td valign="top" align="center"> <div class="contentEditableContainer contentImageEditable"> <div class="contentEditable"> <img src="http://openfact.pe/images/line.png" width="251" height="43" alt="" data-default="placeholder" data-max-width="560"> </div> </div> </td> </tr> </table> </div> <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;"> <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center"> <tr> <td height="55"></td> </tr> <tr> <td align="left"> <div class="contentEditableContainer contentTextEditable"> <div class="contentEditable" align="center"> <h2 >Un nuevo usuario está interesando en OpenFact</h2> </div> </div> </td> </tr> <tr> <td height="15"> </td> </tr> <tr> <td align="left"> <div class="contentEditableContainer contentTextEditable"> <div class="contentEditable" align="center"> <p > Un nuevo usuario solicitó información para la facturación electrónica con los siguientes datos: <br> <br> <br> Nombres y Apellidos: <b>'.$_POST['user-name'].'</b> <br> <br> Teléfono: <b>'.$_POST['user-phone'].'</b> <br> <br> Plan: <b>'.$_POST['plan-name'].'</b> <br> <br> Fecha y Hora de solicitud: <b>'.$curr_timestamp.'</b> </p> </div> </div> </td> </tr> <tr> <td height="55"></td> </tr> <tr> <td height="20"></td> </tr> </table> </div> <!-- =============================== footer ====================================== --> </td> </tr> </tbody> </table> </td> <td valign="top" width="40">&nbsp;</td> </tr> </tbody> </table> </td> </tr> </tbody> </table> </td> </tr> </tbody> </table></body> </html>';


































        mail($to, $subject, $message, $headers);

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Success!';

    }

    // return all our data to an AJAX call
    echo json_encode($data);

    ?>