
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <?php
        // echo htmlspecialchars("</h1>Hello Word</h1>");  
        echo  "</h1>Hello Word</h1>";
    ?>
    <h2>Testing send data</h2>

    <!--data form-->

    <form action="form.php" method="post">
        <input type="text" name="name"><br>
        <input type="password" name="password"><br>
        <select name="number" id="">
            <option value="">choose number</option>
            <option value="1"selected>one</option>
            <option value="2">two</option>
            <option value="3">three</option>
        </select>
        <input type="submit" value="send"><br>
    </form>
</body>
</html>