<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <link rel = "icon" href ="./img/icon.png" type = "image/x-icon">
    <meta name="description" content="Una app para saber tu horóscopo">
    <meta name="keywords" content="HTML, CSS, php">
    <meta name="author" content="Oliver Artiles Ortega">
    <title>Horóscopo</title>
</head>
<body>
    <h1>Conoce tu futuro</h1>
    <form action="index.php" method="POST">
        <div class="campos">
            <div>
                <h2>Mes:</h2>
                <?=$mesesFuncion?>
            </div>
            <div>
                <h2>Día:</h2>
                <input type="number" min="1" max="31" name="dia" value="<?=$dia?>">
            </div>
        </div>
        <button type="submit" name="calculo">Calcular</button>
        <button type="submit" name="todo">Mostrar todos</button>
    </form>

    <section class="resultado">
        <?=$resultado?>
    </section>

</body>
</html>