<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="_id" id="id">
            <label for="" class="">Name</label>
            <input type="text" name="_name" id="name" autocomplete="off" class="form-control">
            <label for="" class="mt-2">Category</label>
            <select name="_category" id="category" class="form-control">
                <option value=""></option>
                <option value="laptop">laptop</option>
                <option value="phone">phone</option>
                <option value="headphone">headphone</option>
                <option value="powerbank">powerbank</option>
                <option value="earphone">earphone</option>
                <option value="controller">controller</option>
                <option value="console">console</option>
            </select>
            <input type="hidden" name="_old-img" id="old-img">
            <label for="" class="mt-2">Brand</label>
            <input type="text" name="_brand" id="brand" autocomplete="off" class="form-control">
            <label for="" class="mt-2">Price</label>
            <input type="text" name="_price" id="price" autocomplete="off" class="form-control">
            <div class="mt-2 gap-4">
                <!-- <label for="formFileSm" class="form-label file-label rounded d-flex justify-content-center align-items-center "><i class="fa-regular fa-image"></i></label> -->
                <label for="" class="">Image</label>
                <input class="form-control" name="_image" id="file-img" type="file">
            </div>
            <div class="mt-4 d-flex justify-content-between ">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="_update-btn" id="update-btn" class="btn btn-warning">Update</button>
              <button type="submit" name="_add-btn" id="add-btn" class="btn btn-primary">Add</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>