<!DOCTYPE html>
<html>
  <head>
    <title>Majors</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Majors</th>
      </tr>
      <?php
        $conn = mysqli_connect("localhost", "root", "", "test");
        if($conn-> connect_error){
          die("Connection failed:".$conn-> connect_error);
        }
        $sql = "SELECT CIPDESC from majors";
        $result = $conn-> query($sql);
        if ($result -> num_rows >0){
          while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row["CIPDESC"]. "</td><tr>";
          }
          echo "</table>";
        }
        else{
          echo "0 result";
        }
        $conn->close();
      ?>
    </table>
  </body>
</html>
