<?php

namespace Devbombeiro\DevAthus;


class Professor
{

    private $idprof;
    private $nomeprof;
    private $materia;
    private $telefone;
    private $email;


    public function __construct($name, $mat, $tel, $em)
    {
        $this->nomeprof = $name;
        $this->materia = $mat;
        $this->telefone = $tel;
        $this->email = $em;
    }

    public function consulta()
    {
        echo ' 
                Nome: ' . $this->nomeprof . '<br>
                Materia: ' . $this->materia . '<br>
                Telefone: ' . $this->telefone . '<br>
                Email: ' . $this->email . '<br>';
    }
    /**
     * Get the value of nomeprof
     */
    public function getNomeprof()
    {
        return $this->nomeprof;
    }

    /**
     * Set the value of nomeprof
     *
     * @return  self
     */
    public function setNomeprof($nomeprof)
    {
        $this->nomeprof = $nomeprof;

        return $this;
    }

    /**
     * Get the value of materia
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set the value of materia
     *
     * @return  self
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of idprof
     */
    public function getIdprof()
    {
        return $this->idprof;
    }

    /**
     * Set the value of idprof
     *
     * @return  self
     */
    public function setIdprof($idprof)
    {
        $this->idprof = $idprof;

        return $this;
    }
}
