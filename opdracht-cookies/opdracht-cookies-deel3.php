<?php

$input      =   explode(',', file_get_contents('gegevens.txt'));
$message    =   '';
$klopt      =   false;


if (isset( $_POST['submit'])) 
    {
        
        if ($_POST['username'] == $input[0] &&
            $_POST['paswoord'] == $input[1]) 
        {
            if (isset($_POST['remember']))
            {
                $tijd   =   time() + 60*60*24*30;
            }
            else
            {
                $tijd   =   0;
            }
            setcookie('klopt', true, $tijd);
            header('location: ' . $_SERVER['PHP_SELF']);
        } 
        else 
        {
            $message = 'Gebruikersnaam en/of paswoord niet correct. Probeer opnieuw.';
        }
    }

if (isset($_COOKIE['klopt']))
{
    $klopt  =   true;
}

if (isset($_GET['cookie'])) 
    {    
        if ($_GET['cookie'] == 'delete') 
        {
            setcookie('klopt',false, time() - 1);
            header('location: ' . $_SERVER['PHP_SELF']);
        }
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht-cookies - deel 3</title>
        <style>
        	body{
        		font-family: sans-serif;
        		color: #454545;
        	}

        	h1{
        		font-size:32px;
        		border-bottom: solid 1px lightgrey;
        	}

        	.message{
        		color: #b94a48;
                background-color: #f2dede;
                border: 1px solid #eed3d7;
                border-radius: 5px;
                margin:5px 0px;
                padding:5px;
        	}

        	.label{
        		margin-bottom: 0px;
        	}

        	.text{
        		margin-top: 2px;
        	}

            a{
                color: #454545;
            }

            a:visited{
                color: #454545;
            }

        </style>
    </head>
    <body>
    	<?php if ($klopt): ?>
            <h1>Dashboard</h1>
                <p>Hallo <?= ucfirst($input[0]) ?>, fijn dat je er weer bij bent!</p>
                <!-- Eigenlijk moet je de username opzoeken met SESSION uit de POST-gegevens, want nu zeg je eigenlijk hetzelfde als letterlijk 'Jan', zie het juiste in klassikale oplossing-->
                <p><a href="?cookie=delete">Uitloggen</a></p>
        <?php else: ?>
            <h1>Inloggen</h1>
                <?php if ($message): ?>
                    <p class="message"><?= $message ?></p>
                <?php endif ?>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                	<p class="label"><label for="username">Username</label></p>
                	<p class="text"><input type="text" name="username" id="username"></p>
                	<p class="label"><label for="paswoord">Paswoord</label></p>
                	<p class="text"><input type="password" name="paswoord" id="paswoord"></p>
                    <p class="check"><input type="checkbox" name="remember" id="remember">
                    <label for="remember">Mij onthouden</label></p>
                	<p><input type="submit" value="Verzenden" name="submit"></p>
                </form>
        <?php endif ?>
    </body>
</html>