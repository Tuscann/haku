<?php

class HomeModel extends BaseModel
{

    //returns the latest 3 reviews
    function getLastReviews(): array
    {
        $statement = self::$db->prepare("SELECT * FROM reviews ORDER BY date DESC LIMIT 3");
        $statement->execute();
        return $statement->fetchAll();
    }

    function deleteComment($id) {
        $statement = self::$db->prepare("DELETE FROM comments WHERE id='$id'");
        $statement->execute();
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
        $statement = self::$db->prepare("SELECT 
reviews.id, reviews.category, reviews.content, reviews.date, reviews.picture, reviews.video, reviews.title, reviews.gameplay, users.username
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

    // get all the comments for a review
    public function getCommentsById($id)
    {
        $statement = self::$db->prepare(
            "SELECT comments.user_id, comments.id AS comment_id, comments.content, comments.date, users.username, users.profile_pic FROM users INNER JOIN Comments
             ON users.id=comments.user_id WHERE review_id=? ORDER BY date DESC");
        $statement->execute(
            [
                $id
            ]
        );
        return $statement->fetchAll();
    }

    function getReviewImages($id)
    {
        $statement = self::$db->prepare("SELECT * FROM images WHERE review_id = ?");
        $statement->execute(
            [
                $id
            ]
        );
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
        $query = self::$db->prepare("SELECT * FROM users WHERE username=?");
        $query->execute(
            [
                $username
            ]
        );
        return $user = $query->fetch();
    }
}