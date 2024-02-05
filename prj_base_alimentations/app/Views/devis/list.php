<?php include 'menu.php'; ?>
<h2>Liste des Devis</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nom du Client</th>
        <th>Date Créée</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($devis as $devis_item): ?>
    <tr>
        <td><?= $devis_item['id'] ?></td>
        <td><?= $devis_item['client_name'] ?></td>
        <td><?= $devis_item['date_created'] ?></td>
        <td>
            <a href="/devis/view/<?= $devis_item['id'] ?>">Voir</a> |
            <a href="/devis/edit/<?= $devis_item['id'] ?>">Modifier</a> |
            <a href="/devis/delete/<?= $devis_item['id'] ?>">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

