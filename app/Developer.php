<?php


namespace App;


class Developer extends Worker
{
    use HasRest;

    public function work()
    {
        print_r('working');
    }

    public function __debugInfo(){
        return null;
    }
}