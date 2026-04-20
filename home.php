<?php
// home.php (standalone version — does NOT use header.inc.php / footer.inc.php)

// TODO 1: Start the session using session_start()
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home PHP</title>
</head>

<body>
    <header>
        <a href="register.php" title="Register">Register</a>

        <!-- TODO 2: Use PHP to check if $_SESSION["is_logged_in"] is set.
            If yes: show a Logout link to logout.php
            If no:  show a Login link to login.php
            Hint: Use isset() with an if/else block and PHP opening/closing tags -->
        <?php if (isset($_SESSION["is_logged_in"])) { ?>
            <a href="logout.php" title="Logout">Logout</a>
        <?php
        } else { ?>
            <a href="login.php" title="Login">Login</a>
        <?php
        }
        ?>
    </header>

    <?php
    // TODO 3: Check if $_SESSION["first_name"] is set.
    //         If yes: store it in a variable $first_name
    //         If no:  set $first_name = "Future User"
    if (isset($_SESSION["first_name"])) {
        $first_name = $_SESSION["first_name"];
    } else {
        $first_name = "Future User";
    }
    ?>

    <!-- TODO 4: Display the welcome message using a PHP short echo tag
        Example: <h1>Welcome to our site, <?= $first_name ?>!</h1> -->
    <h1>Welcome to our site, <?= $first_name ?>!</h1>
</body>

</html>