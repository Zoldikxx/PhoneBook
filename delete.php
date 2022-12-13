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
            <form id="form" method="post" action="delete.php">
                <div id="searchblock">
                    <p class="pp">Search :</p>
                </div>
                <input type="text" name="search" id="searchContact" placeholder="Search" required></br></br>
                <input type="submit" value="SEARCH" id="addCont" name="go">
            </form>

            <?php
            if (isset($_POST["search"])) {
                echo "<table>";
                $myFile = fopen("data.txt", "r+") or die("cannot open file");
                while (!feof($myFile)) {
                    $line = fgets($myFile);
                    $array = explode("|", $line);
                    if (strpos($array[0], $_POST["search"]) !== false) {
                        $name = $array[0];
                        $phone = $array[1];
                        echo "<tr><td> $name </td>";
                        echo "<td> $phone </td>";
                        echo "<td><a href=deleteUser.php?name=" . $name . ">Delete</a></td></tr>";
                    }
                }
                echo "</table>";
            }
            ?>
        </main>
    </div>
</body>

</html>