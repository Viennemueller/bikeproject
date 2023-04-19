<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-02-06 07:14:43
         compiled from "checkout.php" */ ?>
<?php /*%%SmartyHeaderCode:56212844763e119639146f7-22470787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b9e7b57e2724e987f24cbb489a30e298c6bd8e' => 
    array (
      0 => 'checkout.php',
      1 => 1675696172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56212844763e119639146f7-22470787',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_63e119639297f7_89764411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63e119639297f7_89764411')) {function content_63e119639297f7_89764411($_smarty_tpl) {?><?php echo '<?php'; ?>


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


    $smarty->display('checkout.php');


<?php echo '?>'; ?>
<?php }} ?>
