<?php 

function check($computer, $human) {
    // echo $computer, $human, "\n";
    // For now this is a rock-savant checking function
    // TODO: Fix this
    if ( $human == $computer ) {
        return "Tie";
    } else if ( ($human == 0 && $computer == 2) || ($human == 1 && $computer == 0) || ($human == 2 && $computer == 1) ) {
        return "You Win";
    } else if ( ($human == 2 && $computer == 0) || ($human == 0 && $computer == 1) || ($human == 1 && $computer == 2) ) {
        return "You Lose";
    }
    return false;
}
    $message = "";
    $arr = array("Rock", "Paper", "Scissor");
    if (isset($_GET['human'])){
        $human = $_GET['human']+0;

        if ($human != 3){
            if ($human == -1){
                $message = "Please Select one option and then submit";
            }
            else{
                $computer = rand(0, 2);
                $message = "Result:<strong>".check($computer, $human)."</strong> Human:$arr[$human] Computer:$arr[$computer]";
            // echo $message;
            }
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
        <h1>Rock Paper Scissor Game</h1>
        <div class="description">
            Select the option, and click submit. Select test to test all options.
        </div>
        <form>
            <select name="human" id="human">
                <option value="-1">--Select Option--</option>
                <option value="0">Rock</option>
                <option value="1">Paper</option>
                <option value="2">Scissor</option>
                <option value="3">Test</option>
            </select>
            <button type="submit">Submit</button>
        </form>
        <div class="description">
            <pre>
                <?php 
                    if ($message != ""){
                        echo $message;
                    }
                    else if(isset($human)){
                        echo "\n";
                        for ($i=0; $i < 3; $i++) { 
                            for ($j=0; $j < 3; $j++) { 
                                echo "Result:<strong>".check($i, $j)." </strong>Human:$arr[$i] Computer:$arr[$j]\n";
                            }
                        }
                    }
                ?>
            </pre>
        </div>
    </div>
</body>

</html>