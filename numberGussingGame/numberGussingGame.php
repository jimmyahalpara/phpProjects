<?php 
    $message = false;
    $value = "";
    if (isset($_GET['number'])){
        if (strlen($_GET['number']) > 0){
            if ($_GET['number'] < 0){
                $message = "This game dont work with negative numbers";
            }
            else if ($_GET['number'] > 98){
                $message = "Your number is high";
            }
            else if ($_GET['number'] < 98){
                $message = "Your number is low";
            }
            else{
                $message = "Your Guess is correct, good job.";
            }
            $value = $_GET['number'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Projects</title>
    <link rel="stylesheet" href="../Styles/style.css">
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="https://jimmyahalpara.github.io">Home</a>
            </li>
            <li>
                <a href="../index.html">PHP Projects</a>
            </li>
            <li>
                <a href="https://jimmyahalpara.github.io">Other Projects</a>
            </li>
        </ul>
    </nav>
    <div class="mainContent">
        <h1>Number Gussing Game</h1>
        <div class="description">
            Number gussing game with static value. Enter your gussing in input below, and click submit.
        </div>
        <form>
            <label for="number">Enter your number:</label>
            <input type="number" id="number" name="number" value="<?= htmlentities($value) ?>">
            <button type="submit">Submit</button>
        </form>
        <div class="description">
            <pre>
                <?php
                    if ($message !== false){
                        echo $message;
                    } 
                    ?>
                </pre>
        </div>

    </div>

</body>

</html>