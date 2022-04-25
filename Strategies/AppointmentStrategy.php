<?php

require_once ('Interfaces/OperationInterface.php');
require_once('db.php');

class AppointmentStrategy implements OperationInterface{

    public $name;
    public $description;
    public $beginDate;
    public $endDate;
    public $appointmentPlace;

    public function register(){
        echo "Your Appointment was successfully registered in your Agenda!\n";
        $name = $_POST['nameApp'];
        $description = $_POST['descriptionApp'];
        $beginDate = $_POST['beginDate'];
        $endDate = $_POST['endDate'];
        $appointmentPlace = $_POST['appointmentPlace'];

        echo $name;
        echo $description;
        echo $beginDate;
        echo $endDate;
        echo $appointmentPlace;

       $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'agendadb'
        );

        $query = "INSERT INTO Appointment (name, description, beginDate, endDate, appointmentPlace) VALUES ('$name', '$description', '$beginDate', '$endDate', '$appointmentPlace')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        header("Location:appointment.php");
        //echo "saved"; 
    }

    public function delete(){
        echo "Your Appointment was successfully deleted from your Agenda!\n";

        $id = $_GET['id'];
        //echo $id;

        $conn = mysqli_connect(
            'localhost',
            'root',
            '',
            'agendadb'
        );
      
        $query = "DELETE FROM Appointment WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Failed");
        }
        
        header("Location: appointment.php");
    }

    public function edit(){
        echo "Your Appointment was successfully EDITED ";
        $id = $_GET['id'];
        $query = "SELECT * FROM Appointment WHERE id = $id";
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
        $beginDate = $row['beginDate'];
        $endDate = $row['endDate'];
        $appointmentPlace = $row['appointmentPlace'];

        echo $name;
        echo $description;
        echo $beginDate;
        echo $endDate;
        echo $appointmentPlace;

        echo "-------";

        //$id1 = $id;
        $name1 = $_POST['nameApp'];
        $description1 = $_POST['descriptionApp'];
        $beginDate1 = $_POST['beginDate'];
        $endDate1 = $_POST['endDate'];
        $appointmentPlace1 = $_POST['appointmentPlace'];
        
        echo $name1;
        echo $description1;
        echo $beginDate1;
        echo $endDate1;
        echo $appointmentPlace1;

        $query  = "UPDATE Appointment set name = '$name1', description = '$description1', beginDate = '$beginDate1', endDate = '$endDate1', appointmentPlace = '$appointmentPlace1'  WHERE id = $id";
        mysqli_query($conn, $query); 

        //echo "$query";
        header("Location: appointment.php");
    }

}

?>