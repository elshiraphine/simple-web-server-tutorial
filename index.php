<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h1>Simple Form</h1>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="affiliate">Affiliate:</label>
        <input type="text" id="affiliate" name="affiliate" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
