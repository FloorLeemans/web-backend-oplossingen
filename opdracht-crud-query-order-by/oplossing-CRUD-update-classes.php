<?php
    
    include_once( 'Database.php' );

    session_start();

    define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

    $db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root'); // Connectie maken

    $dbInstanceTemp =   new Database( $db );

    $deleteConfirm      =   false;
    $deleteBrouwerId    =   false;
    $editFormBrouwerId  =   false;

    $message    =   false;

    $orderColomn    =   'biernr';
    $way            =   'ASC';

    if (isset($_GET['order'])) 
    {
        $orderColomn    =   $_GET['order'];
    }

    if (isset($_GET['way'])) {
        $way    =   $_GET['way'];
    }

    $order  =   ' ORDER BY ' . $orderColomn . ' ' . $way;

    if ( isset($_POST[ 'deleteConfirm' ] ) )
    {
        $deleteBrouwerId    =   $_POST['deleteConfirm'];
        $deleteConfirm      =   true;
    }

    if ( isset( $_POST[ 'delete' ] ) )
    {
        $deleteBrouwerId    =   $_POST['delete'];

        $deleteQueryString    =   'DELETE FROM bieren
                                    WHERE biernr = :biernr
                                    LIMIT 1';

        $deleteQueryPlaceholders = array( ':biernr'=> $deleteBrouwerId );

        $dbInstanceTemp->query( $deleteQueryString, $deleteQueryPlaceholders );
    }

    if ( isset( $_POST[ 'editForm' ] )  )
    {
        $editFormBrouwerId  =   $_POST[ 'editForm' ];

        $editFormBrouwerString   =   'SELECT bieren.biernr, bieren.naam, brouwers.brnaam, soorten.soort, bieren.alcohol
                                        FROM bieren
                                        INNER JOIN brouwers
                                            ON bieren.brouwernr = brouwers.brouwernr
                                        INNER JOIN soorten
                                            ON bieren.soortnr = soorten.soortnr
                                        WHERE bieren.biernr = :biernr';

        $editFormBrouwerPlaceholders    =   array( ':biernr' => $editFormBrouwerId  );

        $editFormBrouwerResultaat =    $dbInstanceTemp->query( $editFormBrouwerString, 
                                                                $editFormBrouwerPlaceholders);

        $editFormBrouwerResultaat   =   $editFormBrouwerResultaat[0];

        // Haal de ID-key uit de array zodat deze kan geloopt worden in de HTML zonder dat het ID editbaar is
        array_shift( $editFormBrouwerResultaat );
    }

    if ( isset( $_POST[ 'edit' ] ) )
    {
        $editBrouwerId  =   $_POST[ 'biernr' ];

        $editBrouwerString  =   'UPDATE bieren
                                    SET naam = :naam,
                                        alcohol = :alcohol
                                    WHERE biernr = :biernr
                                UPDATE brouwers
                                    SET brnaam = :brnaam
                                    WHERE biernr = :biernr
                                UPDATE soorten
                                    SET soort = :soort
                                    WHERE biernr = :biernr';

        $editBrouwerPlaceholders = array( 
                                    ':naam' => $_POST[ 'naam' ],
                                    ':brnaam' => $_POST[ 'brnaam' ],
                                    ':soort' => $_POST[ 'soort' ],
                                    ':alcohol' => $_POST[ 'alcohol' ],
                                    ':biernr' => $editBrouwerId 
                                );

        $dbInstanceTemp->query( $editBrouwerString, $editBrouwerPlaceholders );

        $_SESSION['message']['type'] = 'success';
        $_SESSION['message']['text'] = 'De brouwer ' . $_POST[ 'naam' ] . ' met id ' . $_POST[ 'biernr' ] . ' is succesvol aangepast';
    }

    // Query string
    $queryString    =   'SELECT bieren.biernr, bieren.naam, brouwers.brnaam, soorten.soort, bieren.alcohol
                            FROM bieren
                            INNER JOIN brouwers
                                ON bieren.brouwernr = brouwers.brouwernr
                            INNER JOIN soorten
                                ON bieren.soortnr = soorten.soortnr'
                            . $order;

    $resultaten = $dbInstanceTemp->query( $queryString );

    $kolomnamen = array_keys( $resultaten[0] );

    
    if ( isset( $_SESSION[ 'message' ] ) )
    {
        $message = $_SESSION[ 'message' ];
        unset( $_SESSION[ 'message' ] );
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oplossing CRUD - query order by</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>

    <?php if ( $message ): ?>
        <div class="modal <?= $message['type'] ?>">
            <?= $message['text'] ?>
        </div>
    <?php endif ?>

        <?php if ( $deleteConfirm ): ?>
            <div class="modal warning">
                
                <p>Bent u zeker dat u deze brouwer met id <?= $deleteBrouwerId ?> wilt verwijderen?</p>
                
                <form action="<?= BASE_URL ?>" method="POST">
                    
                    <button>Ongedaan maken</button>
                    <button name="delete" value="<?= $deleteBrouwerId ?>">Verwijder</button>

                </form>
            </div>
        <?php endif ?>

        <?php if ( $editFormBrouwerId ): ?>

            <form action="<?= BASE_URL ?>" method="POST">

                <ul>
                    
                    <?php foreach ($editFormBrouwerResultaat as $kolomnaam => $value): ?>
                        
                        <li>
                            <label for="<?= $kolomnaam ?>"><?= $kolomnaam ?></label>
                            <input type="text" value="<?= $value ?>" name="<?= $kolomnaam ?>" id="<?= $kolomnaam ?>">
                        </li>

                    <?php endforeach ?>

                </ul>

                <input type="hidden" name="biernr" value="<?= $editFormBrouwerId ?>">

                <input type="submit" name="edit">
            </form>
            
        <?php endif ?>

        <form action="<?= BASE_URL ?>" method="POST">

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <?php foreach ($kolomnamen as $key => $kolomnaam): ?>
                            <th><a href="<?= BASE_URL ?>?order=<?= $kolomnaam ?>&way=<?= ($way == 'ASC')? 'DESC' : 'ASC'; ?>"><?= $kolomnaam ?> <div class="icoon <?= ($way == 'DESC' && ($kolomnaam == $orderColomn))? 'ascending' : 'descending' ?>"></div></a></th>
                        <?php endforeach ?>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($resultaten as $nummer => $resultaat): ?>
                        <tr class="<?= ( ($nummer+1) % 2 !== 0 ) ? 'odd' : '' ?> <?= ( $deleteConfirm !== false && $deleteBrouwerId === $resultaat['biernr'] ) ? 'deleteHighlight' :'' ?>  ">
                            <td><?= ( $nummer + 1 ) ?></td>
                            <?php foreach ($resultaat as $kolomValue): ?>
                                <td><?= $kolomValue ?></td>
                            <?php endforeach ?>
                            <td><button class="input-icon-button delete" name="deleteConfirm" value="<?= $resultaat['biernr'] ?>"></button></td>
                            <td><button class="input-icon-button edit" name="editForm" value="<?= $resultaat['biernr'] ?>"></button></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </form>
    </body>
</html>