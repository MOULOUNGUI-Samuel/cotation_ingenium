<<<<<<< HEAD

-- Table: table_proprietaire
CREATE TABLE table_proprietaires (
    id_proprietaire VARCHAR(50) PRIMARY KEY,
    nom_proprietaire VARCHAR(50),
    prenom_proprietaire VARCHAR(50),
    adresse_proprietaire VARCHAR(255)
);

-- Table: table_client
CREATE TABLE table_client (
    id_client VARCHAR(50) PRIMARY KEY,
    nom_client VARCHAR(50),
    prenom_client VARCHAR(50),
    adresse_client VARCHAR(255),
    code_postal_client VARCHAR(10),
    telephone_client VARCHAR(15),
    statut_client BOOLEAN
);

-- Table: table_fournisseurs
CREATE TABLE table_fournisseurs (
    id_fournisseur VARCHAR(50) PRIMARY KEY,
    nom_fournisseur VARCHAR(50),
    adresse_fournisseur VARCHAR(255),
    telephone_fournisseur VARCHAR(15),
    email_fournisseur VARCHAR(100),
    statut_fournisseur BOOLEAN,
    client_id VARCHAR(50),
    FOREIGN KEY (client_id) REFERENCES table_client(id_client)
);

-- Table: table_courtier
CREATE TABLE table_courtiers (
    id_courtier VARCHAR(50) PRIMARY KEY,
    nom_courtier VARCHAR(50),
    prenom_courtier VARCHAR(50),
    adresse_courtier VARCHAR(255),
    telephone_courtier VARCHAR(15)
);

-- Table: table_caissiere
CREATE TABLE table_caissieres (
    id_caissiere VARCHAR(50) PRIMARY KEY,
    nom_caissiere VARCHAR(50),
    prenom_caissiere VARCHAR(50),
    adresse_caissiere VARCHAR(255),
    telephone_caissiere VARCHAR(15),
    email_caissiere VARCHAR(100),
    statut BOOLEAN
);

-- Table: users
CREATE TABLE users (
    id_user VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255),
    role_user VARCHAR(50),
    telephone VARCHAR(15),
    adresse VARCHAR(255),
    proprietaire_id VARCHAR(50),
    client_id VARCHAR(50),
    fournisseur_id VARCHAR(50),
    coursier_id VARCHAR(50),
    FOREIGN KEY (proprietaire_id) REFERENCES table_proprietaires(id_proprietaire),
    FOREIGN KEY (fournisseur_id) REFERENCES table_fournisseurs(id_fournisseur),
    FOREIGN KEY (client_id) REFERENCES table_client(id_client),
    FOREIGN KEY (coursier_id) REFERENCES table_courtiers(id_courtier)
);

-- Table: table_magasin
CREATE TABLE table_magasin (
    id_magasin VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50),
    adresse VARCHAR(255),
    telephone VARCHAR(15),
    email VARCHAR(100),
    logo VARCHAR(255)
);

-- Table: table_annee
CREATE TABLE table_annee (
    id VARCHAR(50) PRIMARY KEY,
    libelle VARCHAR(50),
    statut BOOLEAN
);

-- Table: table_magasin_users
CREATE TABLE table_magasin_users (
    id VARCHAR(50) PRIMARY KEY,
    magasin_id VARCHAR(50),
    user_id VARCHAR(50),
    annee_id VARCHAR(50),
    role_manager BOOLEAN,
    role_chef BOOLEAN,
    role_caissier BOOLEAN,
    role_livreur BOOLEAN,
    role_preparateur BOOLEAN,
    FOREIGN KEY (magasin_id) REFERENCES table_magasin(id_magasin),
    FOREIGN KEY (user_id) REFERENCES users(id_user),
    FOREIGN KEY (annee_id) REFERENCES table_annee(id)
);



-- Table: table_collaborations
CREATE TABLE table_collaborations (
    id VARCHAR(50) PRIMARY KEY,
    employer_id VARCHAR(50),
    employee_id VARCHAR(50),
    date DATE,
    statut BOOLEAN,
    FOREIGN KEY (employer_id) REFERENCES users(id_user),
    FOREIGN KEY (employee_id) REFERENCES users(id_user)
);
-- Table: table_image
CREATE TABLE table_image (
    id_image VARCHAR(50) PRIMARY KEY,
    libelle VARCHAR(50),
    lien_image VARCHAR(255),
    statut BOOLEAN
);
-- Table: table_collaboration_image
CREATE TABLE table_collaboration_image (
    collaboration_id VARCHAR(50),
    image_id VARCHAR(50),
    PRIMARY KEY (collaboration_id, image_id),
    FOREIGN KEY (collaboration_id) REFERENCES table_collaborations(id),
    FOREIGN KEY (image_id) REFERENCES table_image(id_image)
);
-- Table: table_unites
CREATE TABLE table_unites (
    id_unite VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50),
    code_unite VARCHAR(10),
    description TEXT
);

-- Table: magasin_categorie
CREATE TABLE magasin_unites (
    magasin_id VARCHAR(50),
    unite_id VARCHAR(50),
    statut BOOLEAN,
    PRIMARY KEY (magasin_id, unite_id),
    FOREIGN KEY (magasin_id) REFERENCES table_magasin(id_magasin),
    FOREIGN KEY (unite_id) REFERENCES table_unites(id_unite)
);

-- Table: table_categorieProduits
CREATE TABLE table_categorieProduits (
    id VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50),
    description TEXT
);

-- Table: magasin_categorie
CREATE TABLE magasin_categorie (
    magasin_id VARCHAR(50),
    categorie_id VARCHAR(50),
    PRIMARY KEY (magasin_id, categorie_id),
    FOREIGN KEY (magasin_id) REFERENCES table_magasin(id_magasin),
    FOREIGN KEY (categorie_id) REFERENCES table_categorieProduits(id)
);

-- Table: table_article_stocks
CREATE TABLE table_article_stocks (
    id_article VARCHAR(50) PRIMARY KEY,
    magasin_categorie_id VARCHAR(50),
    designation VARCHAR(50),
    reference_article VARCHAR(50),
    code_barre VARCHAR(50),
    stock_securite INT,
    quantite_en_stock INT,
    prix_achat DECIMAL(10, 2),
    prix_vente DECIMAL(10, 2),
    statut BOOLEAN,
    FOREIGN KEY (magasin_categorie_id) REFERENCES magasin_categorie(magasin_id)
);


-- Table: table_condition_vente_achats
CREATE TABLE table_condition_vente_achats (
    id_condition_vente_achat VARCHAR(50) PRIMARY KEY,
    article_id VARCHAR(50),
    magasin_id VARCHAR(50),
    annee_id VARCHAR(50),
    prix_vente_HT DECIMAL(10, 2),
    prix_vente_TTC DECIMAL(10, 2),
    quantite_stock INT,
    montant_vente DECIMAL(10, 2),
    FOREIGN KEY (article_id) REFERENCES table_article_stocks(id_article),
    FOREIGN KEY (magasin_id) REFERENCES table_magasin(id_magasin),
    FOREIGN KEY (annee_id) REFERENCES table_annee(id)
);

-- Table: table_mouvement_stock
CREATE TABLE table_mouvement_stock (
    id_mouvement VARCHAR(50) PRIMARY KEY,
    condition_vente_achat_id VARCHAR(50),
    type_mouvement VARCHAR(50),
    quantite INT,
    date_mouvement DATE,
    statut BOOLEAN,
    FOREIGN KEY (condition_vente_achat_id) REFERENCES table_condition_vente_achats(id_condition_vente_achat)
);



-- Table: table_caisse
CREATE TABLE table_caisse (
    id_caisse VARCHAR(50) PRIMARY KEY,
    nom_caisse VARCHAR(50),
    montant_initial DECIMAL(10, 2),
    montant_restant DECIMAL(10, 2),
    montant_reduit DECIMAL(10, 2),
    statut BOOLEAN,
    adresse_caisse VARCHAR(255),
    condition_vente_achat_id VARCHAR(50),
     FOREIGN KEY (condition_vente_achat_id) REFERENCES table_condition_vente_achats(id_condition_vente_achat)
);


-- Table: table_fournisseur_condition_vente
CREATE TABLE table_fournisseur_condition_vente (
    id VARCHAR(50) PRIMARY KEY,
    fournisseur_id VARCHAR(50),
    condition_vente_id VARCHAR(50),
    PRIMARY KEY (fournisseur_id, condition_vente_id),
    FOREIGN KEY (fournisseur_id) REFERENCES table_fournisseurs(id_fournisseur),
    FOREIGN KEY (condition_vente_id) REFERENCES table_condition_vente_achats(id_condition_vente_achat)
);

-- Table: table_commandes
CREATE TABLE table_commandes_fournisseurs (
    id VARCHAR(50) PRIMARY KEY,
    fournisseur_condition_vente_id VARCHAR(50),
    annee_id VARCHAR(50),
    date_commande DATE,
    reference_commande VARCHAR(50),
    montant_HT DECIMAL(10, 2),
    montant_TTC DECIMAL(10, 2),
    statut_commande BOOLEAN,
    FOREIGN KEY (fournisseur_condition_vente_id) REFERENCES table_fournisseur_condition_vente(id),
    FOREIGN KEY (annee_id) REFERENCES table_annee(id)
);

-- Table: table_mode_paiement
CREATE TABLE table_mode_paiement (
    id VARCHAR(50) PRIMARY KEY,
    libelle VARCHAR(50),
    statut BOOLEAN
);

-- Table: magasin_mode_paiement
CREATE TABLE magasin_mode_paiement (
    magasin_id VARCHAR(50),
    mode_paiement_id VARCHAR(50),
    PRIMARY KEY (magasin_id, mode_paiement_id),
    FOREIGN KEY (magasin_id) REFERENCES table_magasin(id_magasin),
    FOREIGN KEY (mode_paiement_id) REFERENCES table_mode_paiement(id)
);

-- Table: table_reception
CREATE TABLE table_reception (
    id_reception VARCHAR(50) PRIMARY KEY,
    commande_id VARCHAR(50),
    date_reception DATE,
    etat_reception BOOLEAN,
    FOREIGN KEY (commande_id) REFERENCES table_commandes_fournisseurs(id)
);

-- Table: table_devis
CREATE TABLE table_devis (
    id_devis VARCHAR(50) PRIMARY KEY,
    magasin_user_id VARCHAR(50),
    reference_devis VARCHAR(50),
    montant DECIMAL(10, 2),
    date_devis DATE,
    annee_id VARCHAR(50),
    mode_paiement_id VARCHAR(50),
    TVA DECIMAL(5, 2),
    FOREIGN KEY (magasin_user_id) REFERENCES table_magasin_users(id),
    FOREIGN KEY (annee_id) REFERENCES table_annee(id),
    FOREIGN KEY (mode_paiement_id) REFERENCES table_mode_paiement(id)
);

-- Table: table_commandes_client
CREATE TABLE table_commandes_client (
    id_commande_client VARCHAR(50) PRIMARY KEY,
    devis_id VARCHAR(50),
    date_commande DATE,
    statut_commande BOOLEAN,
    FOREIGN KEY (devis_id) REFERENCES table_devis(id_devis)
);

-- Table: table_livraisons
CREATE TABLE table_livraisons (
    id_livraison VARCHAR(50) PRIMARY KEY,
    commande_client_id VARCHAR(50),
    coursier_id VARCHAR(50),
    annee_id VARCHAR(50),
    date_livraison DATE,
    adresse_livraison VARCHAR(255),
    nombre_livrer INT,
    description TEXT,
    FOREIGN KEY (annee_id) REFERENCES table_annee(id),
    FOREIGN KEY (commande_client_id) REFERENCES table_commandes_client(id_commande_client),
    FOREIGN KEY (coursier_id) REFERENCES table_courtier(id_courtier)
);


-- Table: table_facture
CREATE TABLE table_facture (
    id_facture VARCHAR(50) PRIMARY KEY,
    reception_id VARCHAR(50) NULL,
    livraison_id VARCHAR(50) NULL,
    date_facture DATE,
    montant DECIMAL(10, 2),
    statut_facture BOOLEAN,
    mode_paiement_id VARCHAR(50),
    FOREIGN KEY (livraison_id) REFERENCES table_livraisons(id_livraison),
    FOREIGN KEY (reception_id) REFERENCES table_reception(id_reception),
    FOREIGN KEY (mode_paiement_id) REFERENCES table_mode_paiement(id)
);

-- Table: table_paiement
CREATE TABLE table_paiement (
    id_paiement VARCHAR(50) PRIMARY KEY,
    facture_id VARCHAR(50),
    date_paiement DATE,
    montant DECIMAL(10, 2),
    montant_verse DECIMAL(10, 2),
    reference_paiement VARCHAR(50),
    description TEXT,
    statut_paiement BOOLEAN,
    FOREIGN KEY (facture_id) REFERENCES table_facture(id_facture),
=======
-- Table Clients
CREATE TABLE Clients (
    client_id INT AUTO_INCREMENT PRIMARY KEY,
    raison_sociale VARCHAR(255) NOT NULL,
    adresse_complete TEXT NOT NULL,
    contact_nom VARCHAR(255) NOT NULL,
    contact_telephone VARCHAR(20) NOT NULL,
    contact_email VARCHAR(255) NOT NULL UNIQUE,
    secteur_activite ENUM('Industrie', 'Commerce', 'Services') NOT NULL,
    chiffre_affaires DECIMAL(15, 2) NOT NULL
);

-- Table Couvertures
-- Table Couvertures mise à jour
CREATE TABLE Table_cotations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    commercial_id INT NOT NULL,
    nom_assurance VARCHAR(255) NOT NULL,

    montant_garantie TEXT,
    date_effet DATE NOT NULL,
    besoins_specifiques TEXT,
    nombre_vehicules INT,
    type_vehicules ENUM('Légers', 'Poids lourds', 'Utilitaires'),
    `usage` ENUM('Privé', 'Professionnel'),
    puissance_fiscale DECIMAL(5, 2),
    type_bien ENUM('Immeuble', 'Equipements', 'Marchandises'),
    valeur_total DECIMAL(15, 2),
    mesures_securite SET('Alarme', 'Surveillance 24h', 'Extincteurs'),
    taille_entreprise INT,
    budget_it_annuel DECIMAL(15, 2),
    description_systemes TEXT,

    annee YEAR NOT NULL,
    nature_sinistre TEXT NOT NULL,
    montant_pertes DECIMAL(15, 2) NOT NULL,
    description_sinistres TEXT,

    contenu_commentaire TEXT NOT NULL,
FOREIGN KEY (client_id) REFERENCES Clients(client_id) ON DELETE CASCADE
);


-- Table Documents
CREATE TABLE Documents (
    document_id INT AUTO_INCREMENT PRIMARY KEY,
    cotation_id INT NOT NULL,
    nom_document VARCHAR(255) NOT NULL,
    type_document ENUM('PDF', 'JPG', 'PNG') NOT NULL,
    chemin_document TEXT NOT NULL,
    FOREIGN KEY (client_id) REFERENCES Table_cotations(id) ON DELETE CASCADE
>>>>>>> 149ce15 (revu du travail)
);

