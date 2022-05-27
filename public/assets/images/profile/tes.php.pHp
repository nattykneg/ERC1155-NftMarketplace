                        <?php
$servername = "127.0.0.1";
$username = "bitsport_new";
$password = "Unicorn123@#";
$dbname = "bitsport_new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from users order by total_btc_bal desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"] . " - Email " . $row['email'].'---';
   echo "BTC: " . $row["total_btc_bal"]. " - ETH: " . $row["total_eth_bal"]. " - LTC:" . $row["total_ltc_bal"]."<br>";
    echo "addr: " . $row["btc_address"];
  //print_r($row);
  }

} else {
  echo "0 results";
}
$conn->close();
?>
                        