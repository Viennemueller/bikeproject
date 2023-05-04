<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-05-04 08:05:20
         compiled from ".\templates\orders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10365085876453c9b0635185-52505051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcae3e6db107e17f92dfed154d092898c8ef0c1c' => 
    array (
      0 => '.\\templates\\orders.tpl',
      1 => 1681913284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10365085876453c9b0635185-52505051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6453c9b064cbe1_83873461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6453c9b064cbe1_83873461')) {function content_6453c9b064cbe1_83873461($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->
        <div class="container">
            <!-- HERO SECTION-->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h2 text-uppercase mb-0">Orders</h1>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                    <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <table id="example" class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th scope="col">Edit</th>
                    <th scope="col">Customer name</th>
                    <th scope="col">Order status</th>
                    <th scope="col">Order date</th>
                    <th scope="col">Required date</th>
                    <th scope="col">Shipped date</th>
                    <th scope="col">Store name</th>
                </tr>
            </thead>
            <tbody>

                <?php echo $_smarty_tpl->tpl_vars['orders']->value;?>


            </tbody>
        </table>



        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body><?php }} ?>
