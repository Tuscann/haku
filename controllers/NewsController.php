<?php

class NewsController extends BaseController
{
    function index ()
    {
        echo 'Im in news index';
        var_dump($this->user);
    }

}