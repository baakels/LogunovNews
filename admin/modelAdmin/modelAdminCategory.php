<?php


class modelAdminCategory
{
    public static function getCategoryList() {
        $sql = "SELECT * FROM categoria ORDER BY categoria.Name ASC";
        $db = new Database();
        $rows = $db->getAll($sql);
        return $rows;
    }
}