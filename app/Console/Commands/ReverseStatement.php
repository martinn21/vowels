<?php
/**
 * Created by PhpStorm.
 * User: martinramos
 * Date: 18/11/15
 * Time: 23:15
 */

namespace App\Console\Commands;


class ReverseStatement
{

    private $statement;

    public function __construct($statement)
    {
        $this->setStatement($statement);
    }

    public function getReversedStatement()
    {
        return implode(' ', array_reverse(explode(' ', $this->getStatement())));

    }

    public function getReversedByChar()
    {
        $statement = array_reverse(explode(' ', $this->getStatement()));
        foreach($statement as $word)
        {
            $wordReversed[] = implode('', array_reverse(str_split($word)));
        }

        return implode(' ', $wordReversed);
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