<?php
use App\Console\Commands\VowelFinderVersion2;

/**
 * @group target23
 */
class VowelFinderVersion2Test extends TestCase
{

    /** @var VowelFinderVersion2 */
    private $vowelFinder;

    public function setUp()
    {
        $statement = "This is just a text; find all the vowels";
        $this->vowelFinder = new VowelFinderVersion2($statement);
        $this->vowelFinder->fillVowels();
    }

    public function testGetTotalVowels()
    {
        $total = $this->vowelFinder->getTotalVowels();
        $this->assertEquals(10, $total);
    }


} 