<?php
define('WP_CACHE', false);
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'proje1020828');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'proje1020828');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wpq3a1n4au');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '91.216.107.164');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Bm.HH6eYMg2Q.T@$C*^9W+NZFac*hr/YE/P0wgea0am8`On>9tslc1e9~WNFm=w&');
define('SECURE_AUTH_KEY',  'j1C=m$T&DzXVK2q0Q!>H`#n!PQy.B=:[A@!,A:8{%B;L76CX*y&S$OWq@H9n{hCE');
define('LOGGED_IN_KEY',    'bJjRGd?6!tabq%%{9~!Yu^FqE[aUj>(a]XB:TX,{gY}|u#G;xfLXl[eN/TG$9s@0');
define('NONCE_KEY',        '.Iz06^Rf$:2r0:Ux;,JW|NQE&TM3Nk[(.|H`nZKu;96w]*Et)~A5gn}NN .+Zfq ');
define('AUTH_SALT',        '%0Tz8]}DZvj30[BQ }fw/w[N40elWY?NSCH#wASedj[o.2} FY51r5SIyN~$SAFd');
define('SECURE_AUTH_SALT', '(-]gJ^M!W_=bb3z_~V8Uz70,8-,QMd%[)^c1%tvF1C_XW|$ qd5zs1M6cB/T|ouu');
define('LOGGED_IN_SALT',   '==-%a8t#TbF^:e)2vB?!4yci4 Ai%9;Le=.H {BEUrg-tw7@V2,9rfJit_g/mw.W');
define('NONCE_SALT',       ']l8qzLJQR|YX$1Lk0(hXL|*Bk;m`;|$8$U_g2W}uZo,apRs$.5]{U G]?eIS&72Q');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');