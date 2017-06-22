<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'vbpa_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'vbpa_wp');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '@9isaats');

/** nome do host do MySQL */
define('DB_HOST', 'vbpa-wp.mysql.uhserver.com');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ejSPS#u]Z5.HCV|>g ])ZNOKPE)a9P$gQ_obl~YkWmz#&.4p<ay098KX5rg/F&b7');
define('SECURE_AUTH_KEY',  'TQWtS:PEyE,#i@H5Ze27g>P/rF/gHWjJh]ND~vjb3G4?=kkw)~a{1:$56sAw4+^p');
define('LOGGED_IN_KEY',    'g/_}oZy+j]nrH?lISj*XiJ>3f<YP~ij%T-(.z`4usj$+[Y{Fz)qr,8TKc.)U?3GL');
define('NONCE_KEY',        ':.I<0wB(+SG]&I~Y(10&:y@h[8amx_#`o50S8oQK}sO/nc:((q#-If>C!x.yPZ!n');
define('AUTH_SALT',        'Bl$DfKx7+~:Ve.(`KB1g|x:VVhS$8@qP-e6R;(Z rFbImzIh76bkdOL*`QD?@_9u');
define('SECURE_AUTH_SALT', 'ISP^JWJlYXvUEM{S%U{,@JI@3.hrkIfwA/4.9HK?x-Qw!N1kd:YaQtpWJB_NpVI[');
define('LOGGED_IN_SALT',   ',{TU7JNcN,z Pw@4/;%Z%1YCr|-|iv8di/G~71( ck-i$7duWF*(R&b/}v4-(a8|');
define('NONCE_SALT',       'fMJ5~5%JEzKHK5^ohOUBn0{pYsh@K{JO9l`9_TrheM/9kL.lz)+s()6J=0 0La^M');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
