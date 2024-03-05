<?php 
        @session_start();
        if (isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            $name = $_SESSION['name'];
            $password = $_SESSION['password'];
            $gender = $_SESSION['gender'];
            $yearofpass = $_SESSION['yearofpass'];
            $address = $_SESSION['address'];
            $post = $_SESSION['post'];
            $company = $_SESSION['company'];
            $mobile = $_SESSION['mobile'];
            $linkedin = $_SESSION['linkedin'];
            $insta = $_SESSION['insta'];
            $twitter = $_SESSION['twitter'];
            $degree = $_SESSION['degree'];
        }

    $database = "alumniportalx"; 
    $mysqli = mysqli_connect("localhost", "root", "", $database);      

    
    if(count($_POST)>0) {
        mysqli_query($conn, "UPDATE profile set mobile= '" . $_POST['mobile'] . "',  name= '" . $_POST['name'] . "',  
        email= '" . $_POST['username'] . "',  gender= '" . $_POST['gender'] . "',  yearofpass= '" . $_POST['yearofpass'] . "',
        address= '" . $_POST['address'] . "', post= '" . $_POST['post'] . "', yearofpass= '" . $_POST['yearofpass'] . "', 
        company= '" . $_POST['company'] . "', linkedin= '" . $_POST['linkedin'] . "',
        twitter= '" . $_POST['twitter'] . "', degree= '" . $_POST['degree'] . "',
        insta= '" . $_POST['insta'] . "' WHERE email='$username' ");
        echo "<script> alert('Records are updated Please Sign in Again')
        window.location.replace('alumni.php'); </script>";
    }


    $result = mysqli_query($mysqli,"SELECT * FROM profile WHERE email='" . $_GET['username'] . "'");
    $row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Alumni Profile</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
        * {
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: #dfe9f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #007BFF;
        }

        /* Style the profile image */
        .profile-image {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            margin: 0 auto 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Style the profile data */
        .profile-data {
            margin-bottom: 20px;
            text-align: left;
            padding-left: 20px;
            border-left: 4px solid #007BFF;
        }

        label {
            font-weight: bold;
            color: #007BFF;
        }

        /* Style the submit button */
        .edit-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .edit-button:hover {
            background-color: #0056b3;
        }

        /* Style the edit form */
        .edit-form {
            margin-top: 20px;
        }

        .edit-form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .edit-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .edit-form input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .edit-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Alumni Profile</h2>
        <img src="img/alumni1.jpg" alt="Profile Image" class="profile-image">
        
        <!-- Edit Profile Form -->
        <form action="#" method="post" class="edit-form">

        <label class=" col-lg-2 ">Full Name</label>
        <input class="form-control col-lg-4 formfield" type='text' name="name" id='name' value="<?php echo $name; ?>"/><br>
            <label for="editName">Full Name:</label>
            <input type="text" id="editName" name="editName" required>

            <label for="editEmail">Email:</label>
            <input type="email" id="editEmail" name="editEmail" required>

            <label for="editPhone">Phone Number:</label>
            <input type="tel" id="editPhone" name="editPhone" required>

            <label for="editGradYear">Graduation Year:</label>
            <input type="text" id="editGradYear" name="editGradYear" required>

            <label for="editDegree">Degree Earned:</label>
            <input type="text" id="editDegree" name="editDegree" required>

            <label for="editCurrentlyWorking">Currently Working:</label>
            <input type="text" id="editCurrentlyWorking" name="editCurrentlyWorking" required>

            <input type="submit" value="Save Changes" class="edit-button">
        </form>
    </div>
</body>
</html>
