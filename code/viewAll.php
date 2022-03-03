<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/viewAll.css">
</head>
<body>
    <div class="container">
        <h1 class="heading" >NIIT Foundation</h1>
        <ul class="nav">
            <li> <a href="addRecord.php"> Add New Student </a> </li>
        </ul>
        <section>
            <h1>View All Students Record</h1>
            <div class="record-table">
                <table>
                    <tr>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Mobile</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>

                    <?php
                        $host = "localhost:3306";
                        $user = "root";
                        $pass = "";
                        $db = "project1";

                        $conn = mysqli_connect($host, $user, $pass, $db);
                        if(!$conn){
                            die('Not Connected'.mysqli_connect_error() );
                        }

                        if(isset($_REQUEST['q']) && isset($_REQUEST['roll'])){
                            if($_REQUEST['q'] == "delete"){
                                $sql = "delete from student where roll =". $_REQUEST['roll'];

                                $result = mysqli_query($conn, $sql);

                                if($result){
                                    echo "<script> alert('Record Deleted Succesfully'); </script>";
                                }else{
                                    echo " <script> alert('Sorry, could not deleted...'); </script>";
                                }
                            }

                        }
                        

                        $sql = "select * from student";

                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result) ){
                                echo "
                                    <tr>
                                        <td> {$row['roll']}  </td>
                                        <td> {$row['name']} </td>
                                        <td> {$row['dob']} </td>
                                        <td> {$row['mobile']} </td>
                                        <td> <a href='editRecord.php?roll={$row['roll']}&name={$row['name']}&dob={$row['dob']}&mobile={$row['mobile']}'>Edit</a> </td>
                                        <td> <a href='viewAll.php?q=delete&roll={$row['roll']}' onclick=\"return confirm('Are you sure Do you want to delete this student record?'); \">Delete</a> </td>
                                    </tr>
                                ";
                            }
                        }

                        


                    ?>

                   

                </table>
            </div>
        </section>
    </div>
</body>
</html>