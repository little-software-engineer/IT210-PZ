<?php
function povezi()
{
    try {
        $con = new PDO("mysql:host=localhost;dbname=tequila_sunrise", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
