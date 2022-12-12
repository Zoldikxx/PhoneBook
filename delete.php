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
            $file = "data.txt";
            $string = $_POST['user'];
            $i = 0;
            $array = array();
            $read = fopen($file, "r") or die("can't open the file");
            while (!feof($read)) {
                $array[$i] = fgets($read);
                ++$i;
            }
            fclose($read);

            $write = fopen($file, "w") or die("can't open the file");
            foreach ($array as $a) {
                if (!strstr($a, $string)) fwrite($write, $a);
            }
            fclose($write);
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