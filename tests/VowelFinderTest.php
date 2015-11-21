<?php
use App\Console\Commands\VowelFinder;

/**
 * @group target23
 */
class VowelFinderTest extends TestCase
{

    /** @var VowelFinder|PHPUnit_Framework_MockObject_MockObject */
    private $vowelFinder;

    public function setUp()
    {
        $statement = "This is just a text; find all the vowels";
        $this->vowelFinder = new VowelFinder($statement);
        $this->vowelFinder->initCountVowels();
    }

    public function testGetTotalVowels()
    {
        $total = $this->vowelFinder->getTotalVowels();
        $this->assertEquals(10, $total);
    }


} 