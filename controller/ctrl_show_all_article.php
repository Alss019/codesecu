<?php
include './utils/connectBDD.php';
include './model/model_article.php';
include './manager/manager_article.php';
include './view/vue_show_all.php';
include './utils/fonction.php';

$art = new ManagerArticle(null, null);
$tab = $art->showAllArticle($bdd);
foreach ($tab as $value) {
    echo '<li>
        ' . $value->nom_article . ', ' . $value->prix_article . ' €
        </li>';
}
