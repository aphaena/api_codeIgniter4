<?php include 'menu.php'; ?>

<h2>Modifier l'Item</h2>

<form action="/items/update/<?= $item['id'] ?>" method="post">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="<?= $item['description'] ?>" required>

    <label for="price">Prix</label>
    <input type="text" name="price" id="price" value="<?= $item['price'] ?>" required>

    <input type="submit" value="Mettre à jour">
</form>
