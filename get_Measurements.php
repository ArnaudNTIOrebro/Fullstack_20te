<?php
//$q = intval($_GET['q']);
$q = ($_GET['q']);
$sign = "%";
echo $sql;
$servername = "localhost:din port";
$username = "root"; 
$password = "";
$dbname = "namnet på din dB";


$con = mysqli_connect($servername,$username,$password,$dbname);
mysqli_select_db($con,"namnet på din dB");
$sql="SELECT * FROM Measurements WHERE Location LIKE '".$q.$sign."'";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>temp</th>
<th>humidity</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Temperature'] . "</td>";
  echo "<td>" . $row['Humidity'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);

?>
