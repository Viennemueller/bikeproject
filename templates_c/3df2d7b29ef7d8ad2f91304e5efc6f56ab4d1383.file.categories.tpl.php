<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-04-19 05:55:18
         compiled from ".\templates\categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:688441667643fe4b6631724-12079345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df2d7b29ef7d8ad2f91304e5efc6f56ab4d1383' => 
    array (
      0 => '.\\templates\\categories.tpl',
      1 => 1680015363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '688441667643fe4b6631724-12079345',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_643fe4b66492a6_73797362',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_643fe4b66492a6_73797362')) {function content_643fe4b66492a6_73797362($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">


        <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Categories</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <br>
    <table id="example" class="table table-striped table-bordered datatable">
        <thead>
            <tr>
                <th scope="col">Edit</th>
                <th scope="col">Category Name</th>

            </tr>
        </thead>
        <tbody>

            <?php echo $_smarty_tpl->tpl_vars['categories']->value;?>


        </tbody>
    </table>
    <br><br>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>


</html><?php }} ?>