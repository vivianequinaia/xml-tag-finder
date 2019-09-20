<?php

namespace Arquivei\XML\Tag\Finder\Entities;

class dest
{
    private $cpf;
    private $xNome;
    private $indIEDest;
    private $ie;
    private $enderDest;

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): dest
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getXNome(): string
    {
        return $this->xNome;
    }

    public function setXNome(string $xNome): dest
    {
        $this->xNome = $xNome;
        return $this;
    }

    public function getIndIEDest(): string
    {
        return $this->indIEDest;
    }

    public function setIndIEDest(string $indIEDest): dest
    {
        $this->indIEDest = $indIEDest;
        return $this;
    }

    public function getIe(): string
    {
        return $this->ie;
    }

    public function setIe(string $ie): dest
    {
        $this->ie = $ie;
        return $this;
    }

    public function getEnderDest(): string
    {
        return $this->enderDest;
    }

    public function setEnderDest(string $enderDest): dest
    {
        $this->enderDest = $enderDest;
        return $this;
    }
}
