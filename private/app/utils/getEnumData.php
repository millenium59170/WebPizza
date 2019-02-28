<?php

function getEnumData($table, $field) {
    global $db;

    $output = [];

    $sql = 'SHOW COLUMNS FROM '.$table.' WHERE field="'.$field.'"';
    $query = $db['main']->query($sql)->fetch(PDO::FETCH_ASSOC);

    foreach( explode("','",substr($query['Type'],6,-2))as $data) {
        array_push($output, $data);
    }

    return $output;
}