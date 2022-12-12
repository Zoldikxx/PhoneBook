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
            <div>
                <form id="form">
                    <div id="searchblock">
                        <p class="pp">Search :</p>
                    </div>
                    <input type="text" name="search" id="searchContact" placeholder="Search" required>
                </form>
            </div>
            <form id="frm" name="info">
                </br>
                <input type="text" name="contactName" class="addContact" id="name" placeholder="NEW NAME"></br></br>
                <input type="tel" name="contactNo" class="addContact" id="phone" placeholder="NEW PHONE"></br></br>
                <input type="submit" value="Update" id="addCont" name="go">
            </form>
            </br>
    </div>
</body>

</html>