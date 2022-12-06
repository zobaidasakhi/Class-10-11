<?php

include "./inc/header.php";
?>
<h2>Add Banner</h2>
<div class="card">
    <div class="card-header bg-primary text-light">
        Add New Banner
</div>
<div>
    <div class= "card-body">
<form action="" method="">

<div class="row align-items-center">
<div class="col-lg-3">
<label for="bannerImg"><img src="https://www.decoratinghub.co.uk/wp-content/uploads/2022/05/product-placeholder.gif" alt="" style="width: 100%; display:block;">
<input type="file"class="d-none" id="bannerImg" name="banner_img">

</div>
<div class="col-lg-9">
    <label class="w-100">
        Insert a Banner Title <span class="text-danger">*</span>

<input type="text" name="title" class="form-control">

    </label>
    <label class="w-100">
        Insert a Banner Title Video Link<span class="text-danger">*</span>

<input type="text" name="video" class="form-control">

    </label>
    <label class="w-100">
        Insert a Banner Description<span class="text-danger">*</span>

<textarea name="detail" class="form-control" ></textarea>

    </label>
</div>


</div>
<button class="btn btn-primary float-right" >Insert Banner</button>

</form>

    </div>
</div>

<?php

include "./inc/footer.php";
?>
