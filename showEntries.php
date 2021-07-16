


    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Information Table</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <style>
        body{
            text-align:center;
            background-color: #6f756b;
            margin-top:50px;
        }
        .tableformat{
            margin:20px;
            
        }
    
    </style>
    <body>

    <h1>iSchool Republic School</h1>
    <hr>

    <h3>Student Information Report</h3>        
    

    <div class="tableformat">
   
        <table class="table table-hover table-dark ">
        <thead>
            <tr>
            <th scope="col">Sr. No</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">ID</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Class</th>
            <th scope="col">Father's Name</th>
            <th scope="col">Mother's Name</th>
            <th scope="col">Guardian's Name</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php

                    require 'connection.php';
                    //Show in Form of Table

                    //Query
                    $showSql = "SELECT * FROM `studenttable` ";
                    $result = mysqli_query($conn, $showSql);

                    //Find Number of Records 
                    $numOfRows = mysqli_num_rows($result);

                    //Display the Rows Returned by sql Query

                    if($numOfRows > 0){
                     while($rows = mysqli_fetch_assoc($result)){

            ?>

                         <tr>
                            <th scope="col"><?php echo $rows['sno']; ?></th>
                            <th scope="col"><?php echo $rows['firstname']; ?></th>
                            <th scope="col"><?php echo $rows['lastname']; ?></th>
                            <th scope="col"><?php echo $rows['id']; ?></th>
                            <th scope="col"><?php echo $rows['birthday']; ?></th>
                            <th scope="col"><?php echo $rows['class']; ?></th>
                            <th scope="col"><?php echo $rows['fathername']; ?></th>
                            <th scope="col"><?php echo $rows['mothername']; ?></th>
                            <th scope="col"><?php echo $rows['guardianname']; ?></th>
                            <th scope="col"><?php echo $rows['email']; ?></th>
                           
                        </tr>

                    
                   <?php   
                        }
                    }
                   ?>
                    
           
         
           
          
        </tbody>
        </table>
    </div>
    <div class="text-center">
            <a type="button" href="form.php"class="btn btn-warning">New Student</a>
    </div>
       
</body>
</html>