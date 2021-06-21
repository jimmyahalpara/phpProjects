<?php 

    
    $message = "";
    $fileUpload = 0;
    if (isset($_FILES['fileToUpload'])){
        $fileUpload = 1;
    }


    // limiting the size of file 
    // if ($_FILES['fileToUpload']['size'] > 20000000){
    //     $fileUpload = 0;
    //     $message = "\nFile Too Big, maximum file limit is 20MB";
    // }


    if ($fileUpload == 1){
        $message = "\nUploaded Sucessfully\n";

        foreach (hash_algos() as $key => $value) {
            $message = $message . "\n $value - " . hash($value, $_FILES['fileToUpload']['tmp_name']);
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
        <h1>File Hash Calculator</h1>
        <div class="description">
        Upload your file and view its hash for md2, md4, md5, sha1, sha224, sha256, sha384, sha512/224, sha512/256, sha512, sha3-224, sha3-256, sha3-384, sha3-512, ripemd128, ripemd160, ripemd256, ripemd320, whirlpool, tiger128,3, tiger160,3, tiger192,3, tiger128,4,
            tiger160,4, tiger192,4, snefru, snefru256, gost, gost-crypto, adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat, haval128,3, haval160,3, haval192,3, haval224,3, haval256,3, haval128,4, haval160,4, haval192,4, haval224,4, haval256,4,
            haval128,5, haval160,5, haval192,5, haval224,5, haval256,5,
        </div>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>
        <div class="preContainer">
            <pre>
                <?= $message ?>
            </pre>
        </div>

    </div>
</body>

</html>