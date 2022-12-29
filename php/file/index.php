<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File handling</title>
</head>
<body>
    <?php
    // echo readfile("notes.txt");

    // $myfile = fopen("notes.txt", "r") or die("Unable to open file!");
    // echo fread($myfile,filesize("notes.txt"));
    // fclose($myfile);

    // $myfile = fopen("notes2.txt", "w");
    // fclose($myfile);

    $myfile = fopen("notes1.txt", "w") or die("Unable to open file!");
    $txt = "Ram\n";
    fwrite($myfile, $txt);
    $txt = "Chandra\n";
    fwrite($myfile, $txt);
    echo readfile("notes1.txt");
    fclose($myfile);

    
    ?>
</body>
</html>