<?php

class WordCount{

    //memecah kata dari kalimat sesuai spasi
    public function countWords($sentence){
        return count(explode(" ", $sentence));
    }
}