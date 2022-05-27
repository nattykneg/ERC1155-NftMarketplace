<?php
// regarde readme.txt
function simple_php_captcha($config = array()) {
    // Check for GD library
    if( !function_exists('gd_info') ) {
        throw new Exception('Required GD library is missing');
    }
 
    $bg_path = dirname(__FILE__) . '/backgrounds/';
    $font_path = dirname(__FILE__) . '/fonts/';
    $path =  array('backgrounds/1.png','backgrounds/2.png');
    $src= $path[array_rand($path)];
    if ($src == 'backgrounds/1.png') {
        $colorFonts = '#fff';
    }else{
        $colorFonts = '#1c3664';
    }
    // Default values
    $captcha_config = array(
        'code' => '',
        'min_length' => 5,
        'max_length' => 5,
        'backgrounds' => $src,
        'fonts' => array($font_path . 'blurry.ttf'),
        'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZ0123456789',
        'min_font_size' => 30,
        'max_font_size' => 30,
        'color' => $colorFonts,
        'angle_min' => 0,
        'angle_max' => 10
    );

    // Overwrite defaults with custom config values
    if( is_array($config) ) {
        foreach( $config as $key => $value ) $captcha_config[$key] = $value;
    }

    // Restrict certain values
    if( $captcha_config['min_length'] < 1 ) $captcha_config['min_length'] = 1;
    if( $captcha_config['angle_min'] < 0 ) $captcha_config['angle_min'] = 0;
    if( $captcha_config['angle_max'] > 10 ) $captcha_config['angle_max'] = 10;
    if( $captcha_config['angle_max'] < $captcha_config['angle_min'] ) $captcha_config['angle_max'] = $captcha_config['angle_min'];
    if( $captcha_config['min_font_size'] < 10 ) $captcha_config['min_font_size'] = 10;
    if( $captcha_config['max_font_size'] < $captcha_config['min_font_size'] ) $captcha_config['max_font_size'] = $captcha_config['min_font_size'];

    // Generate CAPTCHA code if not set by user
    if( empty($captcha_config['code']) ) {
        $captcha_config['code'] = '';
        $length = mt_rand($captcha_config['min_length'], $captcha_config['max_length']);
        while( strlen($captcha_config['code']) < $length ) {
            $captcha_config['code'] .= substr($captcha_config['characters'], mt_rand() % (strlen($captcha_config['characters'])), 1);
        }
    }

    // Generate HTML for image src
    if ( strpos($_SERVER['SCRIPT_FILENAME'], $_SERVER['DOCUMENT_ROOT']) ) {
        $image_src = substr(__FILE__, strlen( realpath($_SERVER['DOCUMENT_ROOT']) )) . '?_CAPTCHA&amp;t=' . urlencode(microtime());
        $image_src = '/' . ltrim(preg_replace('/\\\\/', '/', $image_src), '/');
    } else {
        $_SERVER['WEB_ROOT'] = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['SCRIPT_FILENAME']);
        $image_src = '?_CAPTCHA&amp;t=' . urlencode(microtime());
        $image_src = '' . ltrim(preg_replace('/\\\\/', '/', $image_src), '/');
    }

    $_SESSION['_CAPTCHA']['config'] = serialize($captcha_config);

    return array(
        'code' => $captcha_config['code'],
        'image_src' => $image_src
    );

}
session_start();
$_SESSION['captcha'] = simple_php_captcha();
header("Content-type:application/json");
echo('{"photo":"'.$_SESSION['captcha']['image_src'].'","code":"'.$_SESSION['captcha']['code'].'"}');


