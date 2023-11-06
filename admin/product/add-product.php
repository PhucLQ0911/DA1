<div class="container-fluid mt-4 px-4">
  <h1 class="mt-4">Add product</h1>
  <form enctype="multipart/form-data">

    <!-- Name product -->
    <div class="form-group mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control">
    </div>

    <!-- Categories -->
    <div class="form-group mb-3">
      <label class="form-label">Category</label>
      <select class="form-select">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>

    <!-- Image -->
    <div class="form-group mb-3">
      <label class="form-label">Image</label>
      <input type="file" class="form-control">
    </div>

    <!-- Price -->
    <div class="form-group mb-3">
      <label class="form-label">Price</label>
      <input type="number" class="form-control">
    </div>

    <!-- Product attributes -->
    <div class="form-group" id="product_attr_box">
      <span>Product attributes</span>
      <div class="row mt-3" id="attr_1">
        <!-- Price -->
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Price</label>
          <input type="text" name="price[]" placeholder="Price" class="form-control" required value="">
        </div>

        <!-- Quantity -->
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Quantity</label>
          <input type="text" name="qty[]" placeholder="Qty" class="form-control" required value="">
        </div>

        <!-- Size -->
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Size</label>
          <select class="form-control" name="size_id[]" id="size_id">
            <option value="size">Size</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
          </select>
        </div>

        <!-- Color -->
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Color</label>
          <select class="form-control" name="color_id[]" id="color_id">
            <option>Color</option>
            <option value="Color">Color 1</option>
            <option value="Color">Color 2</option>
            <option value="Color">Color 3</option>
          </select>
        </div>

        <!-- Image -->
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Image</label>
          <input type="file" name="qty[]" class="form-control" required>
        </div>

        <!-- Add more -->
        <div class="col-lg-2 d-flex justify-content-center align-items-end">
          <label for="categories" class="form-control-label"></label>
          <button id="" type="button" class="btn btn-lg btn-success btn-block" onclick="add_more_attr()">
            <span id="payment-button-amount">Add More</span>
          </button>
        </div>

      </div>
    </div>

    <!-- Description attributes -->
    <div class="form-group my-3">
      <label class="form-label">Description</label>
      <textarea class="form-control" placeholder="Leave a description product here" style="height: 100px"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Add</button>
  </form>



  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script>
    var attr_count = 1;

    function add_more_attr() {
      attr_count++;

      var size_html = jQuery('#attr_1 #size_id').html();
      var color_html = jQuery('#attr_1 #color_id').html();
      var html = `<div class="row mt-3" id="attr_${attr_count}">
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Price</label>
          <input type="text" name="price[]" placeholder="Price" class="form-control" required="" value="">
        </div>
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Quantity</label>
          <input type="text" name="qty[]" placeholder="Quantity" class="form-control" required="" value="">
        </div>
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Size</label>
          <select class="form-control" id="size_id" name="size_id[]">
          ${size_html}
          </select>
        </div>
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Color</label>
          <select class="form-control" id="color_id" name="color_id[]">
          ${color_html}
          </select>
        </div>
        <div class="col-lg-2">
          <label for="categories" class=" form-control-label">Image</label>
          <input type="file" name="qty[]" class="form-control" required>
        </div>
        <div class="col-lg-2 d-flex justify-content-center align-items-end ">
          <label for="categories" class=" form-control-label">&nbsp;</label>
          <button id="" type="button" class="btn btn-lg btn-danger btn-block px-4" onclick=remove_attr("${attr_count}")><span id="payment-button-amount">Remove</span>
          </button>
        </div>
      </div>`;
      jQuery('#product_attr_box').append(html);
    }

    function remove_attr(attr_count) {
      jQuery('#attr_' + attr_count).remove();
    }
  </script>
</div>