<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht-cookies - deel 1</title>
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
            <h1>Deel 1: registratiegegevens</h1>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                	<p class="label"><label for="e-mail">E-mail</label></p>
                	<p class="text"><input type="text" name="e-mail" id="e-mail"></p>
                	<p class="label"><label for="nickname">Nickname</label></p>
                	<p class="text"><input type="text" name="nickname" id="nickname"></p>
                	<p><input type="submit" value="Volgende" name="submit"></p>
                </form>
    </body>
</html>