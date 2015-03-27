<?php

    $inputPost  = false;
    $regex      = '';
    $string     = '';


    if (isset($_POST['submit'])) {

        $inputPost      = true;

        $regex          = $_POST['regex'];

        $string         = $_POST['string'];

        $query          = '/' . $regex . '/';

        $inputString    = $string;
        
        $replaceString  = '<span class="hash">#</span>';

        $resultaat      = preg_replace($query, $replaceString, $inputString);

    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RegEx Tester</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>RegEx tester</h1>

        <form action="opdracht-regular-expressions.php" method="post">

            <label for="regex">Regular Expression</label>
            <input type="text" name="regex" id="regex" value="<?= $regex ?>">

            <label for="string">String</label>                            
            <textarea name="string" id="string" cols="30" rows="10"><?= $string ?></textarea>

            <input type="submit" name="submit" id="submit" value="check">

        </form>

        <?php if ($inputPost == true): ?>
                <p>Resultaat: <?= $resultaat ?></p>
            <?php endif ?>

    </body>
</html>