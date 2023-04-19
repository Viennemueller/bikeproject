<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-01-23 04:19:16
         compiled from ".\templates\testsmarty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151694880363ce7b448e3e15-53603198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '754e4c30c1684b175e171ae00eda92501e2c959b' => 
    array (
      0 => '.\\templates\\testsmarty.tpl',
      1 => 1670849797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151694880363ce7b448e3e15-53603198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'version' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_63ce7b44903b09_97357274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63ce7b44903b09_97357274')) {function content_63ce7b44903b09_97357274($_smarty_tpl) {?>
<HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">
<?php echo $_smarty_tpl->tpl_vars['version']->value;?>


<b><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
<br> Username:<?php echo $_smarty_tpl->tpl_vars['username']->value;?>




</BODY>
</HTML>
<?php }} ?>
