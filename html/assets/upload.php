<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "register";

$conn = new mysqli($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching form data
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST["content"];

// Uploading cover image
$cover_tmp = $_FILES['image']['tmp_name'];
$cover_name = $_FILES['image']['name'];
$cover_path = 'uploads/' . $cover_name;

move_uploaded_file($cover_tmp, $cover_path);

// Inserting data into database
$sql = "INSERT INTO books (title, author, content, cover_image) VALUES ('$title', '$author', '$content', '$cover_path')";

if ($conn->query($sql) === TRUE) {
    echo "Book uploaded successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Book Content</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <div class="container">
        <h2>Upload Book Content</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" required></textarea>
            <label for="cover">Cover Image:</label>
            <input type="file" id="cover" name="cover_image" accept="image/*" required>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>