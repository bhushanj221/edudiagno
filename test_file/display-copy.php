<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: log.php");
    exit;
}
?>






<!DOCTYPE html>
<html>
<head>
    <title>'Upload my code'</title>
    <style>
        /* Basic table styles */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            
        }

        th {
            background-color: #b768a2;
        }

        /* Create and File buttons */
        .button-container {
            margin-bottom: 20px;
        }

        .button-container input[type="text"]{
            padding: 5px;
            width: 200px;
            height:30px;
            border-radius: 15px; 
            color:#73AD21;
            /* border: 2px solid #73AD21; */

            border: 9px solid #be0032;
        }
/**/
        .button-container input[type="file"] {
            /* padding: 5px;
            width: 200px;
            height:30px;*/
            border-radius: 15px; 
            border: 9px solid #be0032;
           
        }

        .button-container input[type="submit"] {
            padding: 5px 10px;
            background-color: #be0032;
            color: white;
            border: none;
            cursor: pointer;
            width: 200px;
            height:40px;
            border-radius: 15px;
        }

        .button-container input[type="submit"]:hover {
            background-color: #ff4500 ;
        }

        /* Folder and File styles */
        .folder {
            font-weight: bold;
        }

        .file {
            color: blue;
        }

        /* Hover effect for table rows */
        tr:hover {
            background-color: #f5f5f5;
        }

        /* Table header styles */
        th {
            background-color: #b768a2;
            color: white;
            
        }

        /* Center the table on the page */
        body {
            text-align: center;
        }

        /* Navigation bar styles */
        .navbar {
            background-color: #333;
            color: white;
            padding: 10px;
            overflow: hidden;
            border-radius: 15px;
            
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: #333;
            border-radius: 15px; 
        }

        /* Path animation */
        .path-animation {
            display: inline-block;
            animation: move-up 1s infinite;
        }

        @keyframes move-up {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
            100% {
                transform: translateY(0);
            }
        }

        /* Delete and Download button styles */
        .delete-button,
        .download-button,
        .copy-url-button {
            background-color: #ff0000;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin:5px;
            border-radius: 5px;

        }

        .delete-button:hover,
        .download-button:hover,
        .copy-url-button:hover {
            background-color: #fd5800;
            border-radius: 5px;
        }




        .logout_btn {


  padding: 5px 10px;
            background-color: #be0032;
            color: white;
            border: none;
            cursor: pointer;
            width: 200px;
            height:40px;
            border-radius: 15px;



}
    </style>
</head>
<body>
<h1 style="color: #ba55d3;">Welcome Master <b  style="color: #800080;" ><?php echo htmlspecialchars($_SESSION["username"]); ?> </b>  Love to see You.</h2>

    <!-- Create Folder form -->
    <div class="button-container">
        <form action="<?php echo $_SERVER['PHP_SELF'] . '?folder=' . urlencode($_GET['folder']); ?>" method="POST">
            <input type="text" name="folderName" placeholder="Enter folder name" required>
            <input type="submit" value="Create Folder" name="createFolder">
        </form>
    </div>

    <!-- Create File form -->
    <div class="button-container">
        <form action="<?php echo $_SERVER['PHP_SELF'] . '?folder=' . urlencode($_GET['folder']); ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="fileToCreate" required>
            <input type="submit" value="Create File" name="createFile">
        </form>
    </div>

    <div class="button-container">
    
    <a href="https://codeappmedia.com/student_login/logout.php" class="logout_btn">Logout</a> 
    </div>

    <?php
    //$uploadDirectory = 'uploads/';
    $uploadDirectory = $_SESSION["username"].'/';

    // Function to generate folder links
    function generateFolderLink($folderPath) {
        return $_SERVER['PHP_SELF'] . '?folder=' . urlencode($folderPath);
    }

    // Function to normalize folder paths
    function normalizeFolderPath($path) {
        return rtrim($path, '/') . '/';
    }

    // Function to delete a file or folder
    function deleteItem($itemPath) {
        if (is_dir($itemPath)) {
            // Delete folder and its contents
            $files = glob($itemPath . '/*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                } elseif (is_dir($file)) {
                    deleteItem($file);
                }
            }
            rmdir($itemPath);
        } elseif (is_file($itemPath)) {
            // Delete file
            unlink($itemPath);
        }
    }

    // Handle folder creation
    if (isset($_POST['createFolder']) && isset($_POST['folderName'])) {
        $folderName = $_POST['folderName'];
        $currentFolder = isset($_GET['folder']) ? normalizeFolderPath(urldecode($_GET['folder'])) : $uploadDirectory;
        $newFolderPath = $currentFolder . $folderName;

        if (!file_exists($newFolderPath)) {
            mkdir($newFolderPath, 0777, true);
            echo "<p>Folder '$folderName' created successfully.</p>";
        } else {
            echo "<p>Folder '$folderName' already exists.</p>";
        }
    }

    // Handle file creation
    if (isset($_POST['createFile']) && isset($_FILES['fileToCreate'])) {
        $fileToCreate = $_FILES['fileToCreate'];
        $fileName = $fileToCreate['name'];
        $currentFolder = isset($_GET['folder']) ? normalizeFolderPath(urldecode($_GET['folder'])) : $uploadDirectory;
        $filePath = $currentFolder . $fileName;

        if (!file_exists($filePath)) {
            move_uploaded_file($fileToCreate['tmp_name'], $filePath);
            echo "<p>File '$fileName' created successfully.</p>";
        } else {
            echo "<p>File '$fileName' already exists.</p>";
        }
    }

    // Handle delete button click
    if (isset($_POST['deleteItem']) && isset($_POST['itemPath'])) {
        $itemPath = $_POST['itemPath'];
        deleteItem($itemPath);
        echo "<p>Item deleted successfully.</p>";
    }

    // Handle download button click
    if (isset($_POST['downloadItem']) && isset($_POST['itemPath'])) {
        $itemPath = $_POST['itemPath'];
        if (is_file($itemPath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($itemPath) . '"');
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');


            header('Pragma: public');
            header('Content-Length: ' . filesize($itemPath));
            ob_clean();
            flush();
            readfile($itemPath);
            exit;
        }
    }

    // Handle copy URL button click
    if (isset($_POST['copyURL']) && isset($_POST['itemPath'])) {
        $itemPath = $_POST['itemPath'];
        echo "<p>Copy the URL for this file: $itemPath</p>";
    }
    ?>

    <!-- Navigation bar -->
    <div class="navbar">

        <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Select folder to perform action</a>
        <?php
        $currentFolder = isset($_GET['folder']) ? normalizeFolderPath(urldecode($_GET['folder'])) : $uploadDirectory;
        $folders = explode('/', trim($currentFolder, '/'));

        // Build the path
        $path = '';
        foreach ($folders as $folder) {
            $path .= $folder . '/';
            echo "<a href='" . generateFolderLink($path) . "'>$folder</a>";
            echo "<span class='path-animation'>/</span>";
        }
        ?>
    </div>

    <!-- List of files and folders -->
    <table>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php
        // Determine the current folder based on the query parameter
        $currentFolder = isset($_GET['folder']) ? normalizeFolderPath(urldecode($_GET['folder'])) : $uploadDirectory;

        // Make sure the current folder is within the upload directory
        if (strpos($currentFolder, $uploadDirectory) === 0) {
            $items = scandir($currentFolder);

            foreach ($items as $item) {
                if ($item != "." && $item != "..") {
                    $itemPath = $currentFolder . $item;
                    $itemType = is_dir($itemPath) ? 'folder' : 'file';
                    echo "<tr>";
                    echo "<td class='$itemType'><a href='" . generateFolderLink($itemPath) . "'>$item</a></td>";
                    echo "<td>";
                    echo "<form action='" . $_SERVER['PHP_SELF'] . "?folder=" . urlencode($currentFolder) . "' method='POST'>";
                    echo "<input type='hidden' name='itemPath' value='$itemPath'>";
                    echo "<input type='submit' class='delete-button' value='Delete' name='deleteItem'>";
                    if (is_file($itemPath)) {
                        echo "<input type='submit' class='download-button' value='Download' name='downloadItem'>";
                        echo "<input type='submit' class='copy-url-button' value='Copy URL' name='copyURL'>";
                    }
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            }
        } else {
            echo "<tr><td colspan='2'>The folder does not exist.</td></tr>";
        }
        ?>
    </table>

    <script>
        // Function to copy a text to clipboard
        function copyToClipboard(text1) {

            let text2= "https://codeappmedia.com/test_file/"
            text=  text2.concat(text1);

            const input = document.createElement('input');
            input.setAttribute('value', text);
            document.body.appendChild(input);
            input.select();
            document.execCommand('copy');
            document.body.removeChild(input);
        }

        // Add click event listeners to all "Copy URL" buttons
        const copyButtons = document.querySelectorAll('.copy-url-button');
        copyButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const itemPath = button.parentElement.querySelector('[name="itemPath"]').value;
                copyToClipboard(itemPath);

                alert(`URL copied to clipboard: https://codeappmedia.com/test_file/${itemPath}`);
            });
        });
    </script>
</body>
</html>
