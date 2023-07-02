<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty6' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '0f;=NJq^/ripE3|i{J!GeJd{gYABu}5<C)Catey}G;-^0}eQ(k$QWFAralU].xp^' );
define( 'SECURE_AUTH_KEY',  'S+4]&}zm}D.DU[,v$t-PLP{@w%>8$+(y!#C8Iyg$h:_FsKl<QTmx&<f~MVm9(P_m' );
define( 'LOGGED_IN_KEY',    '7m<1I85mN-68J,k0Ul!I![JosG3?;-:B!S6_(T=@fu9hAHV9):<Am;|iXTq]5$7Z' );
define( 'NONCE_KEY',        'v*r@JbM=~~9*ZB&hK5vgMH;PA%nEM!]*W~Z4H[-je]^_T5?mHv`_nJ&$1-)T/u_F' );
define( 'AUTH_SALT',        'I,C[eFL6x3>d<VsqZ,<^=kRIdMcI76lZ2Q0 #ffx|sJmOD_R.T8Y9?S{N,.81A*m' );
define( 'SECURE_AUTH_SALT', 'wj9?LAT?Rsdhm_M4PEVId^!s`;a4iitaE?B5xHc 1rGCCf xvT2Ky?|&x(H5Zjk*' );
define( 'LOGGED_IN_SALT',   ']LIs^]GL[d/HUTb>:}|DfFghR&b/X!l=cJwFd:K#E;+eu:#w^#9oByEw=5SiCmRI' );
define( 'NONCE_SALT',       'PPH<Iz.TLv*iBF(6=:g?Ap9>Q=O#f8m5cL%d:Y}L*|SHMsN|C?qYOp~k3@,V-UR|' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
