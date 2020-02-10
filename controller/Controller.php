<?php
class Controller {
    public static function StartSite() {
        $arr = News::getLast10News();//news list
        include_once 'view/start.php';
    }
    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }
    public static function error404() {
        include_once 'view/error404.php';
    }
    public static function InsertComment($c,$id) {
        Comments::InsertComment($c,$id);
        header('Location:news?id='.$id.'#ctable');
    }
    public static function AllNews(){
        $arr = News::getAllNews();
        include_once 'view/AllNews.php';
    }
    public static function Search($data){
        $array = Category::getAllCategory();
        $arrayData = Search::searchResult($data);
        include_once 'view/Search.php';
    }
    public static function NewsByCatID($id) {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/CatNews.php';
    }
    public static function NewsByID($id) {
        $n = News::getNewsByID($id);
        //print_r($n);
        include_once 'view/ReadNews.php';
    }

    public static function Comments($postid) {
        $arrayComment = Comments::getCommentsByNewsID($postid);
//print_r($arrayComment);
      ViewComments::CommentsByNews($arrayComment);

    }

    public static function CommentsCount($postid) {
        $arr = Comments::getCommentsCountByNewsID($postid);
        ViewComments::CommentsCount($arr);
    }
    public static function CommentsCountWithAncor($postid) {
        $arr = Comments::getCommentsCountByNewsID($postid);
        ViewComments::CommentsCountWithAncor($arr);
    }

    public static function registerForm() {
        include_once ('view/formRegister.php');
    }

    public static function registerUser() {
        $result = Register::registerUser();

        include_once('view/answerRegister.php');
    }

}


