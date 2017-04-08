<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'rl3oo6huxe');

/** MySQL数据库用户名 */
define('DB_USER', 'rl3oo6huxe');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'lzg_02011224');

/** MySQL主机 */
define('DB_HOST', 'rm-bp112vt1l3f8jdd2q.mysql.rds.aliyuncs.com');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M?[8W3-SPx<APJlw8WM{zZDD@_{p2%PFWJ01`|{vZLh:~Nf-=6=r iJJ{+VVk,,4');
define('SECURE_AUTH_KEY',  'E +OWjl;&+F;ZHiQq@(,jP<3n3K^T}X]<hT24$h9F<.D =)W177;8Uhvt.,NDO{U');
define('LOGGED_IN_KEY',    '.b.!W17&W191D/e(zHHj:!+$k59ivwLfp8uC;EI~PLzFuwkw)+-sb/jjn=%:%#>S');
define('NONCE_KEY',        '}Cqu/]*~GE2,Cxx WY#OjsG|`H%w*/@Xv9Km]/7Az)//T>uo!($nv)G+^;UaV!Ss');
define('AUTH_SALT',        'MRkg#Wa92lfvl|Rv-}9?7nC;{f=.r)SlE@|L_eMr!>>y!+7zwQSof[Hb]ApdN-FZ');
define('SECURE_AUTH_SALT', 'rN~TW_<6>`%mvI+?}3K<{zo)-=IG#TSKU,J-sJ8R[*9pbz=V`7,nF[YBxY8!kkx/');
define('LOGGED_IN_SALT',   '!o5$f)-,-^_.c4;|o_J@4b>q065i:cy[-VY|$o4g~H0(!)q}ut-2R!)~/&Ox}L3I');
define('NONCE_SALT',       'NuD$y?~/;6n7^QHUI#AlBI;)9LF*Z6J=>$xY;RVeI*=/F}j-[bC~-=DHS+qd[|PA');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'jimik_cn_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * wp缓存
 */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/u1011/ace/workspace/php/appcode/webroot/htdocs/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
