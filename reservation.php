<?php
    session_start();
    include 'init.php';

    $customer = $_SESSION['customer_id'];
    $rooms = $_POST['rooms'];
    $dates = unserialize($_SESSION['dates']);
    $guests = $_SESSION['guests'];
        
    try {
        $db = connectDB();

        $customer = $db->quote($customer);
        $guests = $db->quote($guests);
        $db->exec("INSERT INTO reservation (customer_id, num_guests) VALUES ($customer, $guests)");

        $rows = $db->query("SELECT * FROM reservation");
        $reservation_id = count($rows->fetchAll());
        
        for ($i=0; $i < count($rooms); $i++) { 
            $room = $rooms[$i];
            $room = $db->quote($room);
            $db->exec("INSERT INTO reservation_room (room_number, reservation_id) VALUES ($room, $reservation_id)");
        }

        for ($i=0; $i < count($dates); $i++) { 
            $date = $dates[$i];
            $date = $db->quote($date);
            $db->exec("INSERT INTO reservation_date (use_date, reservation_id) VALUES ($date, $reservation_id)");
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    echo "<script> alert('Your reservation has been received!'); </script>";
    echo "<script> location.href='main.php'; </script>";
?>