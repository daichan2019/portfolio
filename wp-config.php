<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YV&[52%=IKlS^gBn@Ozg{40.Dndg``hd^zb(nyQZ/S>%Tt+D|:h~UbWLxW|>Cw._' );
define( 'SECURE_AUTH_KEY',  '!%QkZ(K{8Prmd4=MaF&h6%QQH.|hSVbGU-op-]8],O[_5iW%C.9]Hf3,hqYM5@ z' );
define( 'LOGGED_IN_KEY',    '0,3!//N|aM+1g;t-5zppC_Z{}ip4u!S+<|8l0~7,nvZV 4{Dgm9L0d~NX&}@hOO9' );
define( 'NONCE_KEY',        'T,jLvL6w-eUb~p7sXEQ4 Gy*2NiP[rle%ZzYw8A71a9~:})cOKk7Bi@qKzvNlU]@' );
define( 'AUTH_SALT',        '0AeU94 3yFRzc;3i=4~*+(?;Gf?i/HUynAkLHC,rt.rvn5T#WT8Tb~FLNWdAU3-@' );
define( 'SECURE_AUTH_SALT', ')(8U}+oYZvjzp tG}{raksZ~?CbW!S4 H=c1S%HG*ez1K{~aX2k6x^2VF]v7kypm' );
define( 'LOGGED_IN_SALT',   ' K&y,J8Lz:B%C`?hSrA`obo]@36EV*DVh+,]uDyy{uET;uyg!%Zhz+4-H]X(IjJl' );
define( 'NONCE_SALT',       '3zE9F&m|nKt8iME0QI[sp^:gjNLF WRE$yP2/hXiwvg7Utp4.kUugA9x:S%Y<Ckb' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
