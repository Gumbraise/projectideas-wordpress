<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'haram' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Cf]@#hdYgdO9og=nG478UGIVBFahB3Q4oQaSQzJ;r.6bl{Oxg4t1W QC;YFfl-A1' );
define( 'SECURE_AUTH_KEY',  'F4bZdF9!2BBSO3O5Pm3|M,LT(oK<5WBdg;N>PtAT{hI]8A2J|{a2=}VFiVgo&]k+' );
define( 'LOGGED_IN_KEY',    '{uL?@V Mhw}+BUx:|F<@mSNAEk_Z?Yk(YDLumPpk=_Xd`GM=Li$xfpU=B&peG|l2' );
define( 'NONCE_KEY',        'a-o!M/1Ml+X r|mvR &791Z9yS8HR2%bp:M|LhoVJ+5/gE+X~UKRteZFbhJ@e1?V' );
define( 'AUTH_SALT',        'yMSWwihF?wb)jrm]W@g^O$2F;]a=zqNM(0l<?mu3#KP;no2LqW1WPke,-,Bv^2Um' );
define( 'SECURE_AUTH_SALT', '(w]DA@WL{*2xFR,`=sUE,5oI(>O&d-4SU2rz_CR*/zbOq5{9@0hGf1:F4>,15ot-' );
define( 'LOGGED_IN_SALT',   'y,=tg+AEJN@4bR|:<}t)dw%{B(w,2U^@Z-)aPj@RarX*wb98u57FRAR+$I(yh7d{' );
define( 'NONCE_SALT',       '/i(Yi<W!^pLw2rfs;jaFcQ2_8]e^c/N_aOE%0&DlQ-Tx7nXqS/T*7`.!q:Rztutw' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'toi';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
