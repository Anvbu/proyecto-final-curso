
<?php

$first_name = trim ( $_POST['first_name'] );
$last_name  = trim ( $_POST['last_name'] );
$contact_us = trim ( $_POST['contact_us'] );
$instagram_user = trim ( $_POST['instagram_user'] );


if ( ! empty ( $first_name ) && is_string ( $first_name ) && ! empty ( $last_name ) && is_string ($last_name) && ! empty ( $contact_us) && is_string ($contact_us) && ! empty ( $instagram_user ) && is_string ($instagram_user) {
    include 'correct-form.php' 
} else {
    include 'incorrect-form.php';
}


if (filter_var ($_POST ['email'], FILTER_VALIDATE_EMAIL) )  {
    echo 'El mail ingresado está correcto<br>';
} else {
    echo 'El mail ingresado es incorrecto<br>
    ';
}

$destino    = $_POST ['email'];
$asunto     = $_POST ['comentario'];

$comentario = " 
    Nombre: $first_name;
    Apellido: $last_name;
    Email: $email;
    Mensaje/propuesta: $contact_us;
    Instagram: $instagram_user;
";

$headers =
'From: angyvale.34@gmail.com' . "\r\n" .
    'Reply-To: wilkermata.photo@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    
mail ($destino, $asunto, $comentario, $headers);

?>