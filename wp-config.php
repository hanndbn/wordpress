<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1&O!S+LyWDjrQ1KlE8dZ-8jlt|ZW9-a&I}:K4KE1St{<*r.~DKB8%G}INK_#B+,(' );
define( 'SECURE_AUTH_KEY',  '4,p:leG@%8i:E^ f~T>] ri}b;[k^0(K=>alfz`u4Qtzq;*N:JXAs&/jiT_-c_wp' );
define( 'LOGGED_IN_KEY',    '#PMc6X`Rz~ N<`4_5p)=rw+L2:l=.g;?P]3tOe1+MN{YS^I$BszGM?-H{92r-#~D' );
define( 'NONCE_KEY',        'ZH^n:D;w=>*&@drDOAz]#UB$b7{6z9fF(U-$kyE^vTV.=?sf8G`Lsrth?=#gg<la' );
define( 'AUTH_SALT',        'hp;|z]A7dKM[!@uYuGxFP1ws^}t17a`@Q&Rrb/E[kHlE,Te_N!t0|2$G{5D_j^}&' );
define( 'SECURE_AUTH_SALT', 'K<ID@UR|$qFMLOFR|/V4$=HlgpcOS%1bb~=4u_k+x+o2F_2j#pF|mu&=G2s#RH9c' );
define( 'LOGGED_IN_SALT',   'B#nWjv`EoZtv)H9CSQNUGH1?X`0tpP(k5m(H_T*JCo`aQ]f.Bf+5]RF+3,YT34fe' );
define( 'NONCE_SALT',       'CB]!Dj%l|7d-+l~8Z{)[3^2)JOTZ}ysKZ}XLxFAZWB9JV9Bu%;zF`KkVZy}}NPs@' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
