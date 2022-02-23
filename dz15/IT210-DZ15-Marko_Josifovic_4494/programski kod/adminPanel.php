<?php
require_once("connect.php");
session_start();
$admin = $_SESSION['admin'];
if (empty($_SESSION['username'])) {
    header('Location: index.php');
}
if ($admin != 1) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>

<?php
    $sql = "SELECT * FROM pesma";
    $query = $con->query($sql);
    $results = array();
    while ($results[] = $query->fetch());
    array_pop($results);

    $sql2 = "select s.id_sample, p1.naslov AS 'prva',p2.naslov AS 'druga' from sample s, pesma p1, pesma p2 where s.embed_kopija = p1.embed and s.embed_original=p2.embed";
    $query2 = $con->query($sql2);
    $results2 = array();
    while ($results2[] = $query2->fetch());
    array_pop($results2);
?>


<body>
    <h1 style="text-align: center;">IT210 - DZ15 - Marko Josifović 4494</h1>
    <h2 style="text-align: center;">Admin Panel</h2>
    <div class="float-container">
        <div class="float-left">
            <h2>Izaberite Sample za brisanje</h2>
            <form action="obrisiSampleAdmin.php" method="POST">
                <select name="id_sample" required>
                    <option value="">Izaberite Sample</option>
                    <?php foreach ($results2 as $option2) { ?>
                        <option value="<?php echo $option2["id_sample"]; ?>">
                            <?php echo $option2["prva"]." - ".$option2["druga"]; ?>
                        </option>
                    <?php } ?>
                </select>
                <br><br>                        
                <input type="submit" value="Obriši">
            </form>

        </div>
        <div class="float-right">
            <h2>Izaberite pesmu za brisanje</h2>
            <form action="obrisiPesmuAdmin.php" method="POST">
                <select name="id_pesma" required>
                    <option value="">Izaberite pesmu</option>
                    <?php foreach ($results as $option) { ?>
                        <option value="<?php echo $option["id_pesma"]; ?>">
                            <?php echo $option["naslov"]." - ".$option["autor"]; ?>
                        </option>
                    <?php } ?>
                </select>
                <br><br>                        
                <input type="submit" value="Obriši">
            </form>
        </div>
    </div>
    <br><br><br>
    <a class="center" href="index.php">Povratak na početnu</a>
</body>
</html>

<style>
    .float-container {
        display: flex;
        text-align: center;
    }

    .float-left {
        flex: 0 0 50%;
    }

    .float-right {
        flex: 1;
    }

    .center {
        text-align: center;
        position: absolute;
        left: 45%;
    }
</style>