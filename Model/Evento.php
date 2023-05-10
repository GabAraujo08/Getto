<?php

class Evento
{
    private $horarioInicioEvento;
    private $dataEvento;
    private $logradouroEvento;
    private $descEvento;
    private $imagemEvento;
    private $statusEvento;
    private $horarioFinalEvento;
    private $confirmarEvento;
    private $tituloEvento;
    private $numLogEvento;
    private $cepEvento;
    private $bairroEvento;
    private $cidadeEvento;
    private $estadoEvento;
    private $idArtista;
    private $idTipoArte;


    public function getHorarioInicioEvento()
    {
        return $this->horarioInicioEvento;
    }
    public function setHorarioInicioEvento($horarioInicio)
    {
        $this->horarioInicioEvento = $horarioInicio;
    }



    public function getDataEvento()
    {
        return $this->dataEvento;
    }
    public function setDataEvento($data)
    {
        $this->dataEvento = $data;
    }



    public function getLogradouroEvento()
    {
        return $this->logradouroEvento;
    }
    public function setLogradouroEvento($logradouro)
    {
        $this->logradouroEvento = $logradouro;
    }



    public function getDescEvento()
    {
        return $this->descEvento;
    }
    public function setDescEvento($desc)
    {
        $this->descEvento = $desc;
    }



    public function getImagemEvento()
    {
        return $this->imagemEvento;
    }
    public function setImagemEvento($imagem)
    {
        $this->imagemEvento = $imagem;
    }



    public function getStatusEvento()
    {
        return $this->statusEvento;
    }
    public function setStatusEvento($status)
    {
        $this->statusEvento = $status;
    }



    public function getHorarioFinalEvento()
    {
        return $this->horarioFinalEvento;
    }
    public function setHorarioFinalEvento($horarioFinal)
    {
        $this->horarioFinalEvento = $horarioFinal;
    }



    public function getConfirmarEvento()
    {
        return $this->confirmarEvento;
    }
    public function setConfirmarEvento($confirmar)
    {
        $this->confirmarEvento = $confirmar;
    }



    public function getTituloEvento()
    {
        return $this->tituloEvento;
    }
    public function setTituloEvento($titulo)
    {
        $this->tituloEvento = $titulo;
    }



    public function getNumLogEvento()
    {
        return $this->numLogEvento;
    }
    public function setNumLogEvento($numLog)
    {
        $this->numLogEvento = $numLog;
    }



    public function getCepEvento()
    {
        return $this->cepEvento;
    }
    public function setCepEvento($cep)
    {
        $this->cepEvento = $cep;
    }



    public function getBairroEvento()
    {
        return $this->bairroEvento;
    }
    public function setBairroEvento($bairro)
    {
        $this->bairroEvento = $bairro;
    }



    public function getCidadeEvento()
    {
        return $this->cidadeEvento;
    }
    public function setCidadeEvento($cidade)
    {
        $this->cidadeEvento = $cidade;
    }



    public function getEstadoEvento()
    {
        return $this->estadoEvento;
    }
    public function setEstadoEvento($estado)
    {
        $this->estadoEvento = $estado;
    }



    public function getIdArtista()
    {
        return $this->idArtista;
    }
    public function setIdArtista($idArtista)
    {
        $this->idArtista = $idArtista;
    }



    public function getIdTipoArte()
    {
        return $this->idTipoArte;
    }
    public function setIdTipoArte($idTipoArte)
    {
        $this->idTipoArte = $idTipoArte;
    }
}
