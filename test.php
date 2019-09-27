
<?php
    include 'connect.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="update.php" >
        <input type="text" value="<?php echo $row['name']; ?>" name="name"> <br><br>
        <input type="text" value="<?php echo $row['phone']; ?>" name="phone"> <br><br>
        <input type="text" value="<?php echo $row['address']; ?>" name="address"> 
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id"> <br><br>
        <input type="submit" value="submit" name="Submit"> 
    </form>
</body>
</html>