<?php
use App\Console\Commands\ReverseStatement;

/**
 * @group target23
 */
class ReverseStatementTest extends TestCase
{
    /** @var ReverseStatement */
    private $statement;

    public function setUp()
    {
        $statement = "Holis how the things going";
        $this->statement = new ReverseStatement($statement);
    }

    public function tearDown()
    {
        unset($this->statement);
    }

    public function testGetReversedStatement()
    {
        $actual = $this->statement->getReversedStatement();
        $this->assertEquals('going things the how Holis', $actual);
    }

    public function testGetReversedByChar()
    {
        $actual = $this->statement->getReversedByChar();
        $this->assertEquals('gniog sgniht eht woh siloH', $actual);
    }

} 