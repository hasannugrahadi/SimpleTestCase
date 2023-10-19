<?php

//menurunkan TestCase framework
use PHPUnit\Framework\TestCase;

//menggunakan class wordcount
require_once "Wordcount.php";

//class ujicoba dengan turunan dari TestCase
class SimpleTest extends TestCase{
    public function testCountWords(){
        //inisiasi objek
        $Wc = new WordCount();

        //String yang akan diuji
        $TestSentence = "My name is Joko";
        $WordCount = $Wc->countWords($TestSentence);

        //ujicoba dan cetak hasil
        $this->assertEquals(4, $WordCount);
    }
}