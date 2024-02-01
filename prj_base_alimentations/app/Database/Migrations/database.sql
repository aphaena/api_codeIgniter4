-- create tables
CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE devis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_name VARCHAR(255) NOT NULL,
    date_created DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE devis_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    devis_id INT,
    item_id INT,
    quantity INT,
    custom_price DECIMAL(10, 2),
    FOREIGN KEY (devis_id) REFERENCES devis(id),
    FOREIGN KEY (item_id) REFERENCES items(id)
);

-- insertion de données
INSERT INTO items (description, price) VALUES
('Conception de site web', 1200.00),
('Développement backend API', 1500.00),
('Optimisation SEO', 300.00),
( 'Support technique (par mois)', 200.00),
( 'Hébergement web (par an)', 100.00),
( 'Maintenance et mises à jour (par mois)', 150.00),
( 'Création de contenu et blog', 50.00),
( 'Audit de sécurité', 500.00),
( 'Formation utilisateur', 400.00),
( 'Intégration de système de paiement', 250.00),
( 'Conception graphique (logo, bannières)', 100.00),
( 'Consultation technique (par heure)', 80.00);
-- Ajoutez d'autres items/services selon vos besoins
;

--Insertion d'un Devis :
INSERT INTO devis (client_name) VALUES ('Nom du Client');

--Liaison des Items au Devis :
INSERT INTO devis_items (devis_id, item_id, quantity, custom_price) VALUES
(1, 1, 1, NULL),  -- 1 Conception de site web pour le devis 1
(1, 2, 1, NULL)  -- 1 Développement backend API pour le devis 1
-- Ajoutez d'autres lignes pour lier d'autres items au devis
;
