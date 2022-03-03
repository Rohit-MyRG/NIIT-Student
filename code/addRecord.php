<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formStyle.css">
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading" >NIIT Foundation</h1>
        <ul class="nav">
            <li> <a href="viewAll.php"> View All Records </a> </li>
        </ul>
        <section>
            <h1>Add New Student</h1>
            <div class="stud-form">
               
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <input type="text" name="roll" placeholder="Roll No." value="">
                    <input type="text" name="name" placeholder="Full Name" value="">
                    <input type="date" name="dob" value="">
                    <input type="text" maxlength="10" name="mobile" placeholder="Mobile" value="">

                    <input type="submit" value="Add Record" name="insert-button" >
                </form>
                <?php
                        if(isset($_REQUEST['insert-button'])){
                            $host = "localhost:3306";
                            $user = "root";
                            $pass = "";
                            $db = "project1";

                            $roll = $_REQUEST['roll'];
                            $name = $_REQUEST['name'];
                            $dob = $_REQUEST['dob'];
                            $mobile = $_REQUEST['mobile'];

                            $conn = mysqli_connect($host, $user, $pass, $db);
                            if(!$conn){
                                die('Not Connected'.mysqli_connect_error() );
                            }
                        
                            $sql = "insert into student(roll, name, dob, mobile) values($roll, '$name','$dob','$mobile');";

                            $result = mysqli_query($conn, $sql);

                            if($result){
                                echo "<script> alert('Record Inserted Succesfully'); </script>";
                            }else{
                                echo " <script> alert('Sorry, does not inserted...'); </script>";
                            }
                          
                        }
                ?>
            </div>
        </section>
    </div>
</body>

</html>

