<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nieuw product invoeren</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="verwerk-nieuwe-product.php" method="post">
        <div class="form-group">
        <label for="categorieProduct">categorie product</label>
        <input type="text" name="categorieProduct" id="categorieProduct">
        </div>

        <div class="form-group">
        <label for="naamProduct">naam product</label>
        <input type="text" name="naamProduct" id="naamProduct">
        </div>

        <div class="form-group">
        <label for="prijsProduct">prijsProduct</label>
        <input type="text" name="prijsProduct" id="prijsProduct">
        </div>

        <div class="form-group">
        <label for="merkProduct">merkProduct</label>
        <input type="text" name="merkProduct" id="merkProduct">
        </div>
        <button type="sumbit">maak nieuwe product</button>

    </form>
</body>
</html>