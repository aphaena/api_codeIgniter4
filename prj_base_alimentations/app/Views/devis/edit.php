<h2>Modifier le Devis</h2>

<form action="/devis/update/<?= $devis['id'] ?>" method="post">
    <label for="client_name">Nom du Client</label>
    <input type="text" name="client_name" id="client_name" value="<?= $devis['client_name'] ?>" required>

    <!-- Ajouter d'autres champs si nécessaire -->

    <input type="submit" value="Mettre à jour">
</form>
