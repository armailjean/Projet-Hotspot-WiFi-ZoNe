<?php
/*
 * stats.json.php
 * 
 * Endpoint sécurisé pour récupérer la consommation du mois.
 * À installer sur un serveur PHP accessible.
 */

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');

// Sécurité : clé API optionnelle
define('API_KEY', 'votre_cle_api_secrete'); // À personnaliser

$username = $_GET['username'] ?? '';
$username = trim($username);

if ($username === '') {
    http_response_code(400);
    echo json_encode(['error' => 'username manquant']);
    exit;
}

// Vérification de la clé API
$apiKey = $_GET['api_key'] ?? '';
if ($apiKey !== API_KEY) {
    http_response_code(403);
    echo json_encode(['error' => 'clé API invalide']);
    exit;
}

/*
 * QUOTA : 60 GiB
 */
$quota = 60 * 1024 * 1024 * 1024;

/*
 * === À REMPLACER par la lecture réelle de MikroTik ===
 * 
 * Exemple avec API REST MikroTik (via RouterOS API) :
 * 
 * $host = '192.168.88.1';
 * $port = 8728;
 * $user = 'api_user';
 * $pass = 'api_password';
 * 
 * // Connexion et récupération des statistiques
 * $usedBytes = get_user_usage($username, $host, $port, $user, $pass);
 */

// Pour le moment, valeur par défaut
$usedBytes = 0;

echo json_encode([
    'username'    => $username,
    'used_bytes'  => (int)$usedBytes,
    'quota_bytes' => $quota,
    'updated_at'  => date('c')
]);
?>