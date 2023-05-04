<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-05-04 07:20:02
         compiled from ".\templates\brandsedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:864785616453bf127b7258-23567565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ce1c7fdf756b9a01534be520ee1994bd9771533' => 
    array (
      0 => '.\\templates\\brandsedit.tpl',
      1 => 1683209014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '864785616453bf127b7258-23567565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand_id' => 0,
    'brand_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6453bf127cffa6_61020062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6453bf127cffa6_61020062')) {function content_6453bf127cffa6_61020062($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">


        <form action="brandsedit?brand_id=<?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>
.php" method="POST">
        <div class="row gy-3">
        <div class="col-lg-6">
            <label class="form-label text-sm text-uppercase" for="brandName">brand name
            </label>

            <?php echo $_smarty_tpl->tpl_vars['brand_name']->value;?>

        </div>
                        <div class="col-lg-12 form-group">
                        </div>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>
" id="brand_id" name="brand_id" />
                        <div class="text-center">
                            <button type="submit" value="Save" id="save" name="save"
                                class="btn btn-primary">Save Changes</button>    

                            <a class="btn btn-secondary"
                                href="brandsedit.php?remove=true&brand_id=<?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>
"
                                role="button">Remove
                            </a>
                        </div>
                    </div>
                </form>



        </div>


        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>


</html>
<?php }} ?>
