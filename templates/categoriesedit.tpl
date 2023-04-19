<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <div class="container">


        <form action="categoriesedit?category_id={$category_id}.php" method="POST">
        <div class="row gy-3">
        <div class="col-lg-6">
            <label class="form-label text-sm text-uppercase" for="categoryName">Category name
            </label>

            {$category_name}
        </div>
                        <div class="col-lg-12 form-group">
                        </div>
                        <input type="hidden" value="{$category_id}" id="category_id" name="category_id" />
                        <div class="text-center">
                            <button type="submit" value="Save" id="save" name="save"
                                class="btn btn-primary">Save Changes</button>    

                            <a class="btn btn-secondary"
                                href="categoriesedit.php?remove=true&category_id={$category_id}"
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
