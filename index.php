<!DOCTYPE html>
<html>
<head>
    <title>Image Compression Tool</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>Image Compression Tool</h2>

    <form action="compress.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <br><br>

        <label>Compression Quality:</label>
        <input type="range" name="quality" min="10" max="100" value="70">
        <br><br>

        <button type="submit">Compress Image</button>
    </form>
</div>

</body>
</html>