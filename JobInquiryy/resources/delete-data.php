<?php 
  session_start();
  $server = "localhost";
  $name = "root";
  $password = "";
  $dbname = "jobinquirydata";
  $tbname = "admin";

  $adminid = $_SESSION['administrator'];

  $conn = new mysqli($server, $name, $password, $dbname);
  $sql = "SELECT * FROM ".$tbname." WHERE username='$adminid'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
      height: 600px;
    }
    .box
    {
      background-color: orange;
      color: white;
      height: 600px;
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
        <a href="add-data.php" class="btn btn-warning">Add Data</a>
        <a href="delete-data.php" class="btn btn-warning">Delete Data</a>
        <a href="update-data.php" class="btn btn-warning">Update Data</a>
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
            <form action="log-out.php" method="post" class="text-right pad">
              <input type="submit" value="log out" class="btn btn-warning">
              <a href="add-admin.php" style="color: white;">Add Admin</a>
            </form>
        </div>
    </div>
  </div>

</body></html>
<?php
$conn->close();
?>