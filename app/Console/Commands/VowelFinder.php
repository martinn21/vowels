<?php
namespace App\Console\Commands;


class VowelFinder
{

    const VOWEL_A_LOWER_CASE = 'a';
    const VOWEL_A_UPPER_CASE = 'A';
    const VOWEL_E_LOWER_CASE = 'e';
    const VOWEL_E_UPPER_CASE = 'E';
    const VOWEL_I_LOWER_CASE = 'i';
    const VOWEL_I_UPPER_CASE = 'I';
    const VOWEL_O_LOWER_CASE = 'o';
    const VOWEL_O_UPPER_CASE = 'O';
    const VOWEL_U_LOWER_CASE = 'u';
    const VOWEL_U_UPPER_CASE = 'U';

    private $statement = '';

    private $aVowel;
    private $eVowel;
    private $iVowel;
    private $oVowel;
    private $uVowel;

    private $totalVowels;


    public function __construct($statement)
    {
        $this->setStatement($statement);
    }

    public function initCountVowels()
    {
        $this->getTotalAVowel();
        $this->getTotalEVowel();
        $this->getTotalIVowel();
        $this->getTotalOVowel();
        $this->getTotalUVowel();
    }

    public function getTotalVowels()
    {
        return $this->totalVowels = $this->aVowel + $this->eVowel + $this->iVowel + $this->oVowel + $this->uVowel;
    }

    public function getTotalAVowel()
    {
        $this->aVowel = substr_count($this->getStatement(), self::VOWEL_A_LOWER_CASE) +
            substr_count($this->getStatement(), self::VOWEL_A_UPPER_CASE);
    }

    public function getTotalEVowel()
    {
        $this->eVowel = substr_count($this->getStatement(), self::VOWEL_E_LOWER_CASE) +
            substr_count($this->getStatement(), self::VOWEL_E_UPPER_CASE);
    }

    public function getTotalIVowel()
    {
        $this->iVowel = substr_count($this->getStatement(), self::VOWEL_I_LOWER_CASE) +
            substr_count($this->getStatement(), self::VOWEL_I_UPPER_CASE);
    }

    public function getTotalOVowel()
    {
        $this->oVowel = substr_count($this->getStatement(), self::VOWEL_O_LOWER_CASE) +
            substr_count($this->getStatement(), self::VOWEL_O_UPPER_CASE);
    }

    public function getTotalUVowel()
    {
        $this->uVowel = substr_count($this->getStatement(), self::VOWEL_U_LOWER_CASE) +
            substr_count($this->getStatement(), self::VOWEL_U_UPPER_CASE);
    }

    /**
     * @return mixed
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * @param mixed $statement
     */
    public function setStatement($statement)
    {
        $this->statement = $statement;
    }


} 