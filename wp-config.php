<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projetONG');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`L4W jXa[i}%/RKLn|(V[t.OtQl_}@50M)+Rk &y(0Y{E%NW`Lo,,G;e7&UE70ev');
define('SECURE_AUTH_KEY',  'goX]?_2|xDyyLd.YmdHM=H1OF}]KnUdS%w^GAJ Eb:pT`3#%GmEtC6-Za,D`sa1^');
define('LOGGED_IN_KEY',    '7S;ep`| ;i>x0j(p![-z<8)+W9gR&C|(x5Rp2:n) W!B~IOfK|D^#rS%93= *_-b');
define('NONCE_KEY',        '_Wj9+5,qu_}@rHo|pUbjg+k:l8cuBp_m$rZ4Q1f1C>zdFZ~--78FC{LMJop4cY-c');
define('AUTH_SALT',        '8.acEx5VW1tr+:Za_yw86pdd7utx.cG*tahCW1~;r~qi]$J8m9YeitmT=#J#F4nw');
define('SECURE_AUTH_SALT', 'XFPB=[/RA|~Zx(Qb-BJ!`=R0)2XS6nYVK~7&eha8I#R&~zHztpB`-+IwoG!dox>h');
define('LOGGED_IN_SALT',   '<Kx%,@w)8-EQZ&rVJ<(`.$-x}KH1&_)$`W6~n=3`D$,8ti-$S+$3!CCZF}) 7=nt');
define('NONCE_SALT',       'HH%%sUG#G9-9r/:UQMbLjg(T(q{PCG0&7:pg-1e(2|,lsXjR_3]=bB9}&VDWo!KC');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');