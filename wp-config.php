<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'Delfiano');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'Delfianokahve');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'K1b7d7y7');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o4o%lnkz/`vhn|wr)Vw,ZdfZ cL0u/4-,GkxBA%s^/Z:wq4oif!Y|dO!N]^z}Af0');
define('SECURE_AUTH_KEY',  '(Io&ILKnDjS>I 70]GCgOFAMequ@ACvlz0w+vpR`bgVe+}F^g[KB#7^XrWf}E;<y');
define('LOGGED_IN_KEY',    'Gt14>EIC|wmw6)0%Y8,;AbQ94Zc?46V]wm_`.N53_Im3v7u7}4DnJ67cz|VV/WVV');
define('NONCE_KEY',        'kSg`)EGx6Gt<D@M-VNhv--CNOHD^C0i4a:b}Z,G<.5V!G{5Zp)immb&Q)=bg88N)');
define('AUTH_SALT',        'IOo<t!<kwEy9MX)ahXtjqcgCRZZr,WpzpTuCRq.A!y[fA$<q<Bqp$0toECrr`>qP');
define('SECURE_AUTH_SALT', '(Tysnxxc}2`(7hd4#`7A3SR!2J!i,zN,3S?m#D]p*`H4sM8x9.Z&m];l5,t9_^]2');
define('LOGGED_IN_SALT',   'a[N4Os WCj#-4>EGWa@tNP_,e!6a/vDW-3y^I1P:g5&|t*_4JyGMleju!a@|!2u]');
define('NONCE_SALT',       '|gh6ZY[bWL3;JWNSoM@W3 AOo;1IHSU6+/p3qJDLkNUPoE`yQa{O%u4p#+-^Bgua');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
