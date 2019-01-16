<?php

// Function for load all files
function loadClass($classname)
{
    if (file_exists('../models/'.$classname.'.php')) {
        require '../models/'.$classname.'.php';
    } else {
        require '../entities/'.$classname.'.php';
    }
}
spl_autoload_register('loadClass');

// Load database connexion.
$db = Database::DB();
$bookManager = new BookManager($db);

$books = $bookManager->getBooks();
// Load view for index.
include '../views/indexVue.php';
