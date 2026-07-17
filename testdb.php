<?php

include "config/koneksi.php";

$query =
mysqli_query($conn, "SELECT * FROM songs");

while($row = mysqli_fetch_assoc($query)){

    echo $row['title']."<br>";
}