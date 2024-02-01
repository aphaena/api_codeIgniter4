<?php include 'menu.php'; ?>

<h2>Créer un Nouvel Item</h2>

<form action="/items/store" method="post">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" required>

    <label for="price">Prix</label>
    <input type="text" name="price" id="price" required>

    <input type="submit" value="Créer">
</form>
