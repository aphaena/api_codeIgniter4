<h2>Voir le Devis</h2>

<p>ID: <?= $devis['id'] ?></p>
<p>Nom du Client: <?= $devis['client_name'] ?></p>
<p>Date Créée: <?= $devis['date_created'] ?></p>

<h3>Items du Devis</h3>
<?php if (!empty($items)): ?>
    <ul>
        <?php foreach ($items as $item): ?>
            <li>
                Description: <?= $item['description']; ?>,
                Quantité: <?= $item['quantity']; ?>,
                Prix: <?= $item['price']; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun item trouvé pour ce devis.</p>
<?php endif; ?>

