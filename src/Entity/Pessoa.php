<?php

namespace Entidade;

class Pessoa
{
    /**
     * @var string
     */
    private $dsNome;

    /**
     * @var string
     */
    private $dsLogin;

    /**
     * @var string
     */
    private $dsSenha;

    /**
     * @var int
     */
    private $cdPessoa;


    /**
     * Set dsNome.
     *
     * @param string $dsNome
     *
     * @return Pessoa
     */
    public function setDsNome($dsNome)
    {
        $this->dsNome = $dsNome;

        return $this;
    }

    /**
     * Get dsNome.
     *
     * @return string
     */
    public function getDsNome()
    {
        return $this->dsNome;
    }

    /**
     * Set dsLogin.
     *
     * @param string $dsLogin
     *
     * @return Pessoa
     */
    public function setDsLogin($dsLogin)
    {
        $this->dsLogin = $dsLogin;

        return $this;
    }

    /**
     * Get dsLogin.
     *
     * @return string
     */
    public function getDsLogin()
    {
        return $this->dsLogin;
    }

    /**
     * Set dsSenha.
     *
     * @param string $dsSenha
     *
     * @return Pessoa
     */
    public function setDsSenha($dsSenha)
    {
        $this->dsSenha = $dsSenha;

        return $this;
    }

    /**
     * Get dsSenha.
     *
     * @return string
     */
    public function getDsSenha()
    {
        return $this->dsSenha;
    }

    /**
     * Get cdPessoa.
     *
     * @return int
     */
    public function getCdPessoa()
    {
        return $this->cdPessoa;
    }
}
