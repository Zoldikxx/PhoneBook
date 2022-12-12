<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delete Page</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div>
        <header>
            <h1 id="title">Phone Book</h1>
        </header>
        <div class="navbar">
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="add.php">Add Contact</a>
            <a class="active" href="delete.php">Delete Contact</a>
            <a href="update.php">Update Contact</a>
        </div>

        <main>
            <?php
            define('file', 'data.txt');
            ?>
            <?php
            if (isset($_POST['user'])) {
                $loadData = @file(file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $in = $_POST['user'];
                foreach ($loadData as $data) {
                    $expData = explode('|', $data);
                    $dbname = $expData[0];
                    $pattern = "/^.*$in.*\$/m";

                    if (preg_match($pattern, $dbname, $xx)) {
                        $outExp = explode('|', $data);
                        $contents = file_get_contents(file);
                        $contents = str_replace($outExp, '', $contents);
                        file_put_contents(file, $contents);
                    }
                }
            }
            ?>

            <form id="frm" name="info" method="POST" action="delete.php">
                <h2>Please enter the name of the user to delete</h2>
                <input type="text" name="user" id="name" class="addContact" placeholder="Name" />
                <br><br>
                <input type="submit" value="Delete" id="addCont" name="go">
                <?php
                ?>
        </main>
    </div>
</body>

</html>