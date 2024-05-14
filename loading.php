<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading | @jpmoncao</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/changeLoaderProps.js" defer></script>
</head>

<body>
    <section class="form__container">
        <article class="form__labels">
            <p><strong>Duração:</strong> <span id="duration-label">6</span> segundos</p>
            <p><strong>Cor:</strong> <span id="color-label">#000000</span></p>
        </article>
        <article class="form__fields">
            <input type="range" name="duration" id="duration" max="20" min="1" value="6" step="1" onchange="changeLoaderProps()">
            <input type="color" name="color" id="color" value="#000000" onchange="changeLoaderProps()">
        </article>
    </section>
    <div class="triangle">
        <div class="line line-1"></div>
        <div class="line line-2"></div>
        <div class="line line-3"></div>
    </div>
</body>

</html>