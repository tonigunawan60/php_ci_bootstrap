<!-- Modal Add Product--> 
<form action="/product/save" method="post">
    <div class="modal fade" id="addModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modaltitle" id="exampleModalLabel">Add New Product</h5> 
            <button type="button" class="close" datadismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="formcontrol" name="product_name" placeholder="Product Name">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="formcontrol" name="product_price" placeholder="Product Price">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="product_category" class="form-control"> 
                    <option value="">-Select-</option>
                    <?php foreach($category as $row):?>
                        <option value="<?= $row->category_id;?>"><?= $row>category_name;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" datadismiss="modal">Close</button>
                <button type="submit" class="btn btnprimary">Save</button>
            </div>
            </div>
        </div>
        </div>
    </form> 