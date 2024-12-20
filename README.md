# Nabta_Falah 🌾

![image](https://github.com/user-attachments/assets/cdc8101d-4d29-4d7e-8a12-0d2f8bbc50ce)


**Nabta_Falah** est une application développée en Laravel, visant à révolutionner la gestion des services agricoles et vétérinaires. Ce projet utilise une API REST, un environnement Docker et des outils modernes pour offrir une expérience utilisateur fluide et performante.

---

## 🚀 Fonctionnalités principales
### **1. Gestion des utilisateurs**
- **Administration** : Gestion globale des ressources (clients, vétérinaires, fournisseurs, consultations).
- **Clients** : Achat de produits agricoles et consultation de vétérinaires.
- **Vétérinaires** : Gestion des consultations et communication avec les clients.
- **Fournisseurs** : Gestion des produits et services agricoles.

### **2. Consultation vétérinaire**
- Réservation de consultations via l'application.
- Communication en temps réel grâce à une fonctionnalité de **chat**.

### **3. Gestion des produits et services**
- Recherche avancée pour trouver des produits/services.
- Paiement intégré via des plateformes sécurisées.

### **4. Système de registre et validation**
- Enregistrement des utilisateurs avec validation par email.
- Gestion sécurisée des informations personnelles.

---

## ⚙️ Technologies utilisées
- **Backend** : Laravel Framework.
- **API Testing** : Postman.
- **Virtualisation** : Docker pour l’orchestration des conteneurs.
- **Base de données** : MySQL (ou autre selon votre configuration Docker).
- **Authentification** : Système sécurisé avec validation par email.

---

## 🛠️ Installation et configuration
### Prérequis
- PHP 8.x
- Composer
- Docker et Docker Compose
- Postman (pour tester l'API)

### Étapes d'installation
1. Clonez le dépôt :
   ```bash
   git clone https://github.com/yassineelmiri/Nabta_Falah.git
   cd Nabta_Falah
   ```

2. Installez les dépendances :
   ```bash
   composer install
   ```

3. Configurez le fichier `.env` :
   - Dupliquez le fichier `.env.example` :
     ```bash
     cp .env.example .env
     ```
   - Configurez vos informations de base de données et autres variables nécessaires.

4. Générez la clé d'application :
   ```bash
   php artisan key:generate
   ```

5. Lancez Docker :
   ```bash
   docker-compose up -d
   ```

6. Appliquez les migrations et seeders :
   ```bash
   php artisan migrate --seed
   ```

7. Démarrez le serveur Laravel :
   ```bash
   php artisan serve
   ```

---

## 🧪 Utilisation de l'API avec Postman
1. Importez la collection Postman incluse dans le projet (située dans le dossier `/postman`).
2. Testez les endpoints disponibles :
   - **Authentification** : Inscription, connexion, validation par email.
   - **Gestion des ressources** : Clients, fournisseurs, vétérinaires.
   - **Paiements** : Intégration d'API tierces pour les transactions.

---

## 📂 Structure du projet
```
Nabta_Falah/
├── app/                # Logique métier
├── config/             # Fichiers de configuration
├── database/           # Migrations, seeders
├── public/             # Assets publics
├── resources/          # Vues et fichiers frontend
├── routes/             # Fichiers de routes API/web
├── docker-compose.yml  # Configuration Docker
└── README.md           # Documentation du projet
```

---

## 📧 Contact
**Développeur** : Yassine Elmiri  
- **Email** : miriyassine123@gmail.com  
- **GitHub** : [Yassine Elmiri](https://github.com/yassineelmiri)  

N'hésitez pas à contribuer au projet ou à signaler des problèmes via [les issues du dépôt](https://github.com/yassineelmiri/Nabta_Falah/issues).  

