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
        $id = $_GET['id'];
        $query = "SELECT * FROM allergens WHERE id = $id";
        $result = mysqli_query($conn, $query);
        foreach($result as $results) {
    ?>
    <body>
    <form action="" method="post">
    <input type="hidden" value="<?= $results['id'] ?>" name="id">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $results['name'] ?>">
        <label for="code">Code</label>
        <input type="text" name="code" value="<?= $results['code'] ?>">

        <button type="submit">Submit</button>
    </form>

    <?php } ?>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['name'];
            $code = $_POST['code'];
            $query = "UPDATE allergens SET name = '$name', code = '$code' WHERE id = '$id'";
            $result = mysqli_query($conn, $query);

            if ($result){
                header('location: index.php');
            }
        }
    ?>  
</body>
</html>