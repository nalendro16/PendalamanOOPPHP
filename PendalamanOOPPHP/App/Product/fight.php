<?php
trait Fight
{
    use Hewan;
    // mengambil nama
    // Serang harimau_1 sedang menyerang elang_3
    public function serang($target)
    {
        $dum = $target->nama;
        return $this->nama . " Menyerang " . $dum;
    }

    public function diserang($atacc)
    {
        $atk = $atacc->attackPower;
        $sisaDarah = $this->darah - ($atk / $this->defencePower);
        return $this->nama . " diserang " . $atacc->nama . " sisa darah " . $this->nama . " = " . $sisaDarah;
    }
}
