<?php

namespace Arquivei\XML\Tag\Finder\Entities;

class EnderEmit
{
    private $xLgr;
    private $nro;
    private $xBairro;
    private $cMun;
    private $xMun;
    private $uf;
    private $cep;
    private $cPais;
    private $xPais;
    private $fone;

    public function getXLgr(): string
    {
        return $this->xLgr;
    }

    public function setXLgr(string $xLgr): EnderEmit
    {
        $this->xLgr = $xLgr;
        return $this;
    }

    public function getNro(): string
    {
        return $this->nro;
    }

    public function setNro(string $nro): EnderEmit
    {
        $this->nro = $nro;
        return $this;
    }

    public function getXBairro(): string
    {
        return $this->xBairro;
    }

    public function setXBairro(string $xBairro): EnderEmit
    {
        $this->xBairro = $xBairro;
        return $this;
    }

    public function getCMun(): string
    {
        return $this->cMun;
    }

    public function setCMun(string $cMun): EnderEmit
    {
        $this->cMun = $cMun;
        return $this;
    }

    public function getXMun(): string
    {
        return $this->xMun;
    }

    public function setXMun(string $xMun): EnderEmit
    {
        $this->xMun = $xMun;
        return $this;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function setUf(string $uf): EnderEmit
    {
        $this->uf = $uf;
        return $this;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    public function setCep(string $cep): EnderEmit
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCPais(): string
    {
        return $this->cPais;
    }

    public function setCPais(string $cPais): EnderEmit
    {
        $this->cPais = $cPais;
        return $this;
    }

    public function getXPais(): string
    {
        return $this->xPais;
    }

    public function setXPais(string $xPais): EnderEmit
    {
        $this->xPais = $xPais;
        return $this;
    }

    public function getFone(): string
    {
        return $this->fone;
    }

    public function setFone(string $fone): EnderEmit
    {
        $this->fone = $fone;
        return $this;
    }
}
