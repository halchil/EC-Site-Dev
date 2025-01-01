<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Server</title>
</head>
<body>
    <h1>Welcome to PHP Server!</h1>
    <?php echo "<p>Today's date is: " . date('Y-m-d') . "</p>"; ?>

    <header>
        <nav id="top-nav">
            <ul>
                <li class="menu-contents"><a href="index.php">Home</a></li>
                <li class="menu-contents"><a href="login.php">Login</a></li>
            </ul>
        </nav>

        <nav>
            <ul class="nav-container">
                <li class="nav-item"><a href="index.php">Home2</a></li>
                <li class="nav-item"><a href="login.php">Login2</a></li>
            </ul>
        </nav>

    </header> 


</body>


</html>
