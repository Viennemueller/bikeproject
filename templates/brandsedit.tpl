<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <div class="container">


        <form action="brandsedit?brand_id={$brand_id}.php" method="POST">
        <div class="row gy-3">
        <div class="col-lg-6">
            <label class="form-label text-sm text-uppercase" for="brandName">brand name
            </label>

            {$brand_name}
        </div>
                        <div class="col-lg-12 form-group">
                        </div>
                        <input type="hidden" value="{$brand_id}" id="brand_id" name="brand_id" />
                        <div class="text-center">
                            <button type="submit" value="Save" id="save" name="save"
                                class="btn btn-primary">Save Changes</button>    

                            <a class="btn btn-secondary"
                                href="brandsedit.php?remove=true&brand_id={$brand_id}"
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
