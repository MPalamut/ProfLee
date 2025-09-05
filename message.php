<?php

require_once "dbConnection.php";


 class Message{


private int $id;
public string $sender;
public string $content;

public function __construct(){
 
}

public function insert() : void{

$dDbConnection = new DbConnection();
$db = $dDbConnection->connect();

$sql = "INSERT INTO messages (sender, content) VALUES (:sender, :content)";
$stmt = $db->prepare($sql);
$result = $stmt->execute([
    ':sender' => $this->sender,
    ':content' => $this->content
]);

}

public function update() : void{

}

public function delete() : void{

}

public function select() : void{

}



}
?>