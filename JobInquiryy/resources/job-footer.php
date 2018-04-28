<?php 
echo  "<div class='panel-footer'>Rating:&nbsp;&nbsp;<span class='glyphicon glyphicon-star'></span>&nbsp;&nbsp;<span class='glyphicon glyphicon-user'></span>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type='button' class='btn btn-success' data-toggle='collapse' data-target='#a".$row['id']."'>Rate</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <button type='button' class='btn btn-default' data-toggle='collapse' data-target='#b".$row['id']."'>Comment</button>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;
                  <button type='button' class='btn btn-info' data-toggle='collapse' data-target='#c".$row['id']."'>View Details</button></div>";
                  echo  "<div id=b".$row['id']." class='collapse'>";
                  echo  "&nbsp;<textarea rows=5 cols=50></textarea>";
                  echo   "<p>&nbsp;&nbsp;</p>";
                  echo  "</div>";
                  echo "</div>";
?>