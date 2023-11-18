<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/src/views/css/main.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h2>Онлайн Магазин</h2>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="/">главная</a>
                    </li>
                    <li>
                        <a href="/about">о нас</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <?php echo $content;?>
        </div>
    </main>
    <footer></footer>
</body>
</html>