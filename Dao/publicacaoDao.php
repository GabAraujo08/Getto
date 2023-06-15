<?PHP
require_once 'GlobalDao.php';

class PublicacaoDao
{

    public static function cadastrar($publicacao)
    {
        $conexao = Conexao::conectar();

        $queryInsert = "INSERT INTO tbPublicacao(idArtista, descPublicacao, statusPublicacao, idTipoArte)
                            VALUES(?, ?, ?, ?)";

        $prepareStatement = $conexao->prepare($queryInsert);

        $prepareStatement->bindValue(1, $publicacao->getIdArtista());
        $prepareStatement->bindValue(2, $publicacao->getDescPublicacao());
        $prepareStatement->bindValue(3, $publicacao->getStatusPublicacao());
        $prepareStatement->bindValue(4, $publicacao->getIdTipoArte());
        $prepareStatement->execute();
        return 'Cadastrou';
    }
    public static function consultarId($publicacao)
    {
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idPublicacao FROM tbPublicacao WHERE descPublicacao LIKE '" . $publicacao->getDescPublicacao() . "'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $publicacao)
            $id = $publicacao['idPublicacao'];
        return $id;
    }
    public static function ListaPublicacao()
    {
        $conexao = Conexao::conectar();

        $consulta = $conexao->prepare('SELECT tbUsuario.nicknameUsuario,  tbUsuario.fotoPerfilUsuario, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, TIMESTAMPDIFF(MINUTE, tbPublicacao.horarioPublicacao, NOW()) as minutosPublicacao
                                           FROM tbPublicacao
                                           INNER JOIN tbArtista ON tbArtista.idArtista = tbPublicacao.idArtista
                                           INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbArtista.idUsuario
                                           INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                                           INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                                           ORDER BY (
                                              SELECT COUNT(tbPublicacao.idPublicacao)
                                              FROM tbPublicacao
                                              WHERE tbPublicacao.idArtista = tbArtista.idArtista
                                           ) DESC, tbPublicacao.horarioPublicacao DESC');

        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public static function ListaMinhasPublicacao($id)
    {

        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare('SELECT DISTINCT tbUsuario.nicknameUsuario,  tbUsuario.fotoPerfilUsuario, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, TIMESTAMPDIFF(MINUTE, tbPublicacao.horarioPublicacao, NOW()) as minutosPublicacao FROM tbPublicacao
                                               INNER JOIN tbArtista ON tbArtista.idArtista = tbPublicacao.idArtista
                                               INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbArtista.idUsuario
                                               INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                                               INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                                               INNER JOIN tbSeguidores ON tbSeguidores.idUsuario = tbUsuario.idUsuario
                                               WHERE tbPublicacao.idArtista = ?
                                               ORDER BY tbPublicacao.horarioPublicacao DESC
                                               ');
        $consulta->bindValue(1, $id);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
    public static function ListaPublicacaoSegui($id)
    {

        $conexao = Conexao::conectar();


        $query = $conexao->prepare('SELECT idArtista FROM tbSeguidores WHERE idUsuario =?');
        $query->bindValue(1, $id);
        $query->execute();
        $resultado1 = $query->fetchAll(PDO::FETCH_ASSOC);


        $countResu1 = count($resultado1);
        $resultado = [];

        for ($i = 0; $i < $countResu1; $i++) {
            $consulta = $conexao->prepare('SELECT tbUsuario.nicknameUsuario,  tbUsuario.fotoPerfilUsuario, tbPublicacao.idPublicacao, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, TIMESTAMPDIFF(MINUTE, tbPublicacao.horarioPublicacao, NOW()) as minutosPublicacao FROM tbPublicacao
                                INNER JOIN tbArtista ON tbArtista.idArtista = tbPublicacao.idArtista
                                INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbArtista.idUsuario
                                INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                                INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                                WHERE tbPublicacao.idArtista = ?
                                ORDER BY tbPublicacao.horarioPublicacao DESC
                                ');
            $consulta->bindValue(1, $resultado1[$i]['idArtista']);
            $consulta->execute();
            $resultado2 = $consulta->fetchAll(PDO::FETCH_ASSOC);

            $resultado = array_merge($resultado, $resultado2);
        }
        return $resultado;
    }

    public static function QuantPublis($id)
    {
        $conexao = Conexao::conectar();

        $query = $conexao->prepare('SELECT COUNT(idPublicacao) as quantPubli FROM tbPublicacao WHERE idArtista = ?');
        $query->bindValue(1, $id);
        $query->execute();
        $resultado1 = $query->fetchAll(PDO::FETCH_ASSOC);

        return $resultado1;
    }

    public static function ListaPublicacaoCurti($id)
    {
        $conexao = Conexao::conectar();
        $query = $conexao->prepare('SELECT tbPublicacao.idPublicacao, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, TIMESTAMPDIFF(MINUTE, tbPublicacao.horarioPublicacao, NOW()) as minutosPublicacao FROM tbCurtida
                INNER JOIN tbPublicacao ON tbCurtida.idPublicacao = tbPublicacao.idPublicacao
                INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                WHERE tbCurtida.idUsuario = ?
                ORDER BY tbPublicacao.horarioPublicacao DESC');
        $query->bindValue(1, $id);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }

    public static function TipoArteComMaisPublicacoes()
    {
        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare('SELECT DISTINCT tbPublicacao.idPublicacao, tbUsuario.nicknameUsuario, tbUsuario.fotoPerfilUsuario, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, tbTipoArte.idTipoArte, TIMESTAMPDIFF(MINUTE, tbPublicacao.horarioPublicacao, NOW()) as minutosPublicacao 
                                          FROM tbPublicacao
                                          INNER JOIN tbArtista ON tbArtista.idArtista = tbPublicacao.idArtista
                                          INNER JOIN tbTipoArte ON tbTipoArte.idTipoArte = tbPublicacao.idTipoArte
                                          INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbArtista.idUsuario
                                          INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                                          INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                                          INNER JOIN (
                                              SELECT tbPublicacao.idTipoArte, COUNT(tbPublicacao.idPublicacao) AS numPublicacoes
                                              FROM tbPublicacao
                                              GROUP BY tbPublicacao.idTipoArte
                                              ORDER BY numPublicacoes DESC
                                          ) AS tbPublicacoesContagem ON tbPublicacoesContagem.idTipoArte = tbTipoArte.idTipoArte
                                          ORDER BY tbPublicacoesContagem.numPublicacoes DESC, tbPublicacao.horarioPublicacao DESC');
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
    public static function buscaTopCategorias()
    {
        $conexao = Conexao::conectar();

        $consulta = $conexao->prepare('
            select ta.nomeTipoArte as nomeTipoArte, count(p.idTipoArte) as contagemCategorias from tbpublicacao p
            join tbtipoarte ta on p.idTipoArte = ta.idTipoArte
            group by ta.nomeTipoArte
            order by count(p.idTipoArte) desc
            ');

        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        return $resultado;
    }
}
