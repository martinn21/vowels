<?php
namespace App\Console\Commands;


class VowelFinderVersion2
{

    /** @var string */
    private $statement = '';
    private $aVowel = 0;
    private $eVowel = 0;
    private $iVowel = 0;
    private $uVowel = 0;
    private $oVowel = 0;
    private $totalVowels = 0;

    public function __construct($statement)
    {
        $this->setStatement($statement);
    }

    public function getTotalVowels()
    {
        return $this->totalVowels = $this->aVowel + $this->eVowel + $this->iVowel + $this->oVowel + $this->uVowel;
    }

    public function fillVowels()
    {
        $statement = $this->getStatement();
        foreach($statement as $letter)
        {
            switch($letter)
            {
                case 'a':
                    $this->aVowel++;
                    break;
                case 'A':
                    $this->aVowel++;
                    break;
                case 'e':
                    $this->eVowel++;
                    break;
                case 'E':
                    $this->eVowel++;
                    break;
                case 'i':
                    $this->iVowel++;
                    break;
                case 'I':
                    $this->iVowel++;
                    break;
                case 'o':
                    $this->oVowel++;
                    break;
                case 'O':
                    $this->oVowel++;
                    break;
                case 'u':
                    $this->uVowel++;
                    break;
                case 'U':
                    $this->uVowel++;
                    break;
                default:
            }
        }
    }

    /**
     * @return string
     */
    private function getStatement()
    {
        return $this->statement;
    }

    /**
     * @param string $statement
     */
    private function setStatement($statement)
    {
        $this->statement = str_split($statement);
    }

    /**
     * @return int
     */
    public function getAVowel()
    {
        return $this->aVowel;
    }

    /**
     * @return int
     */
    public function getEVowel()
    {
        return $this->eVowel;
    }

    /**
     * @return int
     */
    public function getIVowel()
    {
        return $this->iVowel;
    }

    /**
     * @return int
     */
    public function getUVowel()
    {
        return $this->uVowel;
    }

    /**
     * @return int
     */
    public function getOVowel()
    {
        return $this->oVowel;
    }

} 