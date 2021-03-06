<?php

require './dump.class.php';

$name = strip_tags($_POST['user_name']);
$organization = strip_tags($_POST['user_organization']);
$phone = strip_tags($_POST['user_phone']);
$email = strip_tags($_POST['user_email']);
$subject = strip_tags($_POST['subject']);
$msg = strip_tags($_POST['msg']);
$pvc = strip_tags($_POST['pvc']);

if (strlen($name) < 2) {
    $error['name'] = "Por favor ingrese su nombre.";
}

if (strlen($organization) < 2) {
    $error['name'] = "Por favor ingrese la empresa donde trabaja.";
}

if (strlen($phone) < 2) {
    $error['name'] = "Por favor ingrese su telefono.";
}

if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
    $error['email'] = "Por favor ingrese un email valido.";
}

if (strlen($msg) < 3) {
    $error['msg'] = "Por favor indique un mensaje.";
}
if ($pvc=="false") {
    $error['msg'] = "Seleccione aceptar t&eacute;rminos de privacidad";
}

if (!$error) {
    $para = 'contacto@ae-sol.net';
//    $para = 'lhernandez@sumawebdiseno.com';
    $titulo = $subject;
    $mensaje = '<table>'
            .'<tr><td>'
            . '<strong>Nombre:</strong><br>'.$name
            . '<td>'
            . '</tr>'
            .'<tr><td>'
            . '<strong>Nombre empresa:</strong><br>'.$organization
            . '<td>'
            . '</tr>'
            .'<tr><td>'
            . '<strong>Telefono:</strong><br>'.$phone
            . '<td>'
            . '</tr>'
            .'<tr><td>'
            . '<strong>Correo:</strong><br>'.$email
            . '<td>'
            . '</tr>'
            .'<tr><td>'
            . '<strong>Mensaje:</strong><br>'.$msg
            . '<td>'
            . '</tr>'
            . '<tr><td>'
            . '<strong>Acepto condiciones de privacidad:</strong><br>'.$pvc
            . '<td>'
            . '</tr>'
            . '</table>';
    $cabeceras = 'Content-type: text/html; \r\n From: ' . $email . "\r\n" .
            'Reply-To:' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    if(mail($para, $titulo, $mensaje, $cabeceras)){
        echo json_encode(array('type' => 'success','text' => 'Mensaje enviado correctamente'));
    }else{
        echo json_encode(array('type' => 'error','text' => 'Ocurrio un error al enviar el correo.'));
    }
} # end if no error
else {
    $response = '<ul>';
    $response .= (isset($error['name'])) ? "<li class='error'>" . $error['name'] . "</li> \n" : null;
    $response .= (isset($error['email'])) ? "<li class='error'>" . $error['email'] . "</li> \n" : null;
    $response .= (isset($error['subject'])) ? "<li class='error'>" . $error['subject'] . "</li> \n" : null;
    $response .= (isset($error['msg'])) ? "<li class='error'>" . $error['msg'] . "</li>" : null;
    $response .= (isset($error['pvc'])) ? "<li class='error'>" . $error['pvc'] . "</li>" : null;
    $response .= '</ul>';
    
    echo json_encode(array('type' => 'error','text' => $response));
} # end if there was an error sending