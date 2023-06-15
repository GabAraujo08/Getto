<?php
require_once 'GlobalController.php';

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['btnAprovar'])) {
    $usuario_id = $_POST['usuario_id'];
    $usuario_indice = $_POST['usuario_indice'];
    $usuario_email = $_POST['usuario_email'];

    $conexao = Conexao::conectar();

    $queryInsert = "UPDATE tbUsuario
                    SET statusContaUsuario = ?,
                    fotoPerfilUsuario = ?
                    WHERE idUsuario = ?";

    $prepareStatement = $conexao->prepare($queryInsert);

    $prepareStatement->bindValue(1, 'Normal');
    $prepareStatement->bindValue(2, '0.png');
    $prepareStatement->bindValue(3, $usuario_id);

    $prepareStatement->execute();

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'specttrumtech@gmail.com';
        $mail->Password = 'xwpgtcgbuetqbpnk';
        $mail->Port = 587;

        $mail->setFrom('specttrumtech@gmail.com');
        $mail->addAddress($usuario_email);

        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de Getto';

        // Corpo do email com a imagem incorporada
        $mail->Body = '
            <!DOCTYPE html>
            <html>
            <body>
                <h1>Parabéns!</h1>
                <p>Agora você pode acessar livremente a nossa plataforma e aproveitar todas as suas funcionalidades!!</p>
                <img src="cid:imagem" alt="Imagem incorporada">
            </body>
            </html>
        ';

        $mail->AltBody = 'Parabéns agora você pode acessar livremente a nossa plataforma e aproveitar todas suas funcionalidades!!';

        // Caminho para a imagem que deseja incorporar
        $imagePath = 'shrek.jpeg';
        $mail->addStringEmbeddedImage(file_get_contents($imagePath), 'imagem', 'imagem.jpg', 'base64', 'image/jpeg');

        // Iniciar o buffer de saída
        ob_start();

        if ($mail->send()) {
            // Descartar a saída gerada até o momento
            ob_end_clean();
            header('Location: ../Administrador/dashboard.php');
            exit; // Encerrar o script após o redirecionamento
        } else {
            // Descartar a saída gerada até o momento
            ob_end_clean();
            // Lógica de tratamento de erro
        }
    } catch (Exception $e) {
        // Descartar a saída gerada até o momento
        ob_end_clean();
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}

if (isset($_POST['btnRecusar'])) {
    $usuario_id = $_POST['usuario_id'];
    $usuario_email = $_POST['usuario_email'];

    $conexao = Conexao::conectar();

    // Excluir registros relacionados na tabela tbartista
    $deleteArtista = $conexao->prepare("DELETE FROM tbartista WHERE idUsuario = ?");
    $deleteArtista->bindValue(1, $usuario_id);
    $deleteArtista->execute();

    // Excluir o usuário na tabela tbUsuario
    $deleteUsuario = $conexao->prepare("DELETE FROM tbUsuario WHERE idUsuario = ?");
    $deleteUsuario->bindValue(1, $usuario_id);
    $deleteUsuario->execute();

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'specttrumtech@gmail.com';
        $mail->Password = 'xwpgtcgbuetqbpnk';
        $mail->Port = 587;

        $mail->setFrom('specttrumtech@gmail.com');
        $mail->addAddress($usuario_email);

        $mail->isHTML(true);
        $mail->Subject = 'Mensagem de Getto';

        // Corpo do email com a imagem incorporada
        $mail->Body = '
            <!DOCTYPE html>
            <html>
            <body>
                <h1>Infelizmente sua conta foi recusada!</h1>
                <p>Sua conta não atende aos requisitos para o uso da nossa plataforma.</p>
                <img src="cid:imagem" alt="Imagem incorporada">
            </body>
            </html>
        ';

        $mail->AltBody = 'Infelizmente sua conta foi recusada. Sua conta não atende aos requisitos para o uso da nossa plataforma.';

        // Caminho para a imagem que deseja incorporar
        $imagePath = 'shrek.jpeg';
        $mail->addStringEmbeddedImage(file_get_contents($imagePath), 'imagem', 'imagem.jpg', 'base64', 'image/jpeg');

        // Iniciar o buffer de saída
        ob_start();

        if ($mail->send()) {
            // Descartar a saída gerada até o momento
            ob_end_clean();
            header('Location: ../Administrador/dashboard.php');
            exit; // Encerrar o script após o redirecionamento
        } else {
            // Descartar a saída gerada até o momento
            ob_end_clean();
            // Lógica de tratamento de erro
        }
    } catch (Exception $e) {
        // Descartar a saída gerada até o momento
        ob_end_clean();
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}
?>


