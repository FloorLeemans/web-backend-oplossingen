<?php

// Sessie starten
session_start();

define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] );

// De ToDo- en Done-array aanmaken
$takenToDo  =   array();
$takenDone  =   array();

// ToDo- en Done lijst standaard op leeg zetten
$leegToDo       =   true;
$leegDone       =   true;
$leegTaken      =   true;
$errorMessage   =   false;

    // Als er gesubmit is, maar er is geen ToDo ingevuld, wordt de errorMessage op true gezet
    if (isset($_POST['submit']) && $_POST['taak'] == '') 
    {
        $errorMessage   =   true;
    }

    // Als de POST-variabele submit geset is, dan wordt de waarde van POST (name='taak') toegevoegd aan de session takenToDo-array
    if (isset($_POST['submit']) && $_POST['taak'] !== '')
    {
        $_SESSION['takenToDo'][] = $_POST['taak'];
    }

    // Als de session takenToDo-array geset is, dan krijgt de array 'takenToDo' dezelfde elementen
    if (isset($_SESSION['takenToDo']))
    {
        $takenToDo = $_SESSION['takenToDo'];
    }

    // Als de POST-variabele 'taakGedaan' geset is, dan wordt de waarde van POST (name='taakGedaan') toegevoegd aan de session takenDone-array
    if (isset($_POST['taakGedaan']))
    {
        $_SESSION['takenDone'][] = $_POST['taakGedaan'];
        $takenDone = $_SESSION['takenDone'];
        // En die waarde ($_POST ['taakGedaan']) wordt verwijderd uit de takenToDo-array
        $indexRemove = array_search($_POST['taakGedaan'],$_SESSION['takenToDo']);
            if($indexRemove !== FALSE)
            {
            unset($_SESSION['takenToDo'][$indexRemove]);
            unset($takenToDo[$indexRemove]);
            }
    }

    // Als de session takenDone-array geset is, dan krijgt de array 'takenDone' dezelfde elementen
    if (isset($_SESSION['takenDone']))
    {
        $takenDone = $_SESSION['takenDone'];
    }

    // Als de POST-variabele 'taakOpnieuw' geset is, dan wordt de waarde van POST (name='taakOpnieuw') toegevoegd aan de session takenToDo-array
    if (isset($_POST['taakOpnieuw']))
    {
        $_SESSION['takenToDo'][] = $_POST['taakOpnieuw'];
        $takenToDo = $_SESSION['takenToDo'];
        // En die waarde ($_POST ['taakOpnieuw']) wordt verwijderd uit de takenDone-array
        $indexRemove = array_search($_POST['taakOpnieuw'],$_SESSION['takenDone']);
            if($indexRemove !== FALSE)
            {
            unset($_SESSION['takenDone'][$indexRemove]);
            unset($takenDone[$indexRemove]);
            }
    }

    // Als de POST-variabele 'deleteToDo' geset is, dan wordt de POST-variabele 'taakGedaan' uit de array verwijderd
    if (isset($_POST['deleteToDo']))
    {
        $indexDelete = array_search($_POST['deleteToDo'],$_SESSION['takenToDo']);
            if($indexDelete !== FALSE)
            {
            unset($_SESSION['takenToDo'][$indexDelete]);
            unset($takenToDo[$indexDelete]);
            }
    }

    // Als de POST-variabele 'deleteDone' geset is, dan wordt de POST-variabele 'taakOpnieuw' uit de array verwijderd
    if (isset($_POST['deleteDone']))
    {
        $indexDelete = array_search($_POST['deleteDone'],$_SESSION['takenDone']);
            if($indexDelete !== FALSE)
            {
            unset($_SESSION['takenDone'][$indexDelete]);
            unset($takenDone[$indexDelete]);
            }
    }

    // Als er iets in de array 'takenToDo' zit, is de ToDo-lijst niet leeg
    if ((count($takenToDo)) > 0)
    {
        $leegToDo = false;
    }

    // Als er iets in de array 'takenDone' zit, is de ToDo-lijst niet leeg
    if ((count($takenDone)) > 0)
    {
        $leegDone = false;
    }

    if (count($takenToDo) > 0 || count($takenDone) > 0) 
    {
        $leegTaken = false;
    }

    // Sessie verwijderen
    if (isset($_GET['session']))
    {
        if($_GET['session'] === 'destroy')
        {
            session_destroy();
            header('Location: index.php'); // Refresh pagina
        }
    }

//var_dump($_SESSION);
//var_dump($takenToDo);
//var_dump($takenDone);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ToDo App</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="container">

            <?php if ($errorMessage == true): ?>
                <p class="errormessage">Ahh, damn. Lege todos zijn niet toegestaan...</p>
            <?php endif ?>

            <h1 class="titel">Todo app</h1>
                
                <?php if ($leegTaken == true): ?>
                    <p>Je hebt nog geen TODO's toegevoegd. Zo weinig werk of meesterplanner?</p>
                <?php endif ?>
                
                <?php if ($leegTaken == false): ?>

                	<h2>Nog te doen</h2>

                        <?php if ($leegToDo == true): ?>
                            <p>Schouderklopje, alles is gedaan!</p>
                        <?php endif ?>
                        
                    	<form method="POST" action="<?=BASE_URL?>">
                            <ul>
                    		  <?php foreach ($takenToDo as $taak): ?>
                                    <li>
                                        <button title="Status wijzigen" name="taakGedaan" value="<?=$taak?>">
                                            <div class="noCheck"></div>
                                            <p><?=$taak?></p>
                                        </button>

                                        <button title="Verwijderen" name="deleteToDo" value="<?=$taak?>" class="delete">
                                            <div class="deleteButton"></div>
                                            <p>Verwijder</p>
                                        </button>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                    	</form>

                	<h2>Done and done</h2>

                        <?php if ($leegDone == true): ?>
                            <p>Werk aan de winkel...</p>
                        <?php endif ?>
                        
                <?php endif ?>

                    <?php if (count($takenDone) > 0): ?>
                    
                    	<form method="POST" action="<?=BASE_URL?>">
                            <ul>
                                <?php foreach ($takenDone as $taak): ?>
                                    <li>
                                        <button title="Status wijzigen" name="taakOpnieuw" value="<?=$taak?>" class="DoneButton">
                                            <div class="check"></div>
                                            <p><?=$taak?></p>
                                        </button>

                                        <button title="Verwijderen" name="deleteDone" value="<?=$taak?>" class="delete">
                                            <div class="deleteButton"></div>
                                            <p>Verwijder</p>
                                        </button>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                    	</form>

                    <?php endif ?>

            <h1 class="middleTitle">Todo toevoegen</h1>

                <form method="POST" action="<?=BASE_URL?>">
                	<label for="taak" class="labelToDo">To do:</label>
                	<input type="text" id="taak" name="taak" autofocus>

                	<input type="submit" value="Toevoegen" name="submit" class="toevoegen">

                </form>
            
                <a href="<?=BASE_URL?>?session=destroy">
                <div class="wis">Wis alles</div>
                </a>

                <p class="copy">&copy; Floor Leemans</p>
            
        </div>
    </body>
</html>