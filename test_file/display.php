<!DOCTYPE html>
<html>
<head>
    <title>List Files in "uploads" Folder</title>
</head>
<body>
    <h2>Files in "uploads" Folder:</h2>
    <ul>
        <?php
        $uploadDirectory = 'uploads/';

        // Check if the "uploads" directory exists
        if (is_dir($uploadDirectory)) {
            // Get the list of files in the directory
            $files = scandir($uploadDirectory);

            // Loop through the list and display each file
            foreach ($files as $file) {
                // Exclude "." and ".." directories and files
                if ($file != "." && $file != "..") {
                    echo "<li><a href='" . $uploadDirectory . $file . "' target='_blank'>" . $file . "</a></li>";
                }
            }
        } else {
            echo "<p>The 'uploads' directory does not exist.</p>";
        }
        ?>
    </ul>
</body>
</html>
