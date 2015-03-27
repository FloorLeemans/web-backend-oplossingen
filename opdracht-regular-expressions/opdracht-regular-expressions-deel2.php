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

    $replaceString  = '<span class="hash">#</span>';

    $regex1         = '/[a-d]|[A-D]|[u-z]|[U-Z]/';
    $inputString1   = "Memory can change the shape of a room; it can change the color of a car. And memories can be distorted. They're just an interpretation, they're not a record, and they're irrelevant if you have the facts.";
    $resultaat1     = preg_replace($regex1, $replaceString, $inputString1);

    $regex2         = '/colo(u)?r/';
    $inputString2   = "Zowel colour als color zijn correct Engels";
    $resultaat2     = preg_replace($regex2, $replaceString, $inputString2);

    $regex3         = '/1\d{3}/';
    $inputString3   = "1020 1050 9784 1560 0231 1546 8745";
    $resultaat3     = preg_replace($regex3, $replaceString, $inputString3);

    $regex4         = '/(\d{1,2}\/?-?\.?\d{1,2}\/?-?\.?\d{4})/';
    $inputString4   = "24/07/1978 en 24-07-1978 en 24.07.1978";
    $resultaat4     = preg_replace($regex4, $replaceString, $inputString4);

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

        <form action="opdracht-regular-expressions-deel2.php" method="post">

            <label for="regex">Regular Expression</label>
            <input type="text" name="regex" id="regex" value="<?= $regex ?>">

            <label for="string">String</label>                            
            <textarea name="string" id="string" cols="30" rows="10"><?= $string ?></textarea>

            <input type="submit" name="submit" id="submit" value="check">

        </form>

        <?php if ($inputPost == true): ?>
                <p>Resultaat: <?= $resultaat ?></p>
        <?php endif ?>

        <table>
            <tr class="result">
                <td class="bold">RegEx</td>
                <td class="bold">String</td>
            </tr>
            <tr>
                <td>a-d &#38; u-z</td>
                <td><?= $inputString1 ?></td>
            </tr>
            <tr class="result">
                <td>/[a-d]|[A-D]|[u-z]|[U-Z]/</td>
                <td><?= $resultaat1 ?></td>
            </tr>
            <tr>
                <td>colour &#38; color</td>
                <td><?= $inputString2 ?></td>
            </tr>
            <tr class="result">
                <td>/colo(u)?r/</td>
                <td><?= $resultaat2 ?></td>
            </tr>
            <tr>
                <td>1 als duizendtal</td>
                <td><?= $inputString3 ?></td>
            </tr>
            <tr class="result">
                <td>/1\d{3}/</td>
                <td><?= $resultaat3 ?></td>
            </tr>
            <tr>
                <td>enkel 'en' overblijven</td>
                <td><?= $inputString4 ?></td>
            </tr>
            <tr>
                <td>/(\d{1,2}\/?-?.\d{1,2}\/?-?.\d{4})/</td>
                <td><?= $resultaat4 ?></td>
            </tr>
        </table>

    </body>
</html>