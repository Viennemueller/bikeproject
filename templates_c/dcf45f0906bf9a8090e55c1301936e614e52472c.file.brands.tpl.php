<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-04-18 06:04:01
         compiled from ".\templates\brands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:945754457643e95410dd4c4-46702499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcf45f0906bf9a8090e55c1301936e614e52472c' => 
    array (
      0 => '.\\templates\\brands.tpl',
      1 => 1680015302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '945754457643e95410dd4c4-46702499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brands' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_643e95410f5bd6_52525821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_643e95410f5bd6_52525821')) {function content_643e95410f5bd6_52525821($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h1 class="h2 text-uppercase mb-0">brands</h1>
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
                <th scope="col">Brand Name</th>

            </tr>
        </thead>
        <tbody>

            <?php echo $_smarty_tpl->tpl_vars['brands']->value;?>


        </tbody>
    </table>
    <br><br>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>


</html><?php }} ?>
