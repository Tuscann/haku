<?php

class ReviewsModel extends BaseModel {

    public function getAllReviews() {

    }

    function getReviewsByCategory($category) {

        $query = "SELECT * FROM reviews WHERE category='$category'";
        $statement = self::$db->prepare($query);
        $statement->execute(
            [
                $category
            ]
        );
        return $statement->fetchAll();
    }

    // get a single review
    function getReviewById($id)
    {
        $statement = self::$db->prepare("SELECT 
reviews.category, reviews.content, reviews.date, reviews.picture, reviews.video, reviews.title, reviews.gameplay, users.username
FROM reviews
INNER JOIN users
ON reviews.user_id=users.id WHERE reviews.id = ? LIMIT 1");
        $statement->execute(
            [
                $id
            ]
        );
        return $statement->fetch();
    }

    public function deleteReview($id) {

    }

    public function searchByTitle($title) {

        $query = "SELECT * FROM reviews WHERE title LIKE '%?%' OR content LIKE '%?%'";
        $statement = self::$db->prepare($query);
        $statement->execute(
            [
                $title,
                $title
            ]
        );
        return $statement->fetchAll();
    }

    public function getSearchResults($author, $category, $title, $game) {

        $categorySearch = " AND reviews.category='$category'";
        $authorSearch = " WHERE users.username=?";
        $gamesSearch = " AND games.name='$game'";

        if ($category == "All") {
            $categorySearch = '';
        }
        if (strlen($author) <= 1) {
            $authorSearch = '';
        }
        if ($game == "All") {
            $gamesSearch = '';
        }

        $query = "SELECT reviews.picture,
reviews.id,
reviews.user_id,
reviews.date,
reviews.title,
reviews.content, 
reviews.category,
reviews.game_id,
users.username,
games.name
FROM reviews
INNER JOIN users
ON reviews.user_id=users.id
JOIN games
ON reviews.game_id=games.id
AND reviews.title
LIKE '%$title%'" . $authorSearch . $categorySearch . $gamesSearch;

        $statement = self::$db->prepare($query);
        $statement->execute(
            [
                $author
            ]
        );
        return $statement->fetchAll();
    }

    public function getGames() {
        $statement = self::$db->prepare("SELECT * FROM games ORDER BY name ASC");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getReviews($category) {
        $statement = self::$db->prepare("SELECT * FROM reviews WHERE category=? ORDER BY DATE DESC LIMIT 3");
        $statement->execute(
            [
                $category
            ]
        );
        return $statement->fetchAll();
    }

    public function submitReview($user_id, $game_id, $category, $title, $content, $gameplay, $picture, $video) {
        $statement = self::$db->prepare(
            "INSERT INTO reviews (user_id, game_id, category, title, content, gameplay, picture, video)
             VALUES ('$user_id', '$game_id', '$category', '$title', '$content', '$gameplay', '$picture', '$video')"
        );
        return $statement->execute();
    }

}