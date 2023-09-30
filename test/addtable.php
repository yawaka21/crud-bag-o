<?php
    $selectFromSql = "SELECT *FROM register_db ORDER BY id DESC LIMIT 5";
        $result = mysqli_query($conn,$selectFromSql);

        if($result)
        {
        while($row=mysqli_fetch_assoc($result))

        {
            $id = $row['id'];
            $name = $row['Name'];
            $lname = $row['Lastname'];
            $email = $row['Email'];
            $gender = $row['Gender'];
            $bdate = $row['Birthdate'];
            $address =$row['Address'];

            echo '
        <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$lname.'</td>
            <td>'.$email.'</td>
            <td>'.$gender.'</td>
            <td>'.$bdate.'</td>
            <td>'.$address.'</td>
            <td><button type="submit" class="btn btn-success">Edit</button>
            <button type="submit" class="btn btn-danger"> <a style = "text-decoration:none; color:white;" href="delete.php? delete='.$id.'">Delete</a></button>
            </td>
        </tr>
            ';
        }
        }
?>