<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-04-18 08:08:57
         compiled from ".\templates\productedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:698920402643eb289055239-55416061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02eb7b623989a880e1d117673df351199bfa95fe' => 
    array (
      0 => '.\\templates\\productedit.tpl',
      1 => 1681830534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698920402643eb289055239-55416061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'customer_id' => 0,
    'product_status' => 0,
    'product_date' => 0,
    'required_date' => 0,
    'shipped_date' => 0,
    'store_id' => 0,
    'staff_id' => 0,
    'stock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_643eb28906f099_40611301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_643eb28906f099_40611301')) {function content_643eb28906f099_40611301($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">

            <form action="productsedit?product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
.php" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="customerId">Customer
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="productStatus">product status
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['product_status']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="productDate">product date
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['product_date']->value;?>


                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="requiredDate">Required date
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['required_date']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="shippedDate">Shipped date
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['shipped_date']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="storeId">Store Id
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="staffId">Staff Id
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['staff_id']->value;?>

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

                        <?php echo $_smarty_tpl->tpl_vars['stock']->value;?>


                    </tbody>
                </table>
                <br><br>
        </div>
        </form>

        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>


</html><?php }} ?>
