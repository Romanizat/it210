<?php
require_once("connect.php");
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Pesmu</title>
</head>

<?php
    $sql = "SELECT * FROM pesma";
    $query = $con->query($sql);
    $results = array();
    while ($results[] = $query->fetch());
    array_pop($results);
?>

<body>
    <h1 style="text-align: center;">IT210 - DZ15 - Marko Josifović 4494</h1>
    <div style="text-align: center;">
        <br> <br>
        <form action="createSample.php" method="POST">
            <label for="naslov">Izaberite pesmu koja je sample-ovala:</label>
            <br><br>
            <select name="embed_kopija" required>
                <option value="">Izaberite pesmu</option>
                <?php foreach ($results as $option) { ?>
                    <option value="<?php echo $option["embed"]; ?>">
                        <?php echo $option["naslov"]."-".$option["autor"]; ?>
                    </option>
                <?php } ?>
            </select>
            <br><br>

            <label for="autor">Izaberite originalnu pesmu:</label>
            <br><br>
            <select name="embed_original" required>
                <option value="">Izaberite pesmu</option>
                <?php foreach ($results as $option) { ?>
                    <option value="<?php echo $option["embed"]; ?>">
                        <?php echo $option["naslov"]."-".$option["autor"]; ?>
                    </option>
                <?php } ?>
            </select>
            <br><br>

            <input type="submit" value="Submit">
            <br><br>
        </form>
        <br>
        <br>
        <a href="index.php">Povratak na početnu</a>
        <br><br>
    </div>
</body>

</html>