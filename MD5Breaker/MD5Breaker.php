<?php 
    $hash =  "";
    $message = false;
    $found = false;
    if (isset($_GET['hash'])){
        if (strlen($_GET['hash']) > 31){
            for ($i = 0; $i < 10; $i++){
                for ($j=0; $j < 10; $j++) { 
                    for ($k=0; $k < 10; $k++) { 
                        for ($l=0; $l < 10; $l++) { 
                            $try = "".$i.$j.$k.$l;
                            $tryhash = hash("md5", $try);
                            #echo "$hash - $tryhash    \n";
                            if ($_GET['hash'] == $tryhash){
                                $found = true;
                                $message = $try;

                                
                                
                                
                                break;

                            }
                        }
                        if ($found){
                            break;
                        }
                    }
                    if ($found){
                        break;
                    }
                }
                if ($found){
                    break;
                }
            }
            if ($message === false){
                $message = "Not Found.. Maybe the hash you entered is not of 4 digit PIN";
            }
        }
        else{
            $message = "Please enter valid hash of 32 characters";
        }
        $hash = $_GET['hash'];
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
        <h1>MD5 Hash Breaker</h1>
        <div class="description">
            This application breaks MD5 hash of any 4 digit number/pin using Brute force. Enter you hash in box below, and you'll see the result below.
        </div>
        <form>
            <label for="hash">Enter you hash :</label>
            <input type="text" name="hash" id="hash" value="<?= htmlentities($hash) ?>" size="35">
            <button type="submit">Submit</button>
        </form>
        <div class="description">
            
                Result: <?php if ($message !== false){
                    echo $message;
                }
                ?>
            
        </div>
    </div>
</body>

</html>