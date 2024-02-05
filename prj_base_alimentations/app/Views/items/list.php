<?php include 'menu.php'; ?>

<h2>Liste des Items</h2>

<table>
    <tr>
        <th>Description</th>
        <th>Prix</th>
        <th>Actions</th>
    </tr>
    <?php 
    echo "<pre>";
    var_dump($items);
    echo "</pre>"; 
    ?>
    <?php foreach ($items as $item): ?>
    <tr>
        <td><?= $item['description'] ?></td>
        <td><?= $item['price'] ?></td>
        <td>
            <a href="/items/edit/<?= $item['id'] ?>">Modifier</a> |
            <a href="/items/delete/<?= $item['id'] ?>">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
