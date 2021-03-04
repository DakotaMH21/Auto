<!DOCTYPE HTML>
<html lang="en.ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Auto Enthusiast Central </title>
</head>
    <body>
        <header>
            <h1> Auto Enthusiast Central </h1>
        </header>
        <main>
            <form action="process.php" method="post">
                <input type="text" name="name" placeholder="Enter Name">
                <input type="text" name="car" placeholder="Enter Your Car Model!">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="post" placeholder="Enter Your Post Here">
                <input type="submit" value="submit" name="submit">
            </form>
        </main>
        <footer>
            <p>&copy; Auto Enthusiast <?php echo getdate() ['year']; ?> </p>
        </footer>
    </body>
</html>