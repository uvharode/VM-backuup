<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use NumberToWords\NumberToWords;
use App\NtwClass;

final class NtwClassTest extends TestCase
{
    private $numberToWords;
    private $ntwClass;

    public function setUp(): void
    {
    $this->numberToWords = new NumberToWords();
    $this->ntwClass = new NtwClass($this->numberToWords);
    }

    public function tearDown() : void
    {
    unset($this->numberToWords);
    $this->ntwClass = null;
    }

    public function testTranslateToEng(): void
    {
    $this->assertEquals('one hundred', translateToEng(100));
    }
    
    public function testTranslateToFrench(): void
    {
    $this->assertEquals('cent', translateToFrench(100));
    $this->assertEquals('vingt-trois', translateToFrench(23));
    }
}


?>