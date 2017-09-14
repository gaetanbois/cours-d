<?php

function getTodos() {
    $sql = "SELECT * FROM todo WHERE done = " . $conn->quote($done);
    return $conn->query($sql);
}