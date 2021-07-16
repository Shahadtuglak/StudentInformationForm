<?php
 $success = false;
 $fail = false;





//Check POST

if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
   
    $id = $_POST['id'];

    $birthday = $_POST['birthday'];
    $class = $_POST['class'];


    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];
    $guardianname = $_POST['guardianname'];
    $email = $_POST['email'];

    
    require 'connection.php';


        //insert Data
    $insertSql = "INSERT INTO `studenttable` (`firstname`, `lastname`, `id`, `birthday`, `class`, `fathername`, `mothername`, `guardianname`, `email`,`date`) VALUES ('$firstname', '$lastname', '$id' , '$birthday' , '$class' , '$fathername' , '$mothername' , '$guardianname' , '$email' , current_timestamp())";

    $result = mysqli_query($conn, $insertSql);

    if($result){
        $success = true;
    }
    else{
        $fail = true;
    }

}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">

    <title>Student Information Form</title>
</head>

<body>
    <h1>iSchool Republic School</h1>

    <h3>Student Information Form</h3>
    <hr>
    <?php
        if($success == true){
            echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
                   <strong>Success! </strong> Your Entry has been Successfully Entered..
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                   </div>";

        }
        if($fail == true){
            echo " <div class='alert alert-error alert-dismissible fade show' role='alert'>
                   <strong>Error! </strong> Your Entry has not been Successfully Entered..
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                   </div>";

        }
    ?>
    <hr>
  
   

    <section class="container">
        <form action="form.php" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" name="lastname"  class="form-control" id="lastname" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" name="id" class="form-control" id="id" aria-describedby="emailHelp" required>
            </div>

           <div class="mb-3">
                <label for="birthday" class="form-label">Date of Birth</label>
                <input type="date" name="birthday" class="form-control" id="birthday" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="text" name="class" class="form-control" id="class" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="fathername" class="form-label">Father's Name</label>
                <input type="text" name="fathername" class="form-control" id="fathername" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="mothername" class="form-label">Mother's Name</label>
                <input type="text" name="mothername" class="form-control" id="mothername" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="guardinname" class="form-label">Guardin's Name</label>
                <input type="guardianname" name="guardianname" class="form-control" id="guardinname"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Enter your Email </label>
                <input type="email" name="email" id="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       
    </section>

    <div class="text-center">
            <a type="button" href="showEntries.php"class="btn btn-warning">Show Previous Entries</a>
    </div>
    <br>

















    <!--  Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


</body>

</html>