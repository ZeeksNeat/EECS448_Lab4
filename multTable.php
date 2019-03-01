<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

echo multTable();

function multTable() {

    echo "<table>";

    for ($i = 0; $i <= 100; $i++) {
        echo "<tr> ";

        for ($j = 0; $j <= 100; $j++) {
            echo "<td> ";
            echo $i * $j;
            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

?>