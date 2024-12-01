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
    $query = 'SELECT * FROM allergens';
    $result = mysqli_query($conn, $query);

    $number = 1;
?>
<body>
    <a href='create.php'>Tambah Data</a>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Code</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach ($result as $result){
                    echo"
                    <tr>
                        <td>". $number++ ."</td>
                        <td>". $result['name'] ."</td>
                        <td>". $result['code'] ."</td>
                        <td><a href='update.php?id=". $result['id'] ."'>View</a></td>
                        <td><a href='delete.php?id=". $result['id'] ."'>Delete</a></td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>