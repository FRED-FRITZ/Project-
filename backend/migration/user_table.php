<?php
include '../database/db.php';

class User extends Database
{
    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS user(
            id int auto_increment primary key,
            username varchar(255) not null,
            email varchar(50) not null,
            password varchar(255) not null)";
        
        $created = $this->conn->query($sql);
        
        if($created)
        {
            return json_encode([
                'message' => 'user table created'
            ]); 
        }
        else{

            return json_encode([
                'message' => 'Ooops!! Something went wrong!!'
            ]); 
        }
    }
}
$call = new User();
echo $call->createTable();
?>