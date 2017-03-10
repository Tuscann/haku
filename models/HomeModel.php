<?php

class HomeModel extends BaseModel
{

    //returns the latest 3 reviews
    function getLastReviews(): array
    {
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

    // get a single review
    function getReviewById($id)
    {
        $statement = self::$db->prepare("SELECT * FROM reviews WHERE id = '$id' LIMIT 1");
        $statement->execute();
        return $statement->fetch();
    }

    // get all the comments for a review
    public function getCommentsById($id)
    {
        $statement = self::$db->prepare(
            "SELECT comments.content, comments.date, users.username FROM users INNER JOIN Comments
             ON users.id=comments.user_id WHERE review_id='$id' ORDER BY date DESC");
        $statement->execute();
        return $statement->fetchAll();
    }

    function getReviewImages($id)
    {
        $statement = self::$db->prepare("SELECT * FROM images WHERE review_id = '$id'");
        $statement->execute();
        return $statement->fetchAll();
    }

    public function submitComment($user_id, $review_id)
    {

        if (isset($_POST['submit-comment']) && strlen($_POST['comment']) > 1) {
            $comment = htmlspecialchars($_POST['comment']);
            $statement = self::$db->prepare(
                "INSERT INTO `comments` (`user_id`, `review_id`, `content`)
                VALUES (:userid, :reviewid, :commentcontent)");
            $statement->bindParam(':userid', $user_id, PDO::PARAM_INT);
            $statement->bindParam(':reviewid', $review_id, PDO::PARAM_INT);
            $statement->bindParam(':commentcontent', $comment, PDO::PARAM_STR);
            $statement->execute();
            header("Location: {$review_id}");
        }

    }

    public function getCurrentUser($username)
    {
        $query = self::$db->prepare("SELECT * FROM users WHERE username='$username'");
        $query->execute();
        return $user = $query->fetch();
    }
}