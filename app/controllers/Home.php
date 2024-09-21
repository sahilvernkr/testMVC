<?php

class Home extends Controller
{
    public function index()
    {
        echo "This is it";
    }
}

$home = new Home;
$home->index();