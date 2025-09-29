<?php
/**
 * CONFIGURACIÓN LOCAL PARA DESARROLLO
 *
 * Copia este archivo como wp-config.php y ajusta las configuraciones
 * para tu entorno de desarrollo local.
 */

// ** Database settings - Configuración Local ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'puppiesv_wp102' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * URLs para desarrollo local
 * Cambia estas URLs según tu configuración local
 */
define( 'WP_HOME', 'http://localhost/puppiesvet-clean' );
define( 'WP_SITEURL', 'http://localhost/puppiesvet-clean' );

/**
 * Configuración de desarrollo
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

// RESTO DE CONFIGURACIÓN COPIADA DEL wp-config.php ORIGINAL...