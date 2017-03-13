<?php

class ReviewsModel extends BaseModel {

    public function uploadPicture() {

    }

    public function postReview() {

    }

    public function getAllReviews() {

    }

    public function getReviewById($id) {

    }

    public function getGames() {
        $statement = self::$db->prepare("SELECT * FROM games ORDER BY name ASC");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getReviews($category) {
        $statement = self::$db->prepare("SELECT * FROM reviews WHERE category=? ORDER BY DATE ASC LIMIT 3");
        $statement->execute(
            [
                $category
            ]
        );
        return $statement->fetchAll();
    }

}