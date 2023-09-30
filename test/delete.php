<?php
    include 'connection.php';

    if(isset($_GET['delete']))

    {
        $id = $_GET['delete'];
        // Delete Query
        $deleteSql = "DELETE FROM register_db WHERE id=$id";
        $result = mysqli_query($conn,$deleteSql);

        if($result)
        {
            //like hreff
            header('location:index.php');
        }
        else
        {
            

        }
    }
?>