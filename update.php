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
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="add.php">Add Contact</a>
            <a href="delete.php">Delete Contact</a>
            <a class="active" href="update.php">Update Contact</a>
        </div>

        <main>
            <h2>Update Contact</h2>
            <table>
                <?php

                function updateData($filename, $content, $mode)
                {
                    if (!file_exists($filename)) fopen($filename, "w");
                    $fp = fopen($filename, $mode) or die("error in opening the file");
                    fputs($fp, $content);
                    fclose($fp) or die("error in closing the file !");
                }

                function edit($name, $phone)
                {
                    $dataTxt = 'data.txt';
                    $loadData = @file($dataTxt, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                    foreach ($loadData as $data) {

                        $expData = explode('|', $data);
                        $myName = $expData[0];
                        $myPhone = $expData[1];

                        if ($myName == $name || $myPhone == $phone) {
                            $out = $data;
                            break;
                        } else {
                            $out = null;
                        }
                    }
                    return $out;
                }

                if (isset($_POST['contactName'])) {
                    define('file', 'data.txt');
                    if (!file_exists(file)) {
                        updateData(file, "$name|$phone" . PHP_EOL, 'a');
                    }

                    $name = $_POST['contactName'];
                    $phone = $_POST['contactNo'];
                    $lastData = edit($_POST['contactName'], $_POST['contactNo']);
                    $content = str_replace($lastData, "$name|$phone", file_get_contents(file));
                    updateData(file, $content, 'w');
                }

                if (!empty($_POST['contactName']) && !empty($_POST['contactNo'])) {
                    $loadData = edit($_POST['contactName'], $_POST['contactNo']);
                    $exdata = explode('|', $loadData);
                    $name = $exdata[0];
                    $phone = $exdata[1];
                }

                ?>

            </table>

            <form id="frm" name="info" method="POST" action="#">
                </br>
                <input type="text" name="contactName" class="addContact" id="name" placeholder="NEW NAME"></br></br>
                <input type="tel" name="contactNo" class="addContact" id="phone" placeholder="NEW PHONE"></br></br>
                <input type="submit" value="Update" id="addCont" name="go">
            </form>
            </br>
        </main>
    </div>
</body>

</html>