<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <div class="container">


        <form action="customeredit?customer_id={$customer_id}.php" method="POST">
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
                        <div class="col-lg-12 form-group">
                        </div>
                        <input type="hidden" value="{$customer_id}" id="customer_id" name="customer_id" />
                        <div class="text-center">
                            <button type="submit" value="Save" id="save" name="save"
                                class="btn btn-primary">Save Changes</button>    

                            <a class="btn btn-secondary"
                                href="customeredit.php?remove=true&customer_id={$customer_id}"
                                role="button">Remove
                            </a>
                        </div>
                    </div>
                </form>



        </div>


        {include file="footer.tpl"}
    </div>
</body>


</html>
