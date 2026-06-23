<?php

if(isset($_FILES['image']))
{
    $quality = $_POST['quality'];

    $fileName = time() . "_" . $_FILES['image']['name'];

    $source = "uploads/" . $fileName;
    $destination = "compressed/" . $fileName;

    move_uploaded_file($_FILES['image']['tmp_name'], $source);

    $info = getimagesize($source);

    if($info['mime'] == 'image/jpeg')
    {
        $image = imagecreatefromjpeg($source);
        imagejpeg($image, $destination, $quality);
    }
    elseif($info['mime'] == 'image/png')
    {
        $image = imagecreatefrompng($source);

        $pngQuality = 9 - round(($quality / 100) * 9);

        imagepng($image, $destination, $pngQuality);
    }
    elseif($info['mime'] == 'image/webp')
    {
        $image = imagecreatefromwebp($source);
        imagewebp($image, $destination, $quality);
    }
    else
    {
        die("Unsupported image format.");
    }

    $originalSize = round(filesize($source)/1024,2);
    $compressedSize = round(filesize($destination)/1024,2);

    echo "
    <h2>Compression Successful</h2>

    <p>Original Size: {$originalSize} KB</p>
    <p>Compressed Size: {$compressedSize} KB</p>

    <a href='$destination' download>
        Download Compressed Image
    </a>

    <br><br>

    <a href='index.php'>Compress Another Image</a>
    ";
}
?>