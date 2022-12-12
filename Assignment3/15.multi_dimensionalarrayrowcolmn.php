<?php
// Declare a Multi Dimensioned array of floats called balances having
// Three rows and five columns.
$arr1 = array(
    array('white', 'green', 'red'),
    array('apple', 'banana', 'orange'),
    array('pqr', 'abc', 'xyz'),
    array('index', 'associative', 'multiple'),
    array('for', 'while', 'dowhile')
);
for ($raw = 0; $raw < 3; $raw++) {
    echo "<table border='1px solid' cellspacing='0px' cellpadding='10px'>";
    for ($col = 0; $col < 5; $col++) {

        echo '<td>' . $arr1[$raw][$col]  . '</td>';
    }
}
// echo "<pre>";
// print_r($arr1);
// echo "</pre>";
?>