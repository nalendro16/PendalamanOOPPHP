<?php
trait Hewan
{
    public $nama,
        $darah,
        $jmlKaki,
        $keahlian,
        $attackPower,
        $defencePower;

    public function __construct($nama, $darah, $jmlKaki, $keahlian, $attackPower, $defencePower)
    {
        $this->nama = $nama;
        $this->darah = 50;
        $this->jmlKaki = $jmlKaki;
        $this->keahlian = $keahlian;
        $this->attackPower = $attackPower;
        $this->defencePower = $defencePower;
    }

    //set object
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function setDarah($darah)
    {
        $this->darah = $darah;
    }
    public function setJmlKaki($jmlKaki)
    {
        $this->jmlKaki = $jmlKaki;
    }
    public function setKeahlian($keahlian)
    {
        $this->keahlian = $keahlian;
    }
    public function setAttackPower($attackPower)
    {
        $this->attackPower = $attackPower;
    }
    public function setDefencePower($defencePower)
    {
        $this->defencePower = $defencePower;
    }

    //menerima input dr object
    public function getNama()
    {
        return $this->nama;
    }
    public function getDarah()
    {
        return $this->darah;
    }
    public function getJmlKaki()
    {
        return $this->jmlKaki;
    }
    public function getKeahlian()
    {
        return $this->keahlian;
    }
    public function getAttackPower()
    {
        return $this->attackPower;
    }
    public function getDefencePower()
    {
        return $this->defencePower;
    }

    // declare method atraksi
    public function artraksi()
    {
        return $this->nama . " sedang " . $this->keahlian;;
    }
}
