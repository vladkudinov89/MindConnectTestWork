<?php

use App\MainClass;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    private $word;
    private $time;
    private $extracts;

    protected function setUp()
    {
        parent::setUp();
        $this->word = new MainClass();
        $this->time = new MainClass();
        $this->extracts = new MainClass();
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

    /** @test */
    public function time_sql()
    {
        $this->assertEquals(
            (new DateTime())
                ->setDate(2014, 2, 2)
                ->setTime(0,0,0)
                ->format('Y-m-d H:i:s'),
            $this->time::sql_date_format("02/02/2014 00.00.00")
            );
    }

    /** @test */
    public function extract_string_one_bracket()
    {
       $this->assertEquals(
               "brown fox"
           ,
           $this->extracts::extract_string('The quick [brown fox]')
       );
    }

    /** @test */
    public function extract_string_few_brackets()
    {
        $result = implode(["brown fox", "testing"] , ',');

        $this->assertEquals(
            $result,
            $this->extracts::extract_string('The quick [brown fox]. Test [testing].')
        );
    }

    /** @test */
    public function extract_string_no_brackets()
    {
        $this->assertEquals(
            '""',
            $this->extracts::extract_string('Hello World.')
        );
    }
}
