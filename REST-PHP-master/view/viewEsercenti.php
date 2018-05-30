<?php

function visualizza($r){
    ?>

    <?php $nomesito = "Lista esercenti"; require __DIR__ . '/../view/header.php'; ?>
    <body>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin-left:auto;
            margin-right:auto;
        }

        td, th {
            border: 1px solid #848484;
            text-align: left;
            padding: 8px;
        }

        th{
            background-color: rgb(63, 81, 181);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        h1{
            text-align: center;
        }
    </style>
    <h1>Lista Esercenti</h1>

    <table>
        <tr><th>nome</th><th>e-mail</th></tr>
    <?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo "<tr><td>".$row["nome"]."</td><td>".$row["email"]."</td></tr>";
    }?>
    </table>

    </body>
    </html>
<?php  }?>