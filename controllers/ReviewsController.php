<?php

class ReviewsController extends BaseController {
    
    function index() {

    }

    function PC() {

    }


    function PS4() {

    }

    function Xbox() {

    }


    function post() {
        $games = $this->model->getGames();
        $this->games = $games;
    }



}