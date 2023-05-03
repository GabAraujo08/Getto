<?PHP
        require_once 'GlobalPerfil.php';
        
        session_start();
        header('Location: perfil.php');     

        $conexao = Conexao::conectar();

        $queryInsert = "UPDATE tbUsuario
                            SET nomeUsuario = ?
                            ,nicknameUsuario = ?
                            ,foneUsuario = ?
                            ,estadoUsuario = ?
                            ,cidadeUsuario = ?
                            WHERE idUsuario = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $_POST['nomeUsuario']);
            $prepareStatement->bindValue(2, $_POST['nicknameUsuario']);
            $prepareStatement->bindValue(3, $_POST['foneUsuario']);
            $prepareStatement->bindValue(4, $_POST['estadoUsuario']);
            $prepareStatement->bindValue(5, $_POST['cidadeUsuario']);
            $prepareStatement->bindValue(6, $_SESSION['idUsuario']);

            $prepareStatement->execute();

            if(isset($_SESSION['generoArtista'])){
                $queryInsert2 = "UPDATE tbArtista
                                SET generoArtista = ?
                                ,bioArtista = ?
                                WHERE idUsuario = ?";

                $prepareStatement2 = $conexao->prepare($queryInsert2);

                $prepareStatement2->bindValue(1, $_POST['generoArtista']);
                $prepareStatement2->bindValue(2, $_POST['bioArtista']);
                $prepareStatement2->bindValue(3, $_SESSION['idUsuario']);

                $prepareStatement2->execute();

            }

            $_SESSION['nomeUsuario'] = $_POST['nomeUsuario'];
            $_SESSION['nicknameUsuario'] = $_POST['nicknameUsuario'];
            $_SESSION['foneUsuario'] = $_POST['foneUsuario'];
            $_SESSION['estadoUsuario'] = $_POST['estadoUsuario'];
            $_SESSION['cidadeUsuario'] = $_POST['cidadeUsuario'];
            $_SESSION['generoArtista'] = $_POST['generoArtista'];
            $_SESSION['bioArtista'] = $_POST['bioArtista'];


?>