<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Jautā man!</h1>
    <form action="" method="post">
    <label for="name">Tavs vārds:</label>
    <input type="text" id="name" name="name">
    <label for="email">Tavs epasts:</label>
    <input type="email" name="epasts" id="email">
    <label for="">message</label>
    <select name="choices" id="message">
        <option value="">--izvēlies no dotajiem--</option>
        <option value="Atsauksme"></option>
        <option value="Ieteikums"></option>
        <option value="Jautājums"></option>
    </select>
    <fieldset>
    <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>

    <div>
        <input type="checkbox" id="yes" name="yes" checked />
        <label for="yes">Jā</label>
    </div>
    <legend>Vai piekrīti mūsu mājaslapas lietošanas noteikumiem?</legend>
    <div>
        <input type="checkbox" id="ja" name="ja" />
        <label for="ja">Jā</label>
    </div>
    </fieldset>
    <input type="button" value="Iesniegt!">
    </form>
    <ul>
        <li><a href="index.php">index</a></li>
        <li><a href="portfolio">portfolio</a></li>
    </ul>
</body>
</html>