<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-04-19 07:02:11
         compiled from ".\templates\productsedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:867627687643ff463eb5c93-90347358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d103c7af418092b1685a1f25e88d01bb60f6212' => 
    array (
      0 => '.\\templates\\productsedit.tpl',
      1 => 1681912877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '867627687643ff463eb5c93-90347358',
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
    'stocks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_643ff463ed04e7_84290718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_643ff463ed04e7_84290718')) {function content_643ff463ed04e7_84290718($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">

            <form action="productsedit.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="productId">Product Name
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="brandId"> Brand Id 
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>

                    </div>
                    <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="categoryId">Category Id 
                    </label>
                    <?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>

                    
                </div>
                <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="modelYear">Model year
                </label>
                <?php echo $_smarty_tpl->tpl_vars['model_year']->value;?>

            </div>
            <div class="col-lg-6">
            <label class="form-label text-sm text-uppercase" for="listPrice">List price
            </label>
            <?php echo $_smarty_tpl->tpl_vars['list_price']->value;?>

        </div>
        <div class="col-lg-6">
        <label class="form-label text-sm text-uppercase" for="sku"> Sku
        </label>
        <?php echo $_smarty_tpl->tpl_vars['sku']->value;?>

    </div>
    <div class="col-lg-6">
    <label class="form-label text-sm text-uppercase" for="category"> Category
    </label>
    <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

</div>
<div class="col-lg-6">
    <label class="form-label text-sm text-uppercase" for="tags"> Tags
    </label>
    <?php echo $_smarty_tpl->tpl_vars['tags']->value;?>

</div>
<div class="col-lg-6">
    <label class="form-label text-sm text-uppercase" for="description"> Description
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

                    <a class="btn btn-secondary" href="productsedit.php?remove=true&product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
"
                        role="button">Remove
                    </a>
                </div>
                
        </div>
        </form>
        <div class="container">
        <br>
        <table id="example" class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th scope="col">Edit</th>
                    <th scope="col">Store Name</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>

                <?php echo $_smarty_tpl->tpl_vars['stocks']->value;?>


            </tbody>
        </table>
        <br><br>
    </div>

        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>


</html><?php }} ?>
