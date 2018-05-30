<?php

function getConnection() {
    $db = require __DIR__ . ('/../database/db.php');
    return $db;
}

function getEsercenti() {
    $db = getConnection();
    $q = "SELECT id_amministratore, nome, email FROM amministratore";
    $r = @mysqli_query($db, $q);
    return $r;
}

function getDatiDashboard() {
    $db = getConnection();
    $q = "SELECT q.id_questionario, q.id_amministratore, a.nome as admin, 
            q.punti, q.tempo_min, q.tempo_max FROM amministratore a, questionario q
              WHERE a.id_amministratore = q.id_amministratore";
    $q2 = "SELECT id_amministratore, nome FROM amministratore";
    $r = @mysqli_query($db, $q);
    $r2 = @mysqli_query($db, $q2);
    $array = array($r, $r2);
    return $array;
}

function postAddEsercente() {
    $db = getConnection();
    $jsonObject = json_decode($_POST['esercente']);

    $email = $jsonObject->{'email'};
    $password = $jsonObject->{'password'};
    $nome = $jsonObject->{'nome'};
    $percorsoLogo = $jsonObject->{'percorso_logo'};

    $q = "INSERT INTO `amministratore` (email, password, nome, percorso_logo) values ('$email', '$password', '$nome', '$percorsoLogo')";
    $r = @mysqli_query($db, $q);
    return $r;
}

?>