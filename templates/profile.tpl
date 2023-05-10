<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <div class="container">


            <div class="container">
                <!-- HERO SECTION-->
                <section class="py-5 bg-light">
                    <div class="container">
                        <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                            <div class="col-lg-6">
                                <h1 class="h2 text-uppercase mb-0">Customer Profile</h1>
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
                            <form action="profile.php" method="POST">
                                <div class="row gy-3">
                                    <div class="col-lg-6">
                                        <label class="form-label text-sm text-uppercase" for="firstName">First name
                                        </label>

                                        {$first_name}
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label text-sm text-uppercase" for="lastName">Last name
                                        </label>
                                        {$last_name}
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="form-label text-sm text-uppercase" for="email">Email address
                                        </label>
                                        {$email}

                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label text-sm text-uppercase" for="phone">Phone number
                                        </label>
                                        {$phone}
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label text-sm text-uppercase" for="company">Company name
                                            (optional) </label>
                                        {$company_name}
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label class="form-label text-sm text-uppercase" for="country">Country</label>
                                        {$country}
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label text-sm text-uppercase" for="address">Address line 1
                                        </label>
                                        {$street}
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label text-sm text-uppercase" for="addressalt">Address line 2
                                        </label>
                                        {$street2}
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label text-sm text-uppercase" for="city">Town/City </label>
                                        {$city}
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label text-sm text-uppercase" for="state">State/County
                                        </label>
                                        {$state}
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
                                                {$alternate_first_name}
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label text-sm text-uppercase" for="lastName2">Last
                                                    name
                                                </label>
                                                {$alternate_last_name}
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label text-sm text-uppercase" for="email2">Email
                                                    address
                                                </label>
                                                {$alternate_email}
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label text-sm text-uppercase" for="phone2">Phone
                                                    number
                                                </label>
                                                {$alternate_phone}
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label text-sm text-uppercase" for="company2">Company
                                                    name
                                                    (optional) </label>
                                                {$alternate_company_name}
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <label class="form-label text-sm text-uppercase"
                                                    for="countryAlt">Country</label>
                                                {$shipping_country}
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label text-sm text-uppercase" for="address2">Address
                                                    line 1 </label>
                                                {$alternate_street}
                                            </div>
                                            <div class="col-lg-12">
                                                <label class="form-label text-sm text-uppercase"
                                                    for="addressalt2">Address
                                                    line 2 </label>
                                                {$alternate_street2}
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label text-sm text-uppercase" for="city2">Town/City
                                                </label>
                                                {$alternate_city}
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label text-sm text-uppercase"
                                                    for="state2">State/County
                                                </label>
                                                {$alternate_state}
                                            </div>
                                        </div>
                                    </div>
                            
                                    <input type="hidden" value="{$customer_id}" id="customer_id" name="customer_id" />
                                    <div class="text-center">
                                        <input type="submit" value="Save" id="save" name="save">

                                    </div>
                                </div>
                            </form>
                        </div>



                    </div>


                    {include file="footer.tpl"}
            </div>
</body>


</html>