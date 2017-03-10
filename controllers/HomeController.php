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

    function submitComment($id) {
        if ($this->isLoggedIn && $this->isPost) {
            $this->model->submitComment($_SESSION['userId'], $id);
        }
    }

    function view($id) {
<<<<<<< HEAD
=======

>>>>>>> origin/master
        $this->submitComment($id);
        // get all comments
        $comments = $this->model->getCommentsById($id);
        $this->comments = $comments;
        // get all reviews
<<<<<<< HEAD
=======

>>>>>>> origin/master
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