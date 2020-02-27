<?php

function get_items_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM todoitems
                WHERE todoitems.categoryID = :category_id
                ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $items = $statement->fetchAll();
    $statement->closeCursor();
    return $items;
}

function get_item($item_id) {
    global $db;
    $query = 'SELECT * FROM `todoitems` 
                ORDER BY ItemNum';
    $statement = $db->prepare($query);
    $statement->execute();
    $todoitems = $statement->fetchAll();
    $statement->closeCursor();
}

function delete_item($item_id) {
    global $db;
    $query ='DELETE FROM todoitems
                WHERE ItemNum = :item_num';
    $statement = $db->prepare($query);
    $statement->bindValue(':item_num', $item_num);
    $statement->execute();
    $statement->closeCursor();
 }

 function add_item($category_id, $title, $description) {
    global $db;
    $query = 'INSERT INTO `todoitems`
                (categoryID, Title, Description) 
                VALUES (:category_id, :title, :description)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->execute();
    $statement->closeCursor();
}

?>