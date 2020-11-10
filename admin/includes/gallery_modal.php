<!-- Description -->
<div class="modal fade" id="description">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Gallery</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="gallery_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="category" class="col-sm-1 control-label">Variant Type</label>
                     <div class="col-sm-5">
                    <select class="form-control" id="vrttype" name="vrttype" required>
                      <option value="" selected>- Select -</option>
                      <option value="Size" >Size</option>
                      <option value="Color" >Color</option>
                    </select>
                  </div>
                  <label for="name" class="col-sm-1 control-label">Variant</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="variant" name="variant" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="category" class="col-sm-1 control-label">Products</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="product" name="product" required>
                      <option value="" selected>- Select -</option>
                    </select>
                  </div>
                  <label for="price" class="col-sm-1 control-label">Price</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="price" name="price" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="photo" class="col-sm-1 control-label">Photo</label>
                  <div class="col-sm-5">
                    <input type="file" id="photo" name="photo">
                  </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="gallery_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>