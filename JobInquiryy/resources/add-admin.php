<?php 
  session_start();
  $server = "localhost";
  $name = "root";
  $psswrd = "";
  $dbname = "jobinquirydata";
  $tbname = "admin";

  $adminid = $_SESSION['administrator'];

  $conn = new mysqli($server, $name, $psswrd, $dbname);
  $sql = "SELECT * FROM ".$tbname." WHERE username='$adminid'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $dateadded = $_POST['dateadded'];
    if($username != '' && $fname != '' && $lname != '' && $address != '' && $gender != '' && $password != '' && $dateadded != '')
    {
      $add = "INSERT INTO ".$tbname." (username, fname, lname, address, gender, password, dateadded)
      VALUES('$username','$fname', '$lname', '$address', '$gender', '$password', '$dateadded')";
      $conn->query($add);
    }
    else
    {
      echo "<h2>Error : Empty fields</h2>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Job Inquiry</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js//jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    body
    {
      margin-top: 2%;
      background-image: url('jobimages/j4.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .pad
    {
      padding: 10px;
    }
    .box-admin
    {
      /*border: 2px solid orange;*/
      background-color: #333;
      color: white;
      height: 500px;
    }
    .box
    {
      background-color: orange;
      color: white;
      height: 500px;
    }
    .pos
    {
      position: relative;
    }
    img
    {
      border: 1px solid white;
      height: 300px;
      width: 200px;
    }
    h2
    {
      color: white;
    }
    table .item:hover
    {
      color: black;
      background-color: orange;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Administrator</h2>
    <div class="row pad">
      <div class="col-md-9 box pad">
        <h3>Add Admin</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="text-left">
          <input type="text" name="fname" placeholder="First Name" class="form-control" value=""><br>
          <input type="text" name="lname" placeholder="Last Name" class="form-control" value=""><br>
          <input type="text" name="address" placeholder="Address" class="form-control" value=""><br>
          <div class="form-group text-left">
            <label>Gender:</label>
              <label><input type="radio" name="gender" value="Male">Male</label>
              <label><input type="radio" name="gender" value="Female">Female</label>
          </div>
          <input type="password" name="password" placeholder="Password" class="form-control" value=""><br>
          <input type="text" name="username" placeholder="username" class="form-control" value=""><br>
          <input type="date" name="dateadded" class="form-control" value=""><br>
          <input type="submit" name="submit" value="Add" class="btn btn-warning">
        </form>
      </div>
      <div class="col-md-3 box-admin pad">
            <img>
            <table class="table-hover pos">
              <thead>
                <tr class="item">
                  <th></th>
                  <th>Admin Info</th>
                </tr>
              </thead>
              <tbody>
                <tr class="item">
                  <td>User name&nbsp;&nbsp;</td>
                  <td><?php echo $row['username']; ?></td>
                </tr>
                <tr class="item">
                  <td>First name&nbsp;&nbsp;</td>
                  <td><?php echo $row['fname']; ?></td>
                </tr>
                <tr class="item">
                  <td>Last name&nbsp;&nbsp;</td>
                  <td><?php echo $row['lname']; ?></td>
                </tr>
                <tr class="item">
                  <td>Address&nbsp;&nbsp;</td>
                  <td><?php echo $row['address'] ?></td>
                </tr>
                <tr class="item">
                  <td>Gender&nbsp;&nbsp;</td>
                  <td><?php echo $row['gender']; ?></td>
                </tr>
                <tr class="item">
                  <td>Date joined&nbsp;&nbsp;</td>
                  <td><?php echo $row['dateadded'] ?></td>
                </tr>
              </tbody>
            </table>
            <form action="admin.php" method="post" class="text-right pad">
              <input type="submit" value="Back" class="btn btn-warning">
            </form>
        </div>
    </div>
  </div>

</body></html>
<?php
$conn->close();
?>