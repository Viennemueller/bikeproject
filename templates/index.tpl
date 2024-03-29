<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <!-- HERO SECTION-->
        <div class="container">
            <section class="hero pb-3 bg-cover bg-center d-flex align-items-center"
                style="background: url('images/specialbikeimage.jpg')">
                <div class="container py-5">
                    <div class="row px-4 px-lg-5">
                        <div class="col-lg-6">
                            <p class="text-muted small text-uppercase mb-2" style="color:rgb(0, 0, 0);">2023 New Bikes
                            </p>
                            <h1 class="h2 text-uppercase mb-2" style="color:rgb(0, 0, 0);">20% off specials</h1><a
                                class="btn btn-light" href="shop.php">Browse Bike Store</a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- CATEGORIES SECTION-->
            <section class="pt-5">
                <header class="text-center">
                    <p class="small text-muted small text-uppercase mb-1">Quality Bikes and Accessories</p>
                    <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
                </header>
                <div class="row">

                    <!-- CATEGORIES SECTION this div section gets replaced by the database categories dd the image varchar(255) to the-->
                    {$ListCategories}

                </div>
            </section>


            <!-- TRENDING PRODUCTS-->
            <section class="py-5">
                <header>
                    <p class="small text-muted small text-uppercase mb-1">Top Sellers</p>
                    <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
                </header>


                <div class="row">
                    <!-- PRODUCT   This whole section gets insert by the database  add the image varchar(255) to the products-->
                    {$ListProducts}


                </div>
            </section>
            <!-- SERVICES-->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row text-center gy-3">
                        <div class="col-lg-4">
                            <div class="d-inline-block">
                                <div class="d-flex align-items-end">
                                    <svg class="svg-icon svg-icon-big svg-icon-light">
                                        <use xlink:href="#delivery-time-1"> </use>
                                    </svg>
                                    <div class="text-start ms-3">
                                        <h6 class="text-uppercase mb-1">Free shipping</h6>
                                        <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-block">
                                <div class="d-flex align-items-end">
                                    <svg class="svg-icon svg-icon-big svg-icon-light">
                                        <use xlink:href="#helpline-24h-1"> </use>
                                    </svg>
                                    <div class="text-start ms-3">
                                        <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                                        <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-block">
                                <div class="d-flex align-items-end">
                                    <svg class="svg-icon svg-icon-big svg-icon-light">
                                        <use xlink:href="#label-tag-1"> </use>
                                    </svg>
                                    <div class="text-start ms-3">
                                        <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                                        <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- NEWSLETTER-->

        </div>
        {include file="footer.tpl"}
    </div>
</body>

</html>