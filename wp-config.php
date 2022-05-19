<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_criando_sonhos' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':u}WKg)Ds}JK-iV`YW=fp[k.[dMx`?Uuoz:`<HH.bx|QA[AtG;D1|rdU?JQVG]P@' );
define( 'SECURE_AUTH_KEY',  'nw-B|fLXt~@KEb(c)1F~P9|xan7<dO(?cdEFScu5+dBh#W?RH9;s;Q[UV_0hgy6i' );
define( 'LOGGED_IN_KEY',    'hAe8Q2Jqi@N07jkO6GT,ZA61pT<wJ)S,dK.=gI;a`n=]~5G_nH31g:/sy?YYbWg9' );
define( 'NONCE_KEY',        'eKrk  9_k6qC&Q`Gt_q$/Hq}lY/tU2=#(50w0&|2JI+k,T|/4qox juU7-Q5iHSI' );
define( 'AUTH_SALT',        'y))eP<Z1k]m7MdMOSzcnpI*?6k`p@shRxaQFM@-LxEE8Ij3p  tU7<<o]3Ucj_1$' );
define( 'SECURE_AUTH_SALT', '68BD$m_h|x2O:wx@HI!Y)N/V#e?77@q:+Ki3UCCI01Q-7,e51NO`;vHS.HLT5[m ' );
define( 'LOGGED_IN_SALT',   'Q6pt_0On^/>X[RVr5DBTs(vqh[:M?3z&^tjK|4%PDp~z779D8[Be!OO&+bI+6$&e' );
define( 'NONCE_SALT',       'YdBKs;^2pTr/+cPOWPo|.HI]XAr 4|T.eD:{xVO4<$?Ed-]&[VI1N|eLD=#8=cX0' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
