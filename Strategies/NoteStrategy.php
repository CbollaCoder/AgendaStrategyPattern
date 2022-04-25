<?php

require_once ('Interfaces/OperationInterface.php');
require_once('db.php');

class NoteStrategy implements OperationInterface{

    public $name;
    public $description;

   
    public function register(){
        //echo "Hey!\n";
        $name = $_POST['name'];
        $description = $_POST['description'];
        echo $name;
        echo $description;
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'agendadb'
        );
        $query = "INSERT INTO Note (name, description) VALUES ('$name', '$description')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }
        header("Location:note.php");
        //echo "saved";
    }

    public function delete(){
        echo "Your Note was successfully deleted from your Agenda!\n";

        $id = $_GET['id'];
        echo $id;

        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'agendadb'
        );
      
        $query = "DELETE FROM Note WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        
        header("Location: note.php");
    
    }

    public function edit(){
        echo "Your Note was successfully EDITED ";
        $id = $_GET['id'];
        $query = "SELECT * FROM Note WHERE id = $id";
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'agendadb'
        );
        $result = mysqli_query($conn, $query);
        
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $description = $row['description'];

        echo $name;
        echo $description;

        echo "-------";

        //$id1 = $id;
        $name1 = $_POST['name'];
        $description1 = $_POST['description'];
        
        echo $name1;
        echo $description1;

        $query  = "UPDATE Note set name = '$name1', description = '$description1' WHERE id = $id";
        mysqli_query($conn, $query); 

        //echo "$query";
        header("Location: note.php");
    }

   
}




?>