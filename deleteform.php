<?php
include('dbconnection.php');

// DELETE FROM ADOPTION FORM TABLE
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `adoptionform` WHERE Id=$id";
    $result =mysqli_query($conn, $sql);

    if($result){
        // echo 'Deleted successfully';
        header('location:adoptionFormData.php');
    }
    else{
        die(mysqli_error($conn));
    }
}


// DELETE FROM CONTACT US FORM TABLE
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `contactusform` WHERE Id=$id";
    $result =mysqli_query($conn, $sql);

    if($result){
        // echo 'Deleted successfully';
        header('location:adoptionFormData.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>