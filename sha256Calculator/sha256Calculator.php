<?php
    $shaValue = false;
    $textValue = "";
    if (isset($_GET['text'])){
        if (strlen($_GET['text']) > 0){
            $shaValue = hash('sha256', $_GET['text']);
            $textValue = $_GET['text'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHA 256 Calculator</title>
    <link rel="stylesheet" href="../Styles/style.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="../index.html">PHP Projects</a>
            </li>
            <li>
                <a href="#">Other Projects</a>
            </li>
        </ul>
    </nav>
    <div class="mainContent">
        <h1>
            SHA-256 Calculator
        </h1>
        <div class="description">
            This applications was part of Assiginment in Coursera Specialization - Web Applications for Everybody. Enter any text in box, and click submit to get get their SHA-256 value.
        </div>
        <form>
            <label for="text">Enter your text: </label>
            <input type="text" name="text" id="text" value="<?= htmlentities($textValue) ?>">
            <button type="submit">Submit</button>
        </form>
        <div class="description">
            <?php
                if ($shaValue !== false){
                    echo "<pre> SHA-256 is : $shaValue </pre>";
                }
            ?>
        </div>


    </div>
</body>

</html>