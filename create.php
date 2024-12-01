<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $code = $_POST['code'];
        $query = "INSERT INTO allergens (name, code) VALUES ('$name', '$code')";
        $result = mysqli_query($conn, $query);

        if ($result){
            header('location: index.php');
        }
    }
?>  
<body>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="code">Code</label>
        <input type="text" name="code">

        <button type="submit">Submit</button>
    </form>
</body>
</html>