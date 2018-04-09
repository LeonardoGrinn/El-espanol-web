
<?php
if (isset($_POST['submit'])) {
  $name = $_POST['nombre'];
  $phone = $_POST['telefono'];
  $mailFrom = $_POST['email'];
  $message = $_POST['mensaje'];


  $mailTo = "manager.espanol@gmail.com"; //* contacto@español.restaurant */
  $headers = "From: ".$mailFrom;
  $txt = "Has recibido un nuevo correo de: ".$name.".\n\n"."Numero celular: ".$phone.".\n\n".$message;

  mail($mailTo, "Banquetes", $txt, $headers);

  header("Location: index.php?mailsend");

}

//* contacto@español.restaurant */
