<?php

namespace Arquivei\XML\Tag\Finder\Entities;

class EnderDest
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

    public function getXLgr(): string
    {
        return $this->xLgr;
    }

    public function setXLgr(string $xLgr): EnderDest
    {
        $this->xLgr = $xLgr;
        return $this;
    }

    public function getNro(): string
    {
        return $this->nro;
    }

    public function setNro(string $nro): EnderDest
    {
        $this->nro = $nro;
        return $this;
    }

    public function getXBairro(): string
    {
        return $this->xBairro;
    }

    public function setXBairro(string $xBairro): EnderDest
    {
        $this->xBairro = $xBairro;
        return $this;
    }

    public function getCMun(): string
    {
        return $this->cMun;
    }

    public function setCMun(string $cMun): EnderDest
    {
        $this->cMun = $cMun;
        return $this;
    }

    public function getXMun(): string
    {
        return $this->xMun;
    }

    public function setXMun(string $xMun): EnderDest
    {
        $this->xMun = $xMun;
        return $this;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function setUf(string $uf): EnderDest
    {
        $this->uf = $uf;
        return $this;
    }

    public function getCep():string
    {
        return $this->cep;
    }

    public function setCep(string $cep): EnderDest
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCPais(): string
    {
        return $this->cPais;
    }

    public function setCPais(string $cPais): EnderDest
    {
        $this->cPais = $cPais;
        return $this;
    }

    public function getXPais(): string
    {
        return $this->xPais;
    }

    public function setXPais(string $xPais): EnderDest
    {
        $this->xPais = $xPais;
        return $this;
    }
}
