<html>

    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body class="bgSpalva">

    <div class="navbar navbar-inverse navbar-fixed-bottom navbar-inner container-fluid"></div>
    <div class="navbar navbar-inverse navbar-fixed-top navbar-inner container-fluid"></div>

    <form class="text-center aukstis">
            <table class = "table">
            <thead>
                <tr class="active">
                    <th>Vardas</th>
                    <th>Pavarde</th>
                    <th>Slaptazodis</th>
                    <th>Gimimo metai</th>
                    <th>Lytis</th>
                    <th>Telefonas</th>
                    <th>El. pastas</th>
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
            </tbody>
            </table>
            </form>
    </body>
</html>