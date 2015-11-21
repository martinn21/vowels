<?php
namespace App\Console\Commands;


class SortStatement
{

    private $statement;

    public function __construct($statement)
    {
        $this->setStatement($statement);
    }

    private function getRepeatedWords($text)
    {
        foreach($text as $index => $word)
        {
            if($word > 1)
            {
                $moreThanOneRepeatedWord[$index] = $word;
            }
            else
            {
                $oneWord[$index] = $word;
            }
        }
        ksort($moreThanOneRepeatedWord);
        ksort($oneWord);
        return array_merge($moreThanOneRepeatedWord, $oneWord);
    }

    public function printStatement($words)
    {
        foreach($words as $inx => $word)
        {
            for($i=0; $i<$word; $i++)
            {
                echo $inx." ";
            }
            echo "\n";
        }
    }

    public function sortingStatement()
    {
        $text = $this->getStatement();
        $text = array_count_values(explode(' ', $text));
        //so here I just need to sort them
        arsort($text);
        $text = $this->getRepeatedWords($text);
        return $text;
}


    /**
     * @return mixed
     */
    private function getStatement()
    {
        return $this->statement;
    }

    /**
     * @param mixed $statement
     */
    private function setStatement($statement)
    {
        $this->statement = $statement;
    }

} 