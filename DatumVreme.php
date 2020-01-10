<?php

namespace zlatko;

use ErrorException;
use http\Exception;

class Datum
{
    private $brojSekundi;
    private $dan;
    private $mesec;
    private $godina;

    public function __construct(
        $godina = 1987,
        $mesec = 1,
        $dan = 5
    ) {
        $this->setDan($dan);
        $this->setMesec($mesec);
        $this->setGodina($godina);
    }

    public function getDan() {
        return $this->dan;
    }

    public function setDan($dan) {
        if (!is_int($dan)) {
            throw new ErrorException('Dan mora biti integer');
        }

        if ($dan < 1 || $dan > 31) {
            throw new ErrorException('greska');
        }

        if (!$this->proveriDatum()) {
            throw new ErrorException('Datum nije validan');
        }

        $this->dan = $dan;

        return $this;
    }

    private function proveriDatum() {
        // provera datuma
        return true;
    }

    public function getBrojSekundi()
    {
        return $this->brojSekundi;
    }

    public function setBrojSekundi($brojSekundi)
    {
        $this->brojSekundi = $brojSekundi;
        return $this;
    }

    public function getMesec()
    {
        return $this->mesec;
    }

    public function setMesec($mesec)
    {
        if (!is_int($mesec)) {
            throw new ErrorException('greska');
        }

        $this->mesec = $mesec;
        return $this;
    }

    public function setGodina($godina)
    {
        if (!is_int($godina)) {
            throw new ErrorException('greska');
        }

        $this->godina = $godina;
        return $this;
    }

    public function getGodina()
    {
        return $this->godina;
    }
}