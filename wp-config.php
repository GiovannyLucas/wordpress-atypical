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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '<EHObTCcmo.F5?~HY5z+Oa ;FFpRVCRc))hM3d`bAu{$o|GMlO7&+yo-~[HIi*DJ' );
define( 'SECURE_AUTH_KEY',  'j{y,r&S)_2hT{F2EAAKwYw-#(K{01VGo-Gz#U*e!-=.5m3$`aMIp2,Mx;|tjFiem' );
define( 'LOGGED_IN_KEY',    'N`-ZsMh]d^*9V%^-xcr3DIzL^dX)@~/})((EBNU:.%#!=D/vpc8h6{0Bl}]RGTEH' );
define( 'NONCE_KEY',        'rXL?f./M*,FE|<^f.6RSn~T@/?V<hBxo,ZMjnD/0sbAfmX[)u_ekxgWB*zgEH:>G' );
define( 'AUTH_SALT',        'F?EX9@^--6F?B5;^~7:!)*GNncv>]!O!5l 7o]NM38F01k$#A#$e$kJUUnGWD2Zu' );
define( 'SECURE_AUTH_SALT', 'e+%}E;d_B8A?mGay,u&%3?W&|B0}^jkH,k{{-A-(Z6K F;?$oOr}T}xiT$cDITRF' );
define( 'LOGGED_IN_SALT',   '?DX+(5R0N/!t2cxOA.~$P,+q8DDga%I9CotX!L1sD=J!z(h,-rO:n(BFg-=E<+I~' );
define( 'NONCE_SALT',       'P+QZI?L 9rKJjZEI)f,[VFt|nAMF4<L0Y`98(@F4LH_N=K#|pVIAX8/:f8GN8<hW' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
