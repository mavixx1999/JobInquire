<?php 
  $server = "localhost";
  $user = "root";
  $password = "";
  $dbname = "jobinquirydata";
  $tbname = "jobs";
  $conn = new mysqli($server, $user, $password, $dbname);

  if ($_SERVER["REQUEST_METHOD"] == "POST")
       {
              $jobtitle = $_POST['job-title'];
              $salary = $_POST['salary'];
              $location = $_POST['location'];

              $search = "SELECT * FROM jobs WHERE jobtitle='$jobtitle' or salary='$salary' or location='$location'";
              $result = $conn->query($search);
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              $i = 1;
              while ( $i <= 10) {
                echo "<div class='panel panel-primary'>";
                echo  "<div class='panel-heading'>".$row['jobtitle']."</div>";
                echo  "<div class='panel-body'>".$row['jobdesc']."<br>"
                                                .$row['salary']."<br>"
                                                .$row['location']."</div>";
                echo  "<div class='panel-footer'></div>";
                echo "</div>";
                $i++;
              }
            }
            $conn->close();
          ?>