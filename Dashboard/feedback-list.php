<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
     @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700");
  *{
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  body{
    background: #dfe9f5;
  }
      .logo{
  height: 70px;
  width: 70px;
      }
  
      .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        margin-top: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
  
      h2 {
        text-align: center;
      }
  
      label {
        font-weight: bold;
      }
  
      input[type="text"],
      textarea {
        width: 95%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
  
      textarea {
        height: 150px;
      }
        /* Add this CSS to style the feedback table */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  border: 1px solid #ccc;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

/* Add any additional styling as needed */

  
      button {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
  
      button:hover {
        background-color: #0056b3;
      }
    </style>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Your head content remains unchanged -->
</head>
<body>
  <div class="container">
    

    <!-- Feedback Table -->
    <h2>Feedback</h2>

    <?php  
$database = "alumniportalx"; 
$mysqli = new mysqli("localhost", "root", "", $database); 
$query = "SELECT * FROM feedback";
echo '<table > 
<tr style="color:black"  > 
    <td> <b><font face="Arial">Name</font></b> </td> 
    <td> <b> <font face="Arial">Email</font> </b> </td> 
    <td> <b> <font face="Arial">Subject</font> </b> </td> 
    <td> <b> <font face="Arial">Feedback</font> </b> </td>
</tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["email"];
        $field3name = $row["subject"];
        $field4name = $row["msg"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
    
  </div>
</body>
</html>




