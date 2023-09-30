<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $bdate = $_POST["bdate"];
        $address = $_POST["address"];

        if (empty($name) || empty($lname) || empty($email) || empty($gender) || empty($bdate) || empty($address)) {
            echo "Missing fields";
        } else {
            $sql = "INSERT INTO register_db (Name, Lastname, Email, Gender, Birthdate, Address)
                    VALUES ('$name', '$lname', '$email', '$gender', '$bdate', '$address')";
            if ($conn->query($sql) === TRUE) {
               
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    $conn->close();

?>