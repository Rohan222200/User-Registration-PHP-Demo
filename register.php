
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            text-align: center;
            background-color: aliceblue;
            height: 345px;
            max-width: 550px;
            position: relative;
            left: 29%;
            border-radius: 17%;
        }
        .form h1{
            padding-top: 25px;
        }
        .form label{
            font-size: 1.1rem;
            padding-right: 20px;
        }
        /* .form input{
            width: 250px;
        } */
        
        .form button{
            margin-top: 15px;
            background-color: brown;
            padding: 8px 14px;
            border: none;
            border-radius: 28%;
            font-size: 1rem;
            color: white;
        }
        .form button:hover{
            color: brown;
            cursor: pointer;
            background: white;
        }
    </style>
</head>
<body>
    <div class="form">
        <h1>Registration Form</h1>
    <form method="POST">
        <label for="">First Name:</label>
        <input type="text" name="firstname" placeholder="Enter your first name"><br>
        <label for="">Last Name  :</label>
        <input type="text" name="lastname" placeholder="Enter your last name"><br>
        <label for="cars">Select Gender:</label>
        <select name="gender">
            <option>Male</option>
            <option>Female</option>
        </select><br>
        <label for="">Email ID:</label>
        <input type="email" name="email" placeholder="Enter your email"><br>
        <label for="">Password:</label>
        <input type="password" name="pass" placeholder="Enter your password"><br>
        <label for="">Mobile  :</label>
        <input type="number" name="mobile" placeholder="Enter your phone number"><br>
    
        <button name="submit">submit</button>
    </form>    
    </div>
</body>
</html>

<?php
include "connection.php";

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $mobile = $_POST['mobile'];

    $insertQuery = "insert into register (firstname , lastname , gender, email , password, phone) values ('$firstname' , '$lastname' , '$gender', '$email', '$password', '$mobile')";

    $insert = mysqli_query($conn , $insertQuery);

    if($insert){
        ?>
<script>
  alert("Inserted Successfully");
</script>
<?php
    }else{
        ?>
<script>
  alert("Data not inserted");
</script>
<?php
    }
    

}
?>