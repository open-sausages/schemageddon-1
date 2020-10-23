<?php

class MyResolver
{
    public static function resolve()
    {
        die('here');
        return Page::get();
    }
}
