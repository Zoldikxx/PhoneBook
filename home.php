<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div>
        <header>
            <h1 id="title">Phone Book</h1>
        </header>

        <div class="navbar">
            <a class="active" href="home.html"> Home</a>
            <a href="search.php">Search</a>
            <a href="add.php">Add Contact</a>
            <a href="delete.php">Delete Contact</a>
            <a href="update.php">Update Contact</a>
        </div>

        <main>
            <table id='contacts'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="tbdy">
                    <?php
                    $file = "data.txt";
                    $position = 0;
                    if (file_exists($file)) {
                        $arr = file($file) or die("ERROR: Cannot open the file.");
                    } else {
                        echo "ERROR: File does not exist.";
                    }
                    ?>
                    <tr id="contInfo">
                        <td>
                            <?php
                            for ($x = 0; $x < sizeof($arr); $x += 1) {
                                $expData = explode('|',  $arr[$x]);
                                echo $expData[0];
                                echo "<br>";
                            }
                            ?>
                        </td>

                        <td>
                            <?php
                            for ($x = 0; $x < sizeof($arr); $x += 1) {
                                $expData = explode('|', $arr[$x]);
                                echo $expData[1];
                                echo "<br>";
                            }
                            ?>
                        </td>
                    </tr>

                </tbody>
            </table>
        </main>
    </div>
</body>

</html>