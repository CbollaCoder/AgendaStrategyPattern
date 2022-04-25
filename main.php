<?php

require "Customer.php";
require "Strategies/NoteStrategy.php";
require "Strategies/ContactStrategy.php";
require "Strategies/AppointmentStrategy.php";

/* $customer = new Customer(new NoteStrategy());
$result = $customer-> executeDelete(); */


    if(isset($_POST['SaveNoteButton'])){
        $customer = new Customer(new NoteStrategy());
        $result = $customer-> executeRegister();
    }

    if(isset($_POST['EditNoteButton'])){
        $customer = new Customer(new NoteStrategy());
        $result = $customer-> executeEdit();
    }

    if(isset($_POST['DeleteNoteButton'])){
        $customer = new Customer(new NoteStrategy());
        $result = $customer-> executeDelete();
    }

    if(isset($_POST['SaveContactButton'])){
        $customer2 = new Customer(new ContactStrategy());
        $result2 = $customer2-> executeRegister();
    }

    if(isset($_POST['EditContactButton'])){
        $customer = new Customer(new ContactStrategy());
        $result = $customer-> executeEdit();
    }

    if(isset($_POST['DeleteContactButton'])){
        $customer = new Customer(new ContactStrategy());
        $result = $customer-> executeDelete();
    }


    if(isset($_POST['SaveAppointmentButton'])){
        $customer1 = new Customer(new AppointmentStrategy());
        $result1 = $customer1-> executeRegister();
    }

    if(isset($_POST['EditAppointmentButton'])){
        $customer = new Customer(new AppointmentStrategy());
        $result = $customer-> executeEdit();
    }

    if(isset($_POST['DeleteAppointmentButton'])){
        $customer = new Customer(new AppointmentStrategy());
        $result = $customer-> executeDelete();
    }

?>