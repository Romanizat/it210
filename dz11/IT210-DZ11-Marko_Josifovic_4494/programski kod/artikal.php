<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikal - Marko Josifović 4494</title>
</head>
<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=it210_domaci11_markoj4494", "root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    $sql="SELECT * FROM korisnik";
    $query = $con->query($sql);
    $results = array();
    while ($results[] = $query->fetch());
    array_pop($results);
?>
<body style="text-align: center; margin-top: 20%;">
    <h1>Unos za artikal</h1>
    <form action="artikalUnos.php" method="POST">
        <label for="ime">Naziv:</label>&emsp;&emsp;&emsp;
        <input type="text" name="naziv" required>
        <br><br>
        <label for="cena">Cena:</label>&emsp;&emsp;
        <input type="number" name="cena" step="0.01" required>
        <br><br>
        <label for="username">Korisnik:</label>&emsp;
        <select name="username">
        <?php foreach ( $results as $option ) { ?>
                <option value="<?php echo $option["username"]; ?>">
                    <?php echo $option["username"]; ?>
                </option>
            <?php } ?>
        </select>

        <br><br>
        <input type="submit" value="Unesi podatke">
    </form>

    <br><a href="index.html">Povratak na početnu</a> &emsp;&emsp; 
    <a href="artikalPrikaz.php">Prikaži sve artikle</a> &emsp;&emsp; 
    
    <h3>Marko Josifović 4494</h3>
</body>
</html>