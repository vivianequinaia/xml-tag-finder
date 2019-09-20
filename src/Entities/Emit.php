<?php

namespace Arquivei\XML\Tag\Finder\Entities;

class emit
{
    private $cnpj;
    private $xNome;
    private $ie;
    private $im;
    private $crt;
    private $xFant;
    private $enderEmit;

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): emit
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getXNome(): string
    {
        return $this->xNome;
    }

    public function setXNome(string $xNome): emit
    {
        $this->xNome = $xNome;
        return $this;
    }

    public function getIe(): string
    {
        return $this->ie;
    }

    public function setIe(string $ie): emit
    {
        $this->ie = $ie;
        return $this;
    }

    public function getIm(): string
    {
        return $this->im;
    }

    public function setIm(string $im): emit
    {
        $this->im = $im;
        return $this;
    }

    public function getCrt(): string
    {
        return $this->crt;
    }

    public function setCrt(string $crt): emit
    {
        $this->crt = $crt;
        return $this;
    }

    public function getXFant(): string
    {
        return $this->xFant;
    }

    public function setXFant(string $xFant): emit
    {
        $this->xFant = $xFant;
        return $this;
    }

    public function getEnderEmit(): string
    {
        return $this->enderEmit;
    }

    public function setEnderEmit(string $enderEmit): emit
    {
        $this->enderEmit = $enderEmit;
        return $this;
    }
}
