<?php
class ViewComments {
    public static function CommentsForm() {
        echo '<form action="insertComment">
        <input type="hidden" name="id" value="'.$_GET['id'].'"> Ваш комментарий: <input type = "text" name = "comment">
        <input type = "submit" value="Отправить"></form>';
    }

    public static function CommentsByNews($arrayComment) {
        //print_r($arrayComment);
        if (!empty($arrayComment)) {
            echo '<table id = "ctable"><th>Комментарий</th><th>Дата комментария</th>';
            foreach ($arrayComment as $value) {
               echo '<tr><td>'.$value['text'].'</td><td>'.$value['date'].'</td></tr>';
            }
            echo '</table>';
        }
    }

    public static function CommentsCountWithAncor($value) {
        if($value['count']>0) {
            echo '<b><a href="#ctable"/> ('.$value['count'].') </a><br>';
        }
    }
    public static function CommentsCount($value) {
        if($value['count'] > 0) {
            echo '<b><font color = "red">('.$value['count'].')</font></b>';
        }
    }
}