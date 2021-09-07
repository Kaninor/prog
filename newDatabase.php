<?php

echo base64_encode("Dariush")."<br>";
echo base64_decode("RGFyaXVzaA==")."<br><br>";

$db = mysqli_connect("localhost", "root", "", "db");
$read = mysqli_query($db, "SELECT * FROM users");

while ($row = mysqli_fetch_array($read)):?>
    <li><?= $row['name']."&nbsp;&nbsp;&nbsp;&nbsp;".base64_encode($row['name'])?></li>
<?php endwhile; ?>