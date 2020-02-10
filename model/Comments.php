<?php
class Comments
{
    public static function InsertComment($c,$id) {
       // $query = "INSERT INTO 'comments' (id, `fname`, `lname`, text, date, post_id) VALUES (NULL, '', '', '$c', CURRENT_STAMP,'$id')";
       $query = "INSERT INTO `comments` (`id`, `fname`, `lname`, `text`, `date`, `post_id`) VALUES (NULL, '', '', '$c', CURRENT_STAMP, '$id')";
        $db = new Database();
        $q = $db -> executeRun($query);
        return $q;

    }

        public static function getCommentsByNewsID($id) {
        $query = "SELECT * FROM comments WHERE post_id =".$id." ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

        public static function getCommentsCountByNewsID($id) {
        $query = "SELECT Count(id) as 'count' FROM comments WHERE post_id = ".$id;
        $db = new Database();
        $c = $db->getOne($query);
        return $c;
        }

}

?>