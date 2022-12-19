<?php
include('dbconnection.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Adoption Request Data</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        a{
            color: white;
        }
        a:hover{
            color: white;
        }
        h1{
            margin-left: 90px;
            margin-top: 50px;
            
        }
    </style>
</head>
<body>
    <h1>1. Potential Parent Adoption Form Data:</h1>
    <!--ADOPTION FORM DATA TABLE-->
    <div class="container my-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">Parent's Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Occupation</th>
                <th scope="col">Gender</th>
                <th scope="col">Marital Status</th>
                <th scope="col">Adoption History</th>
                <th scope="col">Requested Child</th>
                <th scope="col">#</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!--PHP CODE TO DISPLAY DB DATA TO TABLE-->
            <?php
                $q = "SELECT * FROM `adoptionform`";
                $res  = mysqli_query($conn, $q); 

                if($res){
                    while($row=mysqli_fetch_assoc($res)){
                        
                        $name = $row['Name'];
                        $phone = $row['Phone'];
                        $email = $row['Email'];
                        $address = $row['Address'];
                        $occupation = $row['Occupation'];
                        $gender = $row['Gender'];
                        $maritals = $row['Marital Status'];
                        $adoptionhist = $row['Adoption History'];
                        $childname = $row['Requested Child'];
                        $id = $row['Id'];

                        echo'
                        <tr>
                            
                            <td>'.$name.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$occupation.'</td>
                            <td>'.$gender.'</td>
                            <td>'.$maritals.'</td>
                            <td>'.$adoptionhist.'</td>
                            <td>'.$childname.'</td>
                            <th scope="row">'.$id.'</th>
                            <td>
                                <button class="btn btn-warning"><a class="text-light text-decoration-none" href="deleteform.php?deleteid='.$id.'">Delete</a></button>
                            </td>
                        </tr>
                        ';
                    }
                }


            ?>

            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>-->
            </tbody>
        </table>
    </div>




    <!--CONTACT FORM DATA TABLE-->

    <!--CONTACT US FORM DATA TABLE-->
    <h1>2. Potential Parent Contact Us Form Data:</h1>
    <div class="container my-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">#</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!--PHP CODE TO DISPLAY DB DATA TO TABLE-->
            <?php
                $q = "SELECT * FROM `contactusform`";
                $res  = mysqli_query($conn, $q); 

                if($res){
                    while($row=mysqli_fetch_assoc($res)){
                        
                        $fname = $row['First Name'];
                        $lname = $row['Last Name'];
                        $email = $row['Email'];
                        $message = $row['Message'];
                        $id = $row['Id'];

                        echo'
                        <tr>
                            
                            <td>'.$fname.'</td>
                            <td>'.$lname.'</td>
                            <td>'.$email.'</td>
                            <td>'.$message.'</td>
                            <th scope="row">'.$id.'</th>
                            <td>
                                <button class="btn btn-warning"><a class="text-light text-decoration-none" href="deleteform.php?deleteid='.$id.'">Delete</a></button>
                            </td>
                        </tr>
                        ';
                    }
                }


            ?>

            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>-->
            </tbody>
        </table>
    </div>
    



    <div class="container">
        <button class="btn btn-dark btn-lg"><a href="orgHomePage.php" class="text-decoration-none">BACK</a></button>
    </div>
</body>
</html>