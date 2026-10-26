# ZoNe 206 — Hotspot moderne

## Fichiers
Copier dans le dossier `hotspot` de MikroTik :
- login.html
- status.html
- logout.html
- alogin.html
- css/style.css
- Fond Login Final.png

## Statistiques 60 Go
La page status est prête à afficher :
- consommation totale
- pourcentage utilisé
- Go restants
- téléchargement/envoi de la session
- durée de session

Pour le cumul mensuel réel de MikroTik 2, il faut relier `stats.json.php` à votre
mécanisme d'Accounting (User Manager/RADIUS/script/API). Le code fourni ne fabrique
pas de fausses statistiques : tant que cette liaison n'est pas configurée, le cumul
reste à 0.

## Important
Le fichier PHP ne s'exécute pas sur le serveur Web du Hotspot MikroTik lui-même.
Il doit être hébergé sur un serveur PHP accessible depuis les clients, ou remplacé
par une autre méthode d'API adaptée à votre infrastructure.

Quota utilisé ici : 60 GiB = 60 × 1024³ octets.
