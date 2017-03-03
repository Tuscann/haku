<?php

class HomeController extends BaseController
{
    function index() {
        $reviews = $this->model->getReviews();
        $this->reviews = $reviews;
    }

    function review(int $id)
    {

    }
}