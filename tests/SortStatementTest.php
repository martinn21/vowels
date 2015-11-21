<?php
use App\Console\Commands\SortStatement;

/**
 * @group target24
 */
class SortStatementTest extends TestCase
{
    /** @var SortStatement */
    private $statement;

    public function setUp()
    {
        $statement = "Berlin Rocket Internet Incubator Startup Abc Abc Incubator";
        $this->statement = new SortStatement($statement);
    }

    public function tearDown()
    {
        unset($this->statement);
    }

    public function testGetSortedStatement()
    {
        $actual = $this->statement->sortingStatement();
        $this->statement->printStatement($actual);
    }


}