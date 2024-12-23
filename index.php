<?php
include("./config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- starts -->



    <form action="create.php" method="post">


        <label for="">name</label>
        <input type="text" name="name_F" value=""><br>

        <label for="">email</label>
        <input type="text" name="email_F" value=""><br>

        <label for="">role</label>
        <select name="role" id="role">
            <option value="1">admin</option>
            <option value="2">user</option>
        </select>

        

        <!-- problem select -->
        <select name="role">
            <option value="nom_role">role</option>
            <?php
            $query = "SELECT nom_role FROM role";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row = ['nom_role'] . '</option>';
            }

            ?>

        </select>

        <!-- problem select -->






        <input type="submit" name="submit" value="submit">


    </form>
</body>

</html>