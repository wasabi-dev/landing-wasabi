﻿<?php
<<<<<<< HEAD
if (!$_POST){
$remitente = $_POST['email'];
$destinatario = 'wasabidevelopment@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta'; // acá se puede modificar el asunto del mail

echo '<script language="javascript">
alert("Perdón! No pudimos enviar tu mensaje, por favor, intenta más tarde");
window.location= "contact.html"
</script>';

=======

$remitente = $_POST['email'];
$destinatario = 'wasabidevelopment@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Consulta'; // acá se puede modificar el asunto del mail
if (!$_POST){
>>>>>>> c88dbbb0f29e41db13c99fc5ee80df2ab934680b

?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["mensaje"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." ".$_POST['apellido']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);

    echo '<script language="javascript">
            alert("Thanks! We will contact you soon");
<<<<<<< HEAD
            window.location= "contact.html"
=======
            window.location= "confirma.html"
>>>>>>> c88dbbb0f29e41db13c99fc5ee80df2ab934680b
            </script>';

    
    //include 'confirma.html'; //se debe crear un html que confirma el envío
}
?>
