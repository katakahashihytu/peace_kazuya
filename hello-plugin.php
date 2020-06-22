<?php
/**
* @package Hello_Plugin
* @version 1.0
*/
/*
Plugin Name: Hello Plugin
Plugin URI: http://www.○○○.com/hello-plugin
Description: 管理画面の上部ツールバーに「Hello Plugin!!」と表示する。
Author: Kazuya
Version: 1.0
Author URI: http://www.○○○.com
*/
function hello_plugin() {
  echo "Hello Plugin!!";
}
add_action('admin_notices', 'hello_plugin');
?>
