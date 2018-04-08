
<?php
if (isset($_POST['submit'])) {
  $name = $_POST['nombre'];
  $phone = $_POST['telefono'];
  $mailFrom = $_POST['email'];
  $message = $_POST['mensaje'];


  $mailTo = "contact@elespanol.com"; //Corregir.
  $headers = "From: ".$mailFrom;
  $txt = "Has recibido un nuevo correo de: ".$name.".\n\n"."Numero celular: ".$phone.".\n\n".$message;

  mail($mailTo, "Info", $txt, $headers);

  header("Location: contacto.php?mailsend");

}

//* contacto@kreisindustries.com */
