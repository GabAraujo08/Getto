<?php
    require_once 'GlobalController.php';


    require_once('src/PHPMailer.php');
    require_once('src/SMTP.php');
    require_once('src/Exception.php');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    

    session_start();
    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
    } else {
    header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
    } 

    

    $denuncia = '"'. $_POST['desc'] . '" diz o denunciador do senguinte comentário: "' . $_POST['comentario'] . '" feito por ' . $_POST['nickname'];
    $d = new Denuncia();

    $d->setDescDenuncia($denuncia);
    $d->setIdTipoDenuncia($_POST['tipoDenuncia']);
    $d->setStatusDenuncia('Em Análise');

    DenunciaDao::cadastrar($d);



    $td = new DenunciaUsuario();

    $td->setIdDenuncia(DenunciaDao::consultarIdDenuncia($denuncia));
    $td->setIdUsuario($_POST['idDenunciador']);
    $td->setTipoUsuario('Denunciador');

    DenunciaUsuarioDao::cadastrar($td);

    $ud = new DenunciaUsuario();

    $ud->setIdDenuncia(DenunciaDao::consultarIdDenuncia($denuncia));
    $ud->setIdUsuario($_POST['idDenunciado']);
    $ud->setTipoUsuario('Denunciado');

    DenunciaUsuarioDao::cadastrar($ud);


    $usuario_email = $_POST['emaildenunciador'];
    $nomeDenunciado = $_POST['nickname'];

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
                <h1>Sua denúncia está em análise!</h1>
                <p>A denúncia que você fez está sendo análisa por nossos administradores e logo você terá um feedback dela, obrigado por contribuir para uma comunidade mais saúdavel</p>
                
            </body>
            </html>
        ';

        // $mail->AltBody = 'Parabéns agora você pode acessar livremente a nossa plataforma e aproveitar todas suas funcionalidades!!';

        // Caminho para a imagem de aprovação que deseja incorporar
      
        // Iniciar o buffer de saída
        ob_start();
        if ($mail->send()) {
            // Descartar a saída gerada até o momento
            ob_end_clean();
            if(isset($_SESSION['idArtista'])){
                header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
            } else {
            header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
            } 
           
            exit; // Encerrar o script após o redirecionamento
        } else {
            // Descartar a saída gerada até o momento
            ob_end_clean();
            if(isset($_SESSION['idArtista'])){
                header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
            } else {
            header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
            } 
            // Lógica de tratamento de erro
        }
       
    } catch (Exception $e) {
        // Descartar a saída gerada até o momento
        ob_end_clean();
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }

?>