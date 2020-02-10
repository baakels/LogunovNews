<?php
class Category
 {
    public static function getAllCategory() {
        $query = "SELECT * FROM categoria";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }
}
?>
