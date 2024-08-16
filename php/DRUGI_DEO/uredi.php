<?php
    session_start();

    if(!isset($_SESSION['username']))
        header("Location: login.php");
    
    require("db.php");

    if(!isset($_POST['od']) && !isset($_POST['do']) && !isset($_POST['status'])){
        header("Location: index.php");
    }

    if(empty($_POST['od']) && empty($_POST['do']) && empty($_POST['status'])){
        header("Location: index.php");
    }

    $stmt = $pdo->prepare("DELETE FROM prijavas WHERE status = ? AND termin BETWEEN ? AND ?");
    $stmt->execute([$_POST['status'], $_POST['od'], $_POST['do']]);

    $result = $stmt->rowCount();

    header("Location: index.php?message=Uspesno obrisano ".$result." prijava.");
?>