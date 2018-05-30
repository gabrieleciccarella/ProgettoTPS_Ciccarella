<?php
    function visualizzaEsercenti($r){?>
    <?php $nomesito = "Lista Esercenti"; require __DIR__ . '/parcials/header.php'; ?>
    <style>
        table {
            width:80%;
            margin-left: auto;
            margin-right: auto;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        table tr:nth-child(even) {
            background-color: #eee;
        }
        table tr:nth-child(odd) {
            background-color: #aba;
        }
        table th {
            background-color: rgb(63, 81, 181);
            color: white;
        }
    </style>
    <body>
    <h1 style="text-align: center">ESERCENTI</h1>

    <table>
        <tr><th>ID</th><th>NOME</th><th>E-MAIL</th></tr>
        <?php while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
            echo "<tr><td>" . $row['id_amministratore'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['email'] . "</td></tr>";
        }?>
    </table>
    </body>
    </html>
<?php  }?>
