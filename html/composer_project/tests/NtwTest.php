<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use NumberToWords\NumberToWords;
include_once(__DIR__ . "/../ntw.php");

final class NtwTest extends TestCase
{
    private $numberToWords;

    public function setUp(): void
    {
    $this->numberToWords = new NumberToWords();
    }

    public function tearDown() : void
    {
    unset($this->numberToWords);
    }

    public function testTranslateToEng(): void
    {
    $this->assertEquals('one hundred', translateToEng(100, $this->numberToWords));
    }
    
    public function testTranslateToFrench(): void
    {
    $this->assertEquals('cent', translateToFrench(100, $this->numberToWords));
    $this->assertEquals('vingt-trois', translateToFrench(23, $this->numberToWords));
    }
}


?>