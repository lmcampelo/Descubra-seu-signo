<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra seu Signo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="text-center border p-4 rounded">
            <h1 class="mb-4">Descubra seu signo:</h1>
            <form action="show_zodiac_sign.php" method="post" class="form-signo">
                <div class="form-group">
                    <label for="data_nascimento">Data de nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="form-control text-center" placeholder="Ex.: 21/05/1992" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Descobrir</button>
            </form>
        </div>
    </div>
</body>
</html>
