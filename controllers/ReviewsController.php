<?php

class ReviewsController extends BaseController
{

    function index()
    {
        $games = $this->model->getGames();
        $this->games = $games;
    }

    function PC()
    {
        $reviews = $this->model->getReviewsByCategory("PC");
        $this->reviews = $reviews;

    }

    function PS4()
    {
        $reviews = $this->model->getReviewsByCategory("PS4");
        $this->reviews = $reviews;

    }

    function Xbox()
    {
        $reviews = $this->model->getReviewsByCategory("Xbox");
        $this->reviews = $reviews;

    }

    function deleteReview($id) {
        if ($this->isPost) {
            if (isset($_POST['delete-review'])) {
                $this->model->deleteReview($id);
            }
        }
    }

    function edit($id) {
        $this->deleteReview($id);

        if ($this->isPost) {
            if (isset($_POST['edit-review'])) {
                $this->authorize();
                $title = $_POST['title'];
                $video = $_POST['video'];
                $content = $_POST['content'];
                $pictureName = '';
                $gameplay = $_POST['gameplay'];


                $this->uploadValidation($title, $content, $gameplay, $video);
                $embedLink = str_replace("watch?v=", "embed/", $video);

                if ($this->formValid()) {
                    $isPosted = $this->model->editReview($id, $title, $embedLink, $content, $gameplay);

                    if ($isPosted) {
                        header('Location: ' . APP_ROOT );
                        //. "/reviews/edit/" . $id
                    } else {
                        $this->addErrorMessage("Something went wrong");
                    }
                }

            }

            //change picture
            if (isset($_POST['submit-pic'])) {
                $file = $_FILES['review-pic'];
                $path = "/content/images/review/" . $file['name'];
                $pictureName = '';

                //generate a name for the review picture
                while (true) {
                    $pictureName = uniqid();
                    if (!file_exists(APP_ROOT."/content/images/review/".$pictureName)) {
                        break;
                    }
                };
                $path = "content\\images\\review\\" . $pictureName . ".png";
                $dbpath = "/content/images/review/" . $pictureName . ".png";

                $this->uploadPicture($file, $path);
                if ($this->formValid()) {
                    $this->model->changePicture($id, $dbpath);
                }
            }
        }

        $review = $this->model->getReviewById($id);
        $this->review = $review;
        if (!$review) {
            header("Location: ".APP_ROOT);
        }

    }

    function search()
    {
        $reviews = '';
        $this->reviews = false;

        if ($this->isPost) {
            $author = $_POST['author'];
            $category = $_POST['category-filter'];
            $game = $_POST['game-filter'];

            if (isset($_POST['title-search'])) {
                echo "asdasda";
                $title = $_POST['title'];
                $reviews = $this->model->searchByTitle($title);
            } else {
                $reviews = $this->model->getSearchResults($author, $category, '', $game);
            }

            $this->reviews = $reviews;
        }

        $games = $this->model->getGames();
        $this->games = $games;


    }


    public function uploadPicture($file, $path) {
        if (isset($file)) {

            if (!preg_match("!image!", $file['type'])) {
                $this->setValidationError('file', "Please only upload GIF, JPG and PNG");
            }

            if ($file['size'] > 5000000) {
                $this->setValidationError('file', "Sorry, your file is too large. Allowed size: 3 MB.");
            }

            //copy image to content/image/profile-pics
            if (move_uploaded_file($file['tmp_name'], $path)) {

            } else {
                $this->setValidationError('file', "File upload failed.");
            }
        } else {
            $this->setValidationError('file', "Please upload a file.");
        }
    }

    function uploadValidation($title, $content, $gameplay, $video) {
        if (strlen($title) < 3) {
            $this->setValidationError("title", "Title cannot be shorter than 3 symbols.");
        }

        //youtube url validation
        if (!preg_match("/http(?:s?):\/\/(?:www\.)?youtu(?:be\.com\/watch\?v=|\.be\/)([\w\-\_]*)(&(amp;)?‌​[\w\?‌​=]*)?/", $video)) {
            $this->setValidationError("video", "Please enter a valid video url.");
        }

        if (strlen($content) < 20) {
            $this->setValidationError("content", "Be more creative. Minimum length: 20 symbols");
        }

        if (strlen($gameplay) < 20) {
            $this->setValidationError("gameplay", "Be more creative. Minimum length: 20 symbols");
        }
    }

    function post()
    {
        $games = $this->model->getGames();
        $this->games = $games;

        if ($this->isPost) {
            //checks if the user is logged if not it redirects him to the front page
            $this->authorize();
            $title = $_POST['title'];
            $video = $_POST['video'];
            $content = $_POST['content'];
            $pictureName = '';

            //generate a name for the review picture
            while (true) {
                $pictureName = uniqid();
                if (!file_exists(APP_ROOT."/content/images/review/".$pictureName)) {
                    break;
                }
            };

            $review_pic_path = "content\\images\\review\\" . $pictureName . ".png";
            $review_pic_new_path = "/content/images/review/" . $pictureName . ".png";
            $category = $_POST['category'];
            $gameplay = $_POST['gameplay'];

            $this->uploadValidation($title, $content, $gameplay, $video);
            $this->uploadPicture($_FILES['review-pic'], $review_pic_path);
            $embedLink = str_replace("watch?v=", "embed/", $video);

                if ($this->formValid()) {
                    $isPosted = $this->model->submitReview($this->user->getId(), 2, $category, $title, $content, $gameplay, $review_pic_new_path, $embedLink);

                    if ($isPosted) {
                        header('Location: ' . APP_ROOT);
                    } else {
                        $this->addErrorMessage("Something went wrong");
                    }
                }
            }
        }




}