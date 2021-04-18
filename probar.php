<?php 
    require_once 'example_pdo.php';

    $conn = conectar();
    $sql = "SELECT * FROM `users`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $json = [];

   while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $json[] = [
            'id'=>$row['id'],
            'role_id'=>$row['role_id'],
            'username'=>$row['username'],
            'email'=>$row['email'],
            'password'=>$row['password'],
            'phone'=>$row['phone'],
            'created_in'=>$row['created_in'],
            'modified_at'=>$row['modified_at']
        ];
   }

   $json_query = json_encode($json);
   echo $json_query;
   
?>