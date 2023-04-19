<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-02-06 08:07:45
         compiled from "shop.php" */ ?>
<?php /*%%SmartyHeaderCode:43688107563e125d194faa0-58183213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a54da2b99d4a4598f3cf660c164d1015719b33ab' => 
    array (
      0 => 'shop.php',
      1 => 1675695985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43688107563e125d194faa0-58183213',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_63e125d1962b29_68273522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e125d1962b29_68273522')) {function content_63e125d1962b29_68273522($_smarty_tpl) {?><?php echo '<?php'; ?>


    require 'libs/Smarty.class.php';

    $smarty = new Smarty;
    $smarty->force_compile = true;
    $smarty->debugging = false;
    $smarty->caching = false;

    $smarty->cache_lifetime = 0;

    $smarty->assign("title", "BikeProject.com");
    session_start();

    include('DatabaseClassConfig.php');

    //Place Code here






    //End Code Here



            if(  $_SESSION["username"] == ""  )
            {

                $smarty->assign("loginbutton",  "Login" );
                $smarty->assign("accountdropdown",  "hidden" );
            }
            else
            {
                $smarty->assign("loginbutton",  "Logout" );
                $smarty->assign("accountdropdown",  "visible" );
            }


    $smarty->display('shop.php');


<?php echo '?>'; ?>
<?php }} ?>
