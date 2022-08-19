<?php
include './utils/connectBDD.php';
include './model/model_article.php';
include './manager/manager_article.php';
include './view/vue_add_article.php';
include './utils/fonction.php';

if (isset($_POST['create'])) {
    //test si les champs sont rempli
    if ($_POST['nom_article'] != "" && $_POST['prix_article'] != "") {
        $nom = cleanInput($_POST['nom_article']);
        $prix = cleanInput($_POST['prix_article']);
        //instancier l'objet
        $art = new ManagerArticle($nom, $prix);
        var_dump($art);
        $art->createArticle($bdd);
    } else {
        echo 'les champs sont vides';
    }
} else {
    echo 'Pour ajouter un article';
}
