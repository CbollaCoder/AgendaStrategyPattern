<?php

require_once ('Interfaces/OperationInterface.php');
require_once('db.php');

class ContactStrategy implements OperationInterface{

    public $name;
    public $phone;
    public $email;

    public function register(){
        //echo "Your Contact was successfully registered in your Agenda!\n";
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        echo $name;
        echo $phone;
        echo $email;

       $conn1 = mysqli_connect(
            'localhost',
            'root',
            '',
            'agendadb'
        );

        $query = "INSERT INTO ContactTable (name, phone, email ) VALUES ('$name','$phone','$email')";
        $result = mysqli_query($conn1, $query);

        //echo $conn;

        if(!$result){
            die("Query Failed");
        }
        header("Location:contact.php"); 
        //echo "saved";
    }

    public function delete(){
        //echo "Your Contact was successfully deleted from your Agenda!\n";
        $id = $_GET['id'];
        //echo $id;
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'agendadb'
        );
      
        $query = "DELETE FROM ContactTable WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        
        header("Location: contact.php");

    }

    public function edit(){
        echo "Your Contact was successfully edited in your Agenda!\n";
        $id = $_GET['id'];
        $query = "SELECT * FROM ContactTable WHERE id = $id";
        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'agendadb'
        );
        $result = mysqli_query($conn, $query);
        
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];

        echo $name;
        echo $phone;
        echo $email;

        echo "-------";

        //$id1 = $id;
        $name1 = $_POST['name'];
        $phone1 = $_POST['phone'];
        $email1 = $_POST['email'];
        
        echo $name1;
        echo $phone1;
        echo $email1;

        $query  = "UPDATE ContactTable set name = '$name1', phone = '$phone1', email = '$email1' WHERE id = $id";
        mysqli_query($conn, $query); 

        //echo "$query";
        header("Location: contact.php");

    }

}

?>