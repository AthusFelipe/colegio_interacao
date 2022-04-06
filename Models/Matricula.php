<?php

namespace Devbombeiro\DevAthus;



class Matriculas
{
    private  $idmatricula;
    private  $nomeresp;
    private   $nomealuno;
    private $serie;
    private $status;
    private $datamatricula;

    public function __construct($nomeresp, $nomealuno, $serie)
    {
        $this->nomeresp = $nomeresp;
        $this->nomealuno = $nomealuno;
        $this->serie = $serie;
        $this->status = 1;
        $this->datamatricula = date('Y-m-d');
    }

    public function consultar()
    {
        echo  '
                        Responsável: ' . $this->getNomeresp() . ' <br>
                        Aluno: ' . $this->getNomealuno() . ' <br>
                        Serie: ' . $this->getSerie() . '<br>
                        Status: ' . $this->getStatus() . '<br>
                        Data: ' . $this->getDatamatricula() . '<hr>';
    }

    /**
     * Get the value of idmatricula
     */
    public function getIdmatricula()
    {
        return $this->idmatricula;
    }

    /**
     * Set the value of idmatricula
     *
     * @return  self
     */
    public function setIdmatricula($idmatricula)
    {
        $this->idmatricula = $idmatricula;

        return $this;
    }

    /**
     * Get the value of nomeresp
     */
    public function getNomeresp()
    {
        return $this->nomeresp;
    }

    /**
     * Set the value of nomeresp
     *
     * @return  self
     */
    public function setNomeresp($nomeresp)
    {
        $this->nomeresp = $nomeresp;

        return $this;
    }

    /**
     * Get the value of nomealuno
     */
    public function getNomealuno()
    {
        return $this->nomealuno;
    }

    /**
     * Set the value of nomealuno
     *
     * @return  self
     */
    public function setNomealuno($nomealuno)
    {
        $this->nomealuno = $nomealuno;

        return $this;
    }

    /**
     * Get the value of serie
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set the value of serie
     *
     * @return  self
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function converteStatus()
    {
        if ($this->status == 1) $getStatus =  "Pré-matrícula";
        else $getStatus =  "Matriculado";

        return $getStatus;
    }
    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of datamatricula
     */
    public function getDatamatricula()
    {
        return $this->datamatricula;
    }

    /**
     * Set the value of datamatricula
     *
     * @return  self
     */
    public function setDatamatricula($datamatricula)
    {
        $this->datamatricula = $datamatricula;

        return $this;
    }
}
