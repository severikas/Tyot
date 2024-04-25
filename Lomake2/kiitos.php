<h1> Kiitos palautteestasi </h1>
    <?php 
 $servername ="localhost";
 $username = "root";
 $password = "";
 $database = "tilaus";
 $conn = new mysqli( $servername, $username, $password, $database);
 if ($conn -> connect_error) {
    die ("yhteys epäonnistui : " . $conn -> connect_error);
 }  else {
    echo "seuraavat tiedot tallennettiin";
}
$sql = "SELECT * FROM tilausjakso ORDER BY id DESC Limit 1";
$result = $conn -> query($sql);
if ($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()) {
        echo "ID"  . $row["id"]. "<br> Nimi: ". $row["nimi"]. "<br> sukunimi: " . $row["sukunimi"]."<br>"."osoite:" .$row["osoite"]. "<br>". "postinumero". $row["postinumero"] . "<br>". "postitoimipaikka". $row["postitoimipaikka"] . "<br>". "tilaus". $row["tilausm"]. "<br>";
    }
}
?>