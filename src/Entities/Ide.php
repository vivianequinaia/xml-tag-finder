<?php

namespace Arquivei\XML\Tag\Finder\Entities;

class Ide
{
    private $cUF;
    private $cNF;
    private $natOp;
    private $mod;
    private $serie;
    private $nNF;
    private $dhEmi;
    private $tpNF;
    private $idDest;
    private $cMunFG;
    private $tpImp;
    private $tpEmis;
    private $cDV;
    private $tpAmb;
    private $finNFe;
    private $indFinal;
    private $indPres;
    private $procEmi;
    private $verProc;
    private $dhCont;
    private $xJust;

    public function getCUF(): string
    {
        return $this->cUF;
    }

    public function setCUF(string $cUF): Ide
    {
        $this->cUF = $cUF;
        return $this;
    }

    public function getCNF(): string
    {
        return $this->cNF;
    }

    public function setCNF(string $cNF): Ide
    {
        $this->cNF = $cNF;
        return $this;
    }

    public function getNatOp(): string
    {
        return $this->natOp;
    }

    public function setNatOp(string $natOp): Ide
    {
        $this->natOp = $natOp;
        return $this;
    }

    public function getMod(): string
    {
        return $this->mod;
    }

    public function setMod(string $mod): Ide
    {
        $this->mod = $mod;
        return $this;
    }

    public function getSerie(): string
    {
        return $this->serie;
    }

    public function setSerie(string $serie): Ide
    {
        $this->serie = $serie;
        return $this;
    }

    public function getNNF(): string
    {
        return $this->nNF;
    }

    public function setNNF(string $nNF): Ide
    {
        $this->nNF = $nNF;
        return $this;
    }

    public function getDhEmi(): string
    {
        return $this->dhEmi;
    }

    public function setDhEmi(string $dhEmi): Ide
    {
        $this->dhEmi = $dhEmi;
        return $this;
    }

    public function getTpNF(): string
    {
        return $this->tpNF;
    }

    public function setTpNF(string $tpNF): Ide
    {
        $this->tpNF = $tpNF;
        return $this;
    }

    public function getIdDest(): string
    {
        return $this->idDest;
    }

    public function setIdDest(string $idDest): Ide
    {
        $this->idDest = $idDest;
        return $this;
    }

    public function getCMunFG(): string
    {
        return $this->cMunFG;
    }

    public function setCMunFG(string $cMunFG): Ide
    {
        $this->cMunFG = $cMunFG;
        return $this;
    }

    public function getTpImp(): string
    {
        return $this->tpImp;
    }

    public function setTpImp(string $tpImp): Ide
    {
        $this->tpImp = $tpImp;
        return $this;
    }

    public function getTpEmis(): string
    {
        return $this->tpEmis;
    }

    public function setTpEmis(string $tpEmis): Ide
    {
        $this->tpEmis = $tpEmis;
        return $this;
    }

    public function getCDV(): string
    {
        return $this->cDV;
    }

    public function setCDV(string $cDV): Ide
    {
        $this->cDV = $cDV;
        return $this;
    }

    public function getTpAmb(): string
    {
        return $this->tpAmb;
    }

    public function setTpAmb(string $tpAmb): Ide
    {
        $this->tpAmb = $tpAmb;
        return $this;
    }

    public function getFinNFe(): string
    {
        return $this->finNFe;
    }

    public function setFinNFe(string $finNFe): Ide
    {
        $this->finNFe = $finNFe;
        return $this;
    }

    public function getIndFinal(): string
    {
        return $this->indFinal;
    }

    public function setIndFinal(string $indFinal): Ide
    {
        $this->indFinal = $indFinal;
        return $this;
    }

    public function getIndPres(): string
    {
        return $this->indPres;
    }

    public function setIndPres(string $indPres): Ide
    {
        $this->indPres = $indPres;
        return $this;
    }

    public function getProcEmi(): string
    {
        return $this->procEmi;
    }

    public function setProcEmi(string $procEmi): Ide
    {
        $this->procEmi = $procEmi;
        return $this;
    }

    public function getVerProc(): string
    {
        return $this->verProc;
    }

    public function setVerProc(string $verProc): Ide
    {
        $this->verProc = $verProc;
        return $this;
    }

    public function getDhCont(): string
    {
        return $this->dhCont;
    }

    public function setDhCont(string $dhCont): Ide
    {
        $this->dhCont = $dhCont;
        return $this;
    }

    public function getXJust(): string
    {
        return $this->xJust;
    }

    public function setXJust(string $xJust): Ide
    {
        $this->xJust = $xJust;
        return $this;
    }
}
