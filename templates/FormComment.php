<?php
//require '../vendor/autoload.php';
//require '../config/Autoloader.php';
//use \App\config\Autoloader;
//Autoloader::register();
//use App\src\DAO\ArticleDAO;
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;

?>
    <h1>Formulaire</h1>
    <form action="/public/index.php" method="post">
        <input type="hidden" name="action" value="addComment">
        <input type="hidden" name="articleId" value="articleId">

        <label for="pseudo">Pseudo :</label><br>
        <input type="text" id="pseudo" name="pseudo"><br>
        <label for="content">Commentaire :</label><br>
        <textarea id="content" name="content"></textarea><br>
        <input type="submit" value="Soumettre">
    </form>
    <br>


<?php


?>