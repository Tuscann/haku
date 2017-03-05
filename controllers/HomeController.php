<?php

class HomeController extends BaseController
{
    function index() {
        $reviews = $this->model->getLastReviews();
        $this->reviews = $reviews;
    }

    function review(int $id)
    {

    }

    function view($id) {
        $review = $this->model->getReviewById($id);
        $this->review = $review;
        if (!$review) {
            $this->addErrorMessage("This review doesn't exist.");
        }
    }
}