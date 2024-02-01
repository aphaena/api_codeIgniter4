<h2>Composer un Devis</h2>

<form action="/devis/save" method="post">
    <label for="client_name">Sélectionner un Client:</label>
    <select name="client_name" id="client_name">
        <?php foreach ($clients as $client): ?>
            <option value="<?= $client['client_name'] ?>"><?= $client['client_name'] ?></option>
        <?php endforeach; ?>
    </select>

    <h3>Ajouter des Items au Devis</h3>
    <?php foreach ($items as $item): ?>
        <div>
            <label><?= $item['description'] ?></label>
            <input type="checkbox" name="items[]" value="<?= $item['id'] ?>">
            <label for="quantity">Quantité:</label>
            <input type="number" name="quantities[<?= $item['id'] ?>]" min="1" value="1">
        </div>
    <?php endforeach; ?>

    <input type="submit" value="Créer le Devis">
</form>
