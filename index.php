<?php
// Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
$password = $_GET["password"];
var_dump($password);
if ($password === "boolean") {
    $class_name = "green";
} else {
    $class_name = "red";
}

?>

<h2 class="<?php echo $class_name; ?>">
<?php echo $password; ?>
</h2>
    
</body>
</html>