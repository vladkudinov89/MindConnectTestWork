<?php

use App\MainClass;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    private $word;

    protected function setUp()
    {
        parent::setUp();
        $this->word = new MainClass();
    }

    /** @test */
    public function last_word_is_null_length()
    {
        $this->assertEquals(0 ,   $this->word::last_word());
    }

    /** @test */
    public function last_word_sentence_length()
    {
        $this->assertEquals(7 , $this->word::last_word('test test.test testing'));
    }

    /** @test */
    public function last_word_empty_param()
    {
        $this->assertEquals(0 , $this->word::last_word(''));
    }


}
