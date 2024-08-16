<?php
    session_start();

    if(!isset($_SESSION['username']))
        header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredjivanje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <main class="p-3">
        <h1>Brisanje prijava</h1>
        <form action="uredi.php" method="POST" class="border p-3 rounded">
            <div class="mb-3">
                <label for="input-od" class="form-label">Datum od</label>
                <input type="date" class="form-control" id="input-od" name="od">
            </div>
            <div class="mb-3">
                <label for="input-do" class="form-label">Datum do</label>
                <input type="date" class="form-control" id="input-do" name="do">
            </div>
            <div class="mb-3">
                <label for="input-status" class="form-label">Status</label>
                <select id="input-status" class="form-select" name="status">
                    <option value="-1">Kreirana</option>
                    <option value="0">Odbijena</option>
                    <option value="1">Zakazana</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Obrisi</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>