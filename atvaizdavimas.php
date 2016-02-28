<html>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="js/bootstrap.min.js"></script>
    
    <head>
        <title>Prisiregistrave nariai</title>
    </head>
    <body>
        <form class="text-center aukstis">
            <div class="form-group col-lg-4 col-lg-offset-4">
            <table border="1">
                <caption>Prisiregistrave nariai</caption>
            <thead>
                <tr>
                    <td>Vardas</td>
                    <td>Pavarde</td>
                    <td>Slaptazodis</td>
                    <td>Gimimo metai</td>
                    <td>Lytis</td>
                    <td>Telefonas</td>
                    <td>El. pastas</td>
                </tr>
            </thead>
            <tbody>
            <?php
                    require_once("Funkcijos.php");
                    $duomenys = Gauti_Visus_Vartotojus();
                    while ($row = mysql_fetch_assoc($duomenys)) {
                        ?>
                        <tr>
                            <td><?php echo $row['Vardas']?></td>
                            <td><?php echo $row['Pavarde']?></td>
                            <td><?php echo $row['Slaptazodis']?></td>
                            <td><?php echo $row['Gimimo_diena']?></td>
                            <td><?php echo $row['Lytis']?></td>
                            <td><?php echo $row['Telefonas']?></td>
                            <td><?php echo $row['E_mail']?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </div>
            </tbody>
            </table>
            </form>
    </body>
</html>