<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-05-09 05:39:38
         compiled from ".\templates\checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:781560803645a3f0a63a145-63394236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1489e51327453a85f41c60ff4f83c588d252956' => 
    array (
      0 => '.\\templates\\checkout.tpl',
      1 => 1681913284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '781560803645a3f0a63a145-63394236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'first_name' => 0,
    'last_name' => 0,
    'email' => 0,
    'phone' => 0,
    'company_name' => 0,
    'country' => 0,
    'street' => 0,
    'street2' => 0,
    'city' => 0,
    'state' => 0,
    'alternate_first_name' => 0,
    'alternate_last_name' => 0,
    'alternate_email' => 0,
    'alternate_phone' => 0,
    'alternate_company_name' => 0,
    'shipping_country' => 0,
    'alternate_street' => 0,
    'alternate_street2' => 0,
    'alternate_city' => 0,
    'alternate_state' => 0,
    'customer_id' => 0,
    'subtotal' => 0,
    'tax' => 0,
    'shipping' => 0,
    'grandtotal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_645a3f0a659746_58994992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_645a3f0a659746_58994992')) {function content_645a3f0a659746_58994992($_smarty_tpl) {?>
<!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->
        <div class="modal fade" id="productView" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content overflow-hidden border-0">
                    <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-0">
                        <div class="row align-items-stretch">
                            <div class="col-lg-6 p-lg-0"><a
                                    class="glightbox product-view d-block h-100 bg-cover bg-center"
                                    style="background: url(https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-5.aff049a7.jpg)"
                                    href="img/product-5.aff049a7.jpg" data-gallery="gallery1"
                                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                    href="img/product-5-alt-1.590676e9.jpg" data-gallery="gallery1"
                                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                    href="img/product-5-alt-2.bfa04461.jpg" data-gallery="gallery1"
                                    data-glightbox="Red digital smartwatch"></a></div>
                            <div class="col-lg-6">
                                <div class="p-4 my-md-4">
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                        </li>
                                        <li class="list-inline-item m-0 1"><i
                                                class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 2"><i
                                                class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 3"><i
                                                class="fas fa-star small text-warning"></i></li>
                                        <li class="list-inline-item m-0 4"><i
                                                class="fas fa-star small text-warning"></i></li>
                                    </ul>
                                    <h2 class="h4">Red digital smartwatch</h2>
                                    <p class="text-muted">$250</p>
                                    <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                        ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis
                                        dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam
                                        convallis.</p>
                                    <div class="row align-items-stretch mb-4 gx-0">
                                        <div class="col-sm-7">
                                            <div
                                                class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                <span
                                                    class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                                <div class="quantity">
                                                    <button class="dec-btn p-0"><i
                                                            class="fas fa-caret-left"></i></button>
                                                    <input class="form-control border-0 shadow-0 p-0" type="text"
                                                        value="1">
                                                    <button class="inc-btn p-0"><i
                                                            class="fas fa-caret-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5"><a
                                                class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                                                href="cart.php">Add to cart</a></div>
                                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                                            class="far fa-heart me-2"></i>Add to wish list</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- HERO SECTION-->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h2 text-uppercase mb-0">Checkout</h1>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                    <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-dark" href="cart.php">Cart</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5">
                <!-- BILLING ADDRESS-->
                <h2 class="h5 text-uppercase mb-4">Billing details</h2>
                <div class="row">
                <div class="col-lg-8">
                <form action="index.php" method="POST">
                <div class="row gy-3">
                <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="firstName">First name
                    </label>

                    <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>

                </div>
                <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="lastName">Last name
                    </label>
                    <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>

                </div>
                
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="email">Email address
                                    </label>
                                    <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                                   
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="phone">Phone number
                                    </label>
                                    <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>

                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="company">Company name
                                        (optional) </label>
                                        <?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>

                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="form-label text-sm text-uppercase" for="country">Country</label>
                                    <?php echo $_smarty_tpl->tpl_vars['country']->value;?>

                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label text-sm text-uppercase" for="address">Address line 1
                                    </label>
                                    <?php echo $_smarty_tpl->tpl_vars['street']->value;?>

                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label text-sm text-uppercase" for="addressalt">Address line 2
                                    </label>
                                    <?php echo $_smarty_tpl->tpl_vars['street2']->value;?>

                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="city">Town/City </label>
                                    <?php echo $_smarty_tpl->tpl_vars['city']->value;?>

                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-sm text-uppercase" for="state">State/County
                                    </label>
                                    <?php echo $_smarty_tpl->tpl_vars['state']->value;?>

                                </div>
                                <div class="col-lg-6">
                                    <button class="btn btn-link text-dark p-0 shadow-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#alternateAddress">
                                        <div class="form-check">
                                            <input class="form-check-input" id="alternateAddressCheckbox"
                                                type="checkbox">
                                            <label class="form-check-label" for="alternateAddressCheckbox">Alternate
                                                shipping address</label>
                                        </div>
                                    </button>
                                </div>
                                <div class="collapse" id="alternateAddress">
                                    <div class="row gy-3">
                                        <div class="col-12 mt-4">
                                            <h2 class="h4 text-uppercase mb-4">Alternative shipping details</h2>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-sm text-uppercase" for="firstName2">First
                                                name
                                            </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_first_name']->value;?>

                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-sm text-uppercase" for="lastName2">Last
                                                name
                                            </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_last_name']->value;?>

                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-sm text-uppercase" for="email2">Email
                                                address
                                            </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_email']->value;?>

                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-sm text-uppercase" for="phone2">Phone
                                                number
                                            </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_phone']->value;?>

                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-sm text-uppercase" for="company2">Company
                                                name
                                                (optional) </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_company_name']->value;?>

                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="form-label text-sm text-uppercase"
                                                for="countryAlt">Country</label>
                                            <?php echo $_smarty_tpl->tpl_vars['shipping_country']->value;?>

                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label text-sm text-uppercase" for="address2">Address
                                                line 1 </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_street']->value;?>

                                        </div>
                                        <div class="col-lg-12">
                                            <label class="form-label text-sm text-uppercase"
                                                for="addressalt2">Address
                                                line 2 </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_street2']->value;?>

                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-sm text-uppercase" for="city2">Town/City
                                            </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_city']->value;?>

                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label text-sm text-uppercase"
                                                for="state2">State/County
                                            </label>
                                            <?php echo $_smarty_tpl->tpl_vars['alternate_state']->value;?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 form-group">
                                </div>
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" id="customer_id" name="customer_id" />
                                <div class="text-center">
                                    <button type="submit" value="Save" id="save" name="save"
                                        class="btn btn-primary">Place order</button>    

                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- ORDER SUMMARY-->
                    <div class="col-lg-4">
                        <div class="card border-0 rounded-0 p-lg-4 bg-light">
                            <div class="card-body">
                                <h5 class="text-uppercase mb-4">Your order</h5>
                                <ul class="list-unstyled mb-0">
                             <li class="d-flex align-items-center justify-content-between"><strong
                                            class="text-uppercase small font-weight-bold">Subtotal</strong><span
                                            class="text-muted small">$<?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</span></li>
                                    <li class="border-bottom my-2"></li>
                                    <li class="d-flex align-items-center justify-content-between"><strong
                                    class="text-uppercase small font-weight-bold">Tax</strong><span
                                    class="text-muted small">$<?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</span></li>
                            <li class="border-bottom my-2"></li>
                            <li class="d-flex align-items-center justify-content-between"><strong
                            class="text-uppercase small font-weight-bold">Shipping</strong><span
                            class="text-muted small">$<?php echo $_smarty_tpl->tpl_vars['shipping']->value;?>
</span></li>
                    <li class="border-bottom my-2"></li>
                                    <li class="d-flex align-items-center justify-content-between"><strong
                                    class="text-uppercase small font-weight-bold">Grandtotal</strong><span
                                    class="text-muted small">$<?php echo $_smarty_tpl->tpl_vars['grandtotal']->value;?>
</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>

</html><?php }} ?>
