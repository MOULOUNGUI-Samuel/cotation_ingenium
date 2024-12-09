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
-- Table Assurances
CREATE TABLE Assurances (
    assurance_id INT AUTO_INCREMENT PRIMARY KEY,
    nom_assurance VARCHAR(255) NOT NULL,
    description TEXT
);

-- Table Couvertures
-- Table Couvertures mise à jour
CREATE TABLE Demande_cotation (
    demande_id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,

    type_demande VARCHAR(255) NOT NULL,
    raison_sociale VARCHAR(255) NOT NULL,
    adresse_complete TEXT NOT NULL,
    contact_nom VARCHAR(255) NOT NULL,
    contact_telephone VARCHAR(20) NOT NULL,
    contact_email VARCHAR(255) NOT NULL UNIQUE,
    secteur_activite ENUM('Industrie', 'Commerce', 'Services') NOT NULL,
    chiffre_affaires DECIMAL(15, 2) NOT NULL,

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
    nom_document VARCHAR(255) NOT NULL,
    
    contenu_commentaire TEXT NOT NULL,
    
    FOREIGN KEY (client_id) REFERENCES Clients(client_id) ON DELETE CASCADE,
    FOREIGN KEY (assurance_id) REFERENCES Assurances(assurance_id) ON DELETE CASCADE
);

-- Table Historique_Sinistres
CREATE TABLE Historique_Sinistres (
    sinistre_id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    annee YEAR NOT NULL,
    nature_sinistre TEXT NOT NULL,
    montant_pertes DECIMAL(15, 2) NOT NULL,
    description_sinistres TEXT,
    FOREIGN KEY (client_id) REFERENCES Clients(client_id) ON DELETE CASCADE
);

-- Table Documents
CREATE TABLE Documents (
    document_id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    nom_document VARCHAR(255) NOT NULL,
    type_document ENUM('PDF', 'JPG', 'PNG') NOT NULL,
    chemin_document TEXT NOT NULL,
    FOREIGN KEY (client_id) REFERENCES Clients(client_id) ON DELETE CASCADE
);

-- Table Commentaires
CREATE TABLE Commentaires (
    commentaire_id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    contenu_commentaire TEXT NOT NULL,
    FOREIGN KEY (client_id) REFERENCES Clients(client_id) ON DELETE CASCADE
);
