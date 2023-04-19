<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-01-23 06:17:31
         compiled from ".\templates\testsmarty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100879806463ce96fb4daaf8-63881170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fbd06773a9422354e7db158931d9bb920a5ede7' => 
    array (
      0 => '.\\templates\\testsmarty.tpl',
      1 => 1670941423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100879806463ce96fb4daaf8-63881170',
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
  'unifunc' => 'content_63ce96fb4f8891_37483149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63ce96fb4f8891_37483149')) {function content_63ce96fb4f8891_37483149($_smarty_tpl) {?>
<HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">
<?php echo $_smarty_tpl->tpl_vars['version']->value;?>


<b><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
<b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b>



</BODY>
</HTML>
<?php }} ?>
