<?php
class Harimau
{
    use Hewan, Fight;
    public function getInfoHewan()
    {
        return "Nama: {$this->nama} Darah: {$this->darah} Jumlah kaki: {$this->jmlKaki} Keahlian: {$this->keahlian} | AtkPower: {$this->attackPower} | DefPower:  {$this->defencePower}";
    }
}
