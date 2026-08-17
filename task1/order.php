<!DOCTYPE html>
<html>
<head>
    <title>Output</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
<h2 style="text-align: center;">Order Details</h2>
<?php
$name = $_POST['name'];
$email = $_POST['email'];

echo "<div class='outputBox'>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "</div>";
?>

</body>
</html>