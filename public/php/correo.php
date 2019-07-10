<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require_once "PHPMailer.php";
    require_once "SMTP.php";
    require_once "Exception.php";

    $nombre = $_POST["name"];
    $de = $_POST["email"];
    $mensaje = $_POST["message"];

    enviaCorreo($nombre, $de, $mensaje);

    function enviaCorreo($nombre, $de, $mensaje){

        $mail = new PHPMailer(true);

        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->Username = "arturalcoverrocontact@gmail.com";
        $mail->Password = "Kokoloko123";

        $mail->AddAddress("artur.bcn1998@gmail.com");
        $mail->SetFrom("$de", "Contacto");
        $mail->isHTML(true);
        $mail->Subject = "Correo de contacto - $de";
        $mail->Body = "Mensaje de: " . $nombre . "<br/>" . $mensaje;

        try {
            $mail->Send();

            header("Location: ../../");
        } catch(Exception $e){
            echo $mail->ErrorInfo;
            //header("Location: ../../");
        }
    }

?>