<?php

class HomeController extends BaseController
{
    function index() {
        $reviews = $this->model->getLastReviews();
        $this->reviews = $reviews;
        //var_dump($this->user);
    }

    function review(int $id)
    {

    }

    function submitComment($reviewId) {
        if ($this->isLoggedIn && $this->isPost) {
            $userId = $_SESSION['userId'];
            $this->model->submitComment($userId, $reviewId);
        }
    }

    function deleteComment($id) {
        if ($this->isLoggedIn) {
            if (isset($_POST['delete-comment']))
            {
                $this->model->deleteComment($id);
            }
        }
    }

    function view($reviewId) {

        $this->submitComment($reviewId);

        // get all comments
        $comments = $this->model->getCommentsById($reviewId);
        $this->comments = $comments;
        // get all reviews
        $review = $this->model->getReviewById($reviewId);
        $this->review = $review;
        if (!$review) {
            header("Location: ".APP_ROOT);
        }

        // get all reviews images
        $images = $this->model->getReviewImages($reviewId);

        $this->reviewImages = $images;
        if (!$review) {
            $this->addErrorMessage("This review doesn't exist.");
        }


    }
}