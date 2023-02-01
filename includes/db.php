<?php

  // $dbConnection = new PDO("", $dbUser, $dbPassword);
   

  // connect to mySQL using PHP PDO Object

  $dbHost = getenv('DB_HOST');
  $dbName = getenv('DB_NAME');
  $dbUser = getenv('DB_USER');
  $dbPassword = getenv('DB_PASSWORD');


  $dbConnection = new PDO(
    "mysql:host=$dbHost;dbname=$dbName;charset=utf8", 
    $dbUser, 
    $dbPassword
  );

// setzte den Fehlermodus für Web Devs
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// QUERY FUNCTIONS ********************************************

function fetchQuestionById($id, $dbConnection) {

        $sqlStatement = $dbConnection->query("SELECT * FROM `questions` WHERE `id` = $id");
        $row = $sqlStatement->fetch(PDO::FETCH_ASSOC);

        print_r($row);

        // Gibt Zeilendaten als assoc. Array zu genau einer Frage zurück
        // z.B. $row = array('id) => 9999, 'topic' => ...
        return $row; 
}


?>