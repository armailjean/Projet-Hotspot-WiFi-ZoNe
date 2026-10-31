# 🌐 Page d'accueil WiFi — ZoNe206

![ZoNe206](https://img.shields.io/badge/WiFi-ZoNe206-blue)
![MikroTik](https://img.shields.io/badge/MikroTik-Hotspot-red)
![Responsive](https://img.shields.io/badge/Design-Responsive-green)
![HTML5](https://img.shields.io/badge/HTML5-orange)
![CSS3](https://img.shields.io/badge/CSS3-blue)

## 📡 Présentation

**ZoNe206 WiFi** est une interface web de **portail captif (Hotspot)** destinée à l'accueil des utilisateurs d'un réseau Wi-Fi basé sur **MikroTik**.

Cette page constitue le premier point de contact entre l'utilisateur et le service Wi-Fi. Elle permet de présenter clairement le service, les offres disponibles et l'accès à Internet dans une interface moderne, responsive et adaptée aux différents appareils.

Le projet a été conçu avec une attention particulière portée à :

- 📱 l'expérience utilisateur sur smartphone ;
- 💻 l'affichage sur ordinateur ;
- 📲 la compatibilité avec les tablettes ;
- 🎨 une interface moderne et attractive ;
- 🌄 la visibilité du background ;
- 💳 la présentation claire des offres Wi-Fi ;
- 🔐 l'intégration avec le système Hotspot MikroTik.

---

# 🎯 Objectifs du projet

L'objectif principal est de créer une **page d'accueil Wi-Fi professionnelle** permettant de transformer la connexion au réseau en une expérience simple, claire et agréable.

Le projet cherche notamment à :

- présenter le service **ZoNe206** ;
- faciliter la connexion des utilisateurs ;
- afficher les offres Wi-Fi disponibles ;
- rendre les informations facilement accessibles ;
- adapter automatiquement l'interface à la taille de l'écran ;
- améliorer l'expérience utilisateur du portail captif ;
- fournir une base personnalisable pour un réseau Hotspot MikroTik.

---

# ✨ Fonctionnalités principales

## 🔐 Portail captif MikroTik

L'interface est destinée à fonctionner avec le système **MikroTik Hotspot**.

Elle prend en charge les éléments nécessaires au fonctionnement d'un portail captif, notamment :

- formulaire de connexion ;
- nom d'utilisateur ;
- mot de passe ;
- authentification Hotspot ;
- redirection après connexion ;
- affichage des erreurs de connexion ;
- déconnexion ;
- affichage du statut de la session.

Les variables dynamiques MikroTik peuvent être utilisées directement dans les pages HTML.

Exemple :

```html
$(username)
$(link-login-only)
$(link-logout)
$(link-orig)
$(error)
```

---

# 🛍️ Présentation des offres Wi-Fi

Une partie importante de la page d'accueil est consacrée à la présentation des offres disponibles.

Les offres sont présentées sous forme de cartes afin de permettre à l'utilisateur de comparer rapidement :

- le volume Internet ;
- le prix ;
- la durée ou les conditions ;
- les informations importantes de l'offre.

Exemple de structure :

```text
┌──────────────────┐
│     60 Go        │
│                  │
│    15 000 Ar     │
│                  │
│   Offre Wi-Fi    │
└──────────────────┘
```

Les informations commerciales peuvent être modifiées directement dans le code afin de correspondre aux offres réellement disponibles.

---

# 🎨 Design

L'interface adopte une approche moderne basée notamment sur :

- transparence ;
- effets de profondeur ;
- cartes semi-transparentes ;
- arrière-plan visible ;
- typographie lisible ;
- boutons modernes ;
- couleurs différenciées pour les offres ;
- espaces équilibrés ;
- effets de survol ;
- adaptation automatique aux écrans.

L'objectif est de conserver une bonne visibilité du **background**, tout en maintenant une lisibilité suffisante du contenu.

---

# 🌄 Background

Le projet peut utiliser une image de fond personnalisée.

Exemple :

```text
img/
└── FondFinal.jpg
```

Le background est volontairement visible derrière les éléments de l'interface afin de renforcer l'identité visuelle du portail Wi-Fi.

Il est possible de remplacer l'image par une autre image sans modifier l'ensemble de l'interface.

---

# 📱 Responsive Design

L'interface est conçue pour fonctionner sur plusieurs types d'appareils :

### 📱 Smartphone

- affichage vertical ;
- cartes adaptées aux petits écrans ;
- boutons facilement accessibles ;
- texte lisible ;
- espacement optimisé.

### 📲 Tablette

L'interface s'adapte automatiquement à une largeur intermédiaire.

### 💻 Ordinateur

La page utilise l'espace disponible pour présenter les informations de manière plus large et confortable.

---

# 🧩 Structure du projet

Une organisation possible du portail est la suivante :

```text
WiFi-ZoNe206/
│
├── login.html
├── status.html
├── logout.html
├── error.html
├── redirect.html
├── rlogin.html
├── radvert.html
├── alogin.html
├── md5.js
│
├── css/
│   └── style.css
│
├── img/
│   └── FondFinal.jpg
│
└── README.md
```

## 📄 Principales pages

| Fichier | Rôle |
|---|---|
| `login.html` | Page principale de connexion |
| `status.html` | Informations sur la session utilisateur |
| `logout.html` | Page après déconnexion |
| `error.html` | Affichage des erreurs |
| `redirect.html` | Gestion de la redirection |
| `rlogin.html` | Page de reconnexion |
| `radvert.html` | Page publicitaire/information |
| `alogin.html` | Traitement après authentification |
| `md5.js` | Gestion de l'authentification CHAP |
| `style.css` | Styles graphiques du portail |

---

# ⚙️ Technologies utilisées

Le projet repose principalement sur des technologies Web standards :

- **HTML5** — structure des pages ;
- **CSS3** — design et responsive design ;
- **JavaScript** — interactions et authentification ;
- **MikroTik Hotspot** — portail captif et gestion de l'accès Wi-Fi ;
- **CHAP / MD5** — mécanisme d'authentification utilisé par les modèles Hotspot concernés.

---

# 🔐 Authentification MikroTik

Lorsque l'authentification CHAP est activée, la page de connexion utilise le mécanisme prévu par MikroTik.

Exemple de variables utilisées :

```html
$(chap-id)
$(chap-challenge)
```

Le fichier JavaScript correspondant doit être présent dans le dossier du Hotspot :

```text
md5.js
```

> ⚠️ `md5.js` est le fichier JavaScript utilisé côté navigateur pour le mécanisme CHAP. Il ne faut pas confondre ce fichier avec un fichier Java `.jar`.

---

# 🚀 Installation sur MikroTik

## 1. Préparer les fichiers

Placez les fichiers du portail dans le dossier Hotspot correspondant à votre configuration MikroTik.

Structure recommandée :

```text
hotspot/
│
├── login.html
├── status.html
├── logout.html
├── error.html
├── redirect.html
├── rlogin.html
├── radvert.html
├── alogin.html
├── md5.js
│
├── css/
│   └── style.css
│
└── img/
    └── FondFinal.jpg
```

---

## 2. Transférer les fichiers

Les fichiers peuvent être transférés vers le routeur à l'aide de l'outil de gestion de fichiers disponible dans l'environnement MikroTik, notamment **Winbox** ou une méthode de transfert compatible.

Vérifiez que les chemins utilisés dans les pages correspondent réellement aux fichiers présents sur le routeur.

Exemple :

```html
<link rel="stylesheet" href="css/style.css">
```

et :

```css
background-image: url('../img/FondFinal.jpg');
```

---

## 3. Vérifier le profil Hotspot

Le profil Hotspot doit utiliser le dossier contenant les fichiers du portail.

Il faut notamment vérifier que le serveur Hotspot pointe vers le bon répertoire.

---

## 4. Tester la connexion

Après installation :

1. connecter un appareil au réseau Wi-Fi ;
2. ouvrir un navigateur ;
3. accéder à une page Internet ;
4. vérifier l'apparition du portail ;
5. tester la connexion avec un compte Hotspot ;
6. vérifier la redirection ;
7. vérifier la page de statut ;
8. tester la déconnexion.

---

# 🧪 Tests recommandés

Avant la mise en production, tester le portail sur plusieurs appareils.

### 📱 Smartphones

Tester notamment :

- Android ;
- différents navigateurs ;
- différentes tailles d'écran ;
- affichage du portail captif.

### 💻 Ordinateurs

Tester :

- Chrome ;
- Edge ;
- Firefox ;
- différentes résolutions.

### 🌐 Connexion réseau

Vérifier :

- apparition du portail ;
- authentification ;
- redirection ;
- navigation Internet ;
- déconnexion ;
- reconnexion.

---

# ⚡ Optimisation

Le portail doit rester léger afin de réduire le temps d'affichage, notamment sur les smartphones.

Les recommandations sont :

- limiter les images trop lourdes ;
- optimiser les fichiers CSS ;
- limiter les bibliothèques externes ;
- compresser les images ;
- éviter les scripts inutiles ;
- privilégier un code HTML/CSS simple.

Cette optimisation est particulièrement importante pour un portail captif utilisé par de nombreux utilisateurs simultanément.

---

# 🎨 Personnalisation

L'identité visuelle peut être facilement adaptée.

Les éléments personnalisables comprennent :

- nom du réseau ;
- logo ;
- image de fond ;
- couleurs ;
- offres ;
- prix ;
- textes ;
- coordonnées ;
- boutons ;
- informations commerciales.

Par exemple :

```text
Nom du réseau :
ZoNe206

Service :
WiFi Internet

Devise :
Ariary (Ar)

Technologie :
MikroTik Hotspot
```

---

# 📊 Évolutions possibles

Le projet peut évoluer progressivement vers un portail Wi-Fi plus complet.

Les évolutions possibles comprennent :

- 📊 tableau de bord utilisateur ;
- 📈 affichage de la consommation Internet ;
- ⏱️ affichage du temps restant ;
- 💾 affichage du volume restant ;
- 🎟️ intégration des tickets Hotspot ;
- 💳 informations sur les moyens de paiement ;
- 📱 amélioration de l'expérience mobile ;
- 🔔 notifications ;
- 📢 espace publicitaire ;
- 🌐 page d'information réseau ;
- 👤 espace utilisateur ;
- 📊 statistiques de consommation ;
- 🔄 amélioration de la gestion des sessions.

---

# 🛡️ Sécurité

Le portail doit être utilisé avec une configuration MikroTik correctement sécurisée.

Il est recommandé de :

- protéger l'accès administrateur au routeur ;
- utiliser des mots de passe sécurisés ;
- ne pas exposer les informations sensibles dans les fichiers publics ;
- vérifier les paramètres Hotspot ;
- limiter les accès administratifs ;
- maintenir RouterOS à jour selon les possibilités du matériel ;
- contrôler régulièrement les utilisateurs et sessions.

Les informations sensibles liées à la configuration du routeur ne doivent pas être publiées dans le dépôt GitHub.

---

# 📁 Git et GitHub

Pour initialiser le dépôt :

```bash
git init
```

Ajouter les fichiers :

```bash
git add .
```

Créer le premier commit :

```bash
git commit -m "feat: création du portail WiFi ZoNe206"
```

Associer le dépôt distant :

```bash
git remote add origin https://github.com/VOTRE-USERNAME/WiFi-ZoNe206.git
```

Envoyer le projet :

```bash
git branch -M main
git push -u origin main
```

---

# 📝 Convention des commits

Pour conserver un historique propre :

```text
feat: ajout d'une fonctionnalité
fix: correction d'un problème
style: amélioration du design
refactor: réorganisation du code
docs: mise à jour de la documentation
perf: amélioration des performances
```

Exemples :

```bash
git commit -m "feat: ajout des offres WiFi"
git commit -m "style: amélioration du portail mobile"
git commit -m "fix: correction de la redirection Hotspot"
git commit -m "docs: mise à jour du README"
```

---

# 🗺️ Roadmap

## Version 1.0

- [x] Création de la page d'accueil
- [x] Intégration MikroTik Hotspot
- [x] Design responsive
- [x] Présentation des offres
- [x] Background personnalisé
- [x] Interface de connexion

## Version 1.1

- [ ] Optimisation avancée mobile
- [ ] Amélioration des animations
- [ ] Amélioration de l'accessibilité
- [ ] Optimisation des performances

## Version 2.0

- [ ] Suivi de consommation
- [ ] Affichage du volume restant
- [ ] Affichage du temps restant
- [ ] Intégration avancée des tickets
- [ ] Tableau de bord utilisateur
- [ ] Notifications

---

# 📸 Captures d'écran

Les captures d'écran peuvent être ajoutées dans :

```text
docs/
└── screenshots/
    ├── accueil.png
    ├── connexion.png
    ├── offres.png
    └── mobile.png
```

Exemple :

```markdown
![Page d'accueil ZoNe206](docs/screenshots/accueil.png)
```

---

# 🌐 Utilisation

Le portail est destiné principalement à un environnement **Wi-Fi Hotspot MikroTik**.

L'utilisateur :

```text
Connexion au Wi-Fi
        ↓
Détection du portail captif
        ↓
Page d'accueil ZoNe206
        ↓
Consultation des offres
        ↓
Authentification
        ↓
Connexion Internet
        ↓
Navigation
```

---

# 💡 Pourquoi ce projet ?

Le projet répond à un besoin concret : proposer aux utilisateurs d'un réseau Wi-Fi une interface d'accès plus claire, moderne et professionnelle.

Une bonne page de portail captif permet notamment de :

- renforcer l'identité du service Wi-Fi ;
- présenter les offres de manière claire ;
- simplifier l'accès à Internet ;
- améliorer l'expérience utilisateur ;
- fournir des informations commerciales directement lors de la connexion.

---

# 👨‍💻 Auteur

## Armail Jean

**Étudiant en Master 2 — Génie informatique / Mathématiques et Informatique**

Domaines d'intérêt :

- 💻 Développement informatique
- 🌐 Développement Web
- 📡 Réseaux & Wi-Fi
- 🖥️ MikroTik
- 🗄️ Bases de données
- 🤖 Automatisation
- 🛠️ Conception de solutions informatiques

Ce projet s'inscrit dans une démarche pratique de conception et de développement d'une solution Web destinée à un environnement réseau réel.

---

# 📄 Licence

La licence du projet doit être définie selon les conditions de distribution souhaitées par l'auteur.

Si aucune licence n'est encore définie, il est recommandé d'ajouter un fichier `LICENSE` avant d'indiquer publiquement une licence particulière.

---

# ⭐ Soutenir le projet

Si vous trouvez ce projet intéressant :

- ⭐ ajoutez une étoile au dépôt ;
- 🐛 signalez les problèmes rencontrés ;
- 💡 proposez des améliorations ;
- 🔀 contribuez au développement ;
- 📢 partagez le projet.

---

# 📬 Contact

Pour toute question, suggestion ou collaboration, vous pouvez contacter l'auteur via GitHub.

---

<div align="center">

### 🌐 ZoNe206 WiFi

**Une expérience Wi-Fi simple, moderne et accessible.**

📡 **Connectez • Choisissez • Naviguez**

⭐ *Merci de soutenir le projet !*

</div>
