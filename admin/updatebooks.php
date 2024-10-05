<?php
include "connection.php";

if (isset($_POST['update'])) {
    $bookId = $_POST['bookid'];
    $newBookName = $_POST['newbookname'];
    $newGenre = $_POST['newgenre'];
    $newAuthor = $_POST['newauthor'];

    // Using prepared statement to prevent SQL injection
    $stmt_update = $db->prepare("UPDATE `books` SET Title = ?, Genre = ?, No_of_copies = ? WHERE BookID = ?");
    $stmt_update->bind_param("sssi", $newBookName, $newGenre, $newAuthor, $bookId);
    $stmt_update->execute();
    $stmt_update->close();

    echo "<script type='text/javascript'>alert('Book updated successfully');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Books</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header style="height: 90px;">
    <div class="logo">
        <h1 style="color: white; font-size: 20px; word-spacing: 10px; line-height: 60px; margin-top: 20px;">Book Update Section</h1>
        <nav>
            <ul>
                <li><a href="Books.php">GO BACK</a></li>
            </ul>
        </nav>
    </div>
</header>

<section>
    <div class="reg_img2">
        <div class="box2">
            <h1 style="text-align: center; font-size: 45px;">UPDATE BOOK</h1><br>
            <!-- Check if the form is submitted -->
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
                <p style="text-align: center;">Book updated successfully</p>
            <?php } ?>
            <form name="UpdateBook" action="" method="post">
                <br><br>
                <div class="login">
                    <input class="form-control" type="text" name="bookid" placeholder="Book ID to Update" required=""> <br>
                    <input class="form-control" type="text" name="newbookname" placeholder="New Book Name" required=""> <br>
                    <input class="form-control" type="text" name="newgenre" placeholder="New Genre" required=""> <br>
                    <input class="form-control" type="text" name="newauthor" placeholder="No.of copies" required=""> <br>
                    <input class="btn btn-primary" type="submit" name="update" value="Update Book" style="width: 150px; height: 40px">
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
