<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'cms_wp1');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '?SgZ+dRYhwuMx,+ekY@OPnYjR[3We!=%=YCR$)2?V?@b]4X6vvf`%Z(j17Px#odD');
define('SECURE_AUTH_KEY', 'J&xFf^ECQ V9n~;OUyX1W5e2:c5$t]L)rucxtMzZ<=4*gz^GSQe5IEl$%1}r#,q>');
define('LOGGED_IN_KEY', 'RsBf*k{cZzS#xPE&P8mCn:ETUeIC4Nb!~Z2e#pd&6p@t0<T~b_0]s![9YJ>AiQ7t');
define('NONCE_KEY', '%{Dqagz:?D& .0uygaW</j95maI8T-v<It+DD%kYbs)`=[3$.;cMcu$Q/!Ag^DTm');
define('AUTH_SALT', 'h:MbihfXHPk,7liGscQK.iKgYhP N[GJCamUvN}DX7rlQI9t5``3UGPiZlJ{y>){');
define('SECURE_AUTH_SALT', '%d]jBq2PQp={,zZCr**vOZ/})D9V+Y{MJ*cAM-+h,_O!O0,>bO/)Z+m2GMsBU,TT');
define('LOGGED_IN_SALT', '9MZe%]`bmP;?B@|=POP?UdE}/ n[y[H8mM*0M7:wM`/8^V &3Ydc8;$])v(80`%r');
define('NONCE_SALT', 'U#60B+w22z/Tw.16Nji$M/JM>s!>Z~x>|n4}DaDpCRsL[PFP3?NMb2GtQm-tz)Fd');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

