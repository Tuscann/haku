<?php
class HomeModel extends BaseModel
{
    //returns the latest 5 reviews
    function getLastReviews(): array {
        $statement = self::$db->prepare("SELECT * FROM reviews LIMIT 3");
        $statement->execute();
        return $statement->fetchAll();
    }

    //returns all reviews
    function getReviews(): array
    {
        $statement = self::$db->prepare("SELECT * FROM reviews");
        $statement->execute();
        return $result = $statement->fetchAll();
    }

    function getReviewById($id) {
        $statement = self::$db->prepare("SELECT * FROM reviews WHERE id = '$id' LIMIT 1");
        $statement->execute();
        return $statement->fetch();
    }


}