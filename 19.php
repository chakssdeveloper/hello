<!-- Aim:-  Using PHP to work with ZIP files and archives-->

<?php
$zipFileName = 'example.zip';
$extractPath = 'extracted/';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Create a ZIP archive
    $zip = new ZipArchive();

    // Open the ZIP archive for creating
    if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {
        // Add files to the ZIP archive
        $zip->addFile('file1.txt', 'folder/file1.txt');
        $zip->addFile('file2.txt', 'folder/file2.txt');

        // Add an empty directory to the ZIP archive
        $zip->addEmptyDir('empty_folder');

        // Close the ZIP archive
        $zip->close();
        echo "ZIP archive created successfully.";
    } else {
        echo "Failed to create ZIP archive.";
    }
}

// Extract files from the ZIP archive
$zip = new ZipArchive();
if ($zip->open($zipFileName) === TRUE) {
    // Extract all files to the specified directory
    $zip->extractTo($extractPath);

    // Close the ZIP archive
    $zip->close();
    echo "Files extracted successfully.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIP File Operations</title>
</head>
<body>

    <h2>Create and Extract ZIP Archive</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" value="Create ZIP Archive and Extract">
    </form>

</body>
</html>
