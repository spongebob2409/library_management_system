<?php
include "connection.php";

if (isset($_POST['delete'])) {
    $bookId = $_POST['bookid'];

    // Using prepared statement to prevent SQL injection
    $stmt_delete = $db->prepare("DELETE FROM `books` WHERE bookid = ?");
    $stmt_delete->bind_param("i", $bookId);

    if ($stmt_delete->execute()) {
        echo "<script type='text/javascript'>alert('Book deleted successfully');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Error deleting book');</script>";
    }

    $stmt_delete->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Books</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header style="height: 90px;">
    <div class="logo">
        <h1 style="color: white; font-size: 20px; word-spacing: 10px; line-height: 60px; margin-top: 20px;">Book Deletion Section</h1>
        <nav>
            <ul>
                <li><a href="Projectwork.php">GO BACK</a></li>
            </ul>
        </nav>
    </div>
</header>

<section>
    <div class="reg_img2">
        <div class="box2">
            <h1 style="text-align: center; font-size: 45px;">DELETE BOOK</h1><br>
            <form name="DeleteBook" action="" method="post">
                <br><br>
                <div class="login">
                    <input class="form-control" type="text" name="bookid" placeholder="Book ID to Delete" required=""> <br>
                    <input class="btn btn-danger" type="submit" name="delete" value="Delete Book" style="width: 150px; height: 40px">
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
