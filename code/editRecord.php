<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formStyle.css">
</head>
<body>
    <div class="container">
        <h1 class="heading" >NIIT Foundation</h1>
        <ul class="nav">
            <li> <a href="viewAll.php"> View All Records </a> </li>
            <li> <a href=""> Add New Student </a> </li>
        </ul>
        <section>
            <h1>Heading</h1>
            <div class="stud-form">
               
                <form action="" method="POST">
                    <input type="text" name="roll" placeholder="Roll No." value="<?php echo $_REQUEST['roll']; ?>">
                    <input type="text" name="name" placeholder="Full Name" value="<?php echo $_REQUEST['name']; ?>">
                    <input type="date" name="dob" value="<?php echo $_REQUEST['dob']; ?>">
                    <input type="text" name="mobile" placeholder="Mobile" value="<?php echo $_REQUEST['mobile']; ?>">

                    <input type="submit" value="Add Record" >
                </form>
            </div>
        </section>
    </div>
</body>
</html>