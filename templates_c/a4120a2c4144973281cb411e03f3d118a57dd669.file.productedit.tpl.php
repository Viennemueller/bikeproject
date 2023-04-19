<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-04-13 06:28:41
         compiled from ".\templates\productedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15008639536438038990db87-76273061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4120a2c4144973281cb411e03f3d118a57dd669' => 
    array (
      0 => '.\\templates\\productedit.tpl',
      1 => 1681392475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15008639536438038990db87-76273061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'product_name' => 0,
    'brand_id' => 0,
    'category_id' => 0,
    'model_year' => 0,
    'list_price' => 0,
    'sku' => 0,
    'category' => 0,
    'tags' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_64380389928b05_83546925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64380389928b05_83546925')) {function content_64380389928b05_83546925($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">

            <form action="productedit?product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
.php" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="customerId">Product Name
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="orderStatus"> Brand Id 
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>

                    </div>
                    <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="orderDate">Category Id 
                    </label>
                    <?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>

                    
                </div>
                <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="requiredDate">Model year
                </label>
                <?php echo $_smarty_tpl->tpl_vars['model_year']->value;?>

            </div>
            <div class="col-lg-6">
            <label class="form-label text-sm text-uppercase" for="shippedDate">List price
            </label>
            <?php echo $_smarty_tpl->tpl_vars['list_price']->value;?>

        </div>
        <div class="col-lg-6">
        <label class="form-label text-sm text-uppercase" for="storeId"> Sku
        </label>
        <?php echo $_smarty_tpl->tpl_vars['sku']->value;?>

    </div>
    <div class="col-lg-6">
    <label class="form-label text-sm text-uppercase" for="staffId"> Category
    </label>
    <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

</div>
<div class="col-lg-6">
    <label class="form-label text-sm text-uppercase" for="staffId"> Tags
    </label>
    <?php echo $_smarty_tpl->tpl_vars['tags']->value;?>

</div>
<div class="col-lg-6">
    <label class="form-label text-sm text-uppercase" for="staffId"> Description
    </label>
    <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

</div>
                </div>
                <div class="col-lg-12 form-group">
                </div>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" id="product_id" name="product_id" />
                <div class="text-center">
                    <button type="submit" value="Save" id="save" name="save" class="btn btn-primary">Save
                        Changes</button>    

                    <a class="btn btn-secondary" href="productedit.php?remove=true&product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
"
                        role="button">Remove
                    </a>
                </div>
        </div>
        </form>

        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>


</html><?php }} ?>
