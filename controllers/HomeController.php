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
        // get all reviews
        $review = $this->model->getReviewById($id);
        $this->review = $review;

        // get all reviews images
        $images = $this->model->getReviewImages($id);

        $this->reviewImages = $images;
        if (!$review) {
            $this->addErrorMessage("This review doesn't exist.");
        }
    }
}