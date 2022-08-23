<?php

if (!isset($_COOKIE['permissions'])){
    echo "Vous n'avez pas les droits pour accéder à cette page.";
    die();
}elseif (!isset($_COOKIE['login'])){
    echo "Vous n'avez pas les droits pour accéder à cette page.";
    die();
}
