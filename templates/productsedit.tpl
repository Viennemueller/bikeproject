<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <div class="container">

            <form action="productsedit.php?product_id={$product_id}" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="productId">Product Name
                        </label>

                        {$product_name}
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="brandId"> Brand Id 
                        </label>
                        {$brand_id}
                    </div>
                    <div class="col-lg-6">
                    <label class="form-label text-sm text-uppercase" for="categoryId">Category Id 
                    </label>
                    {$category_id}
                    
                </div>
                <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="modelYear">Model year
                </label>
                {$model_year}
            </div>
            <div class="col-lg-6">
            <label class="form-label text-sm text-uppercase" for="listPrice">List price
            </label>
            {$list_price}
        </div>
        <div class="col-lg-6">
        <label class="form-label text-sm text-uppercase" for="sku"> Sku
        </label>
        {$sku}
    </div>
    
<div class="col-lg-6">
    <label class="form-label text-sm text-uppercase" for="tags"> Tags
    </label>
    {$tags}
</div>
<div class="col-lg-6">
    <label class="form-label text-sm text-uppercase" for="description"> Description
    </label>
    {$description}
</div>
                </div>
                <div class="col-lg-12 form-group">
                </div>
                <input type="hidden" value="{$product_id}" id="product_id" name="product_id" />
                <div class="text-center">
                    <button type="submit" value="Save" id="save" name="save" class="btn btn-primary">Save
                        Changes</button>    

                    <a class="btn btn-secondary" href="productsedit.php?remove=true&product_id={$product_id}"
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

                {$stocks}

            </tbody>
        </table>
        <br><br>
    </div>

        {include file="footer.tpl"}
    </div>
</body>


</html>