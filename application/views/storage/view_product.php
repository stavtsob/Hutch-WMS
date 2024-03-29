
<div class="addproduct_form">
<?php echo validation_errors(); ?>
    <h3><?php echo $lang->line('change_product_stock'); ?></h3>
    <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label"><?php echo $lang->line('product_stock'); ?></label>
        <div class="col-sm-10" >
            <input type="number" class="form-control" id="quantity" name="stock" min="0" value=1  style="display: inline-block;width: 100px;margin-right:25px;" required>
            <button type="button" id="increase_btn" class="btn btn-success round-btn" >+</button>
            <button type="button" id="decrease_btn" class="btn btn-danger round-btn">-</button>
        </div>
        <div style="display: inline-block;">
            
        </div>
    </div>
    <h3><?php echo $lang->line('edit_product'); ?></h3>
    <form method="POST" action="">
    <div class="form-group row" >
        <label for="name" class="col-sm-2 col-form-label"><?php echo $lang->line('product_name'); ?></label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $item['name']; ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="brand" class="col-sm-2 col-form-label"><?php echo $lang->line('product_brand'); ?></label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $item['brand']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="barcode" class="col-sm-2 col-form-label"><?php echo $lang->line('product_barcode'); ?></label>
        <div class="col-sm-10">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#barcodes_list">
            <?php echo $lang->line('view_barcodes');?>
        </button>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addbarcode">
            <?= $lang->line("add_barcode") ?>
        </button>
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label" ><?php echo $lang->line('product_price'); ?></label>
        <div class="col-sm-10">
        <input type="number" class="form-control" id="price" name="price" value="<?php echo $item['price']; ?>"  step="0.01" min="0" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label"><?php echo $lang->line('product_stock'); ?></label>
        <div class="col-sm-10">
        <input type="number" class="form-control" id="stock" name="stock" min="0" value=<?php echo $item['stock']; ?> required>
        </div>
    </div>
    <div class="form-group row">
        <label for="expires_at" class="col-sm-2 col-form-label"><?php echo $lang->line('product_expiration'); ?></label>
        <div class="col-sm-10">
        <input type="date" class="form-control" id="expires_at" name="expires_at" value="<?php echo $item['expires_at']; ?>">
        </div>
        <input type="text" class="form-control" id="id" name="id" value="<?php echo $item['id']; ?>" required hidden>
    </div>
    <div class="form-group row">
        <label for="color" class="col-sm-2 col-form-label"><?php echo $lang->line('product_color'); ?></label>
        <div class="col-sm-10">
            <select class="form-control" id="color" name="color"  style="display: inline-block; width: 50%;">
                <option value="unknown" ><?php echo $lang->line('unknown'); ?></option>
                <option value="black" ><?php echo $lang->line('black'); ?></option>
                <option value="gray" ><?php echo $lang->line('gray'); ?></option>
                <option value="white" ><?php echo $lang->line('white'); ?></option>
                <option value="red" ><?php echo $lang->line('red'); ?></option>
                <option value="darkred" ><?php echo $lang->line('darkred'); ?></option>
                <option value="yellow" ><?php echo $lang->line('yellow'); ?></option>
                <option value="orange" ><?php echo $lang->line('orange'); ?></option>
                <option value="gold" ><?php echo $lang->line('gold'); ?></option>
                <option value="silver" ><?php echo $lang->line('silver'); ?></option>
                <option value="blue"><?php echo $lang->line('blue'); ?></option>
                <option value="darkblue"><?php echo $lang->line('darkblue'); ?></option>
                <option value="green" ><?php echo $lang->line('green'); ?></option>
                <option value="darkgreen" ><?php echo $lang->line('darkgreen'); ?></option>
            </select>
            <div id="color_box"></div>
        </div>
        <br> <br>
    <div class="form-group row">
        <p class="col-sm-2 col-form-label"><?php echo $lang->line('product_notes'); ?></p>
        <div class="col-sm-10" >
            <textarea class="form-control" rows="4" cols="50" id="notes" name="notes">
            </textarea>
        </div>
    </div>
    </div>
</form>
<!-- MODALS -->
<div class="modal fade" id="barcodes_list" tabindex="-1" role="dialog" aria-labelledby="barcodes list" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="barcodes_list_label">Barcodes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
            foreach($barcodes as $barcode)
            {
                echo $barcode['code'] . '<br>';
            }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Modal 2-->
<div class="modal fade" id="addbarcode" tabindex="-1" role="dialog" aria-labelledby="addbarcodelabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addbarcodelabel"><?php echo $lang->line('add_barcode_label');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="barcode" id="new_barcode" style="width:100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="add_barcode_btn"><?php echo $lang->line('add');?></button>
      </div>
    </div>
  </div>
</div>
<!-- END OF MODALS -->
<script>
        $("#color").val("<?php echo $item['color'];?>")
        $('#color').change(function()
        {
            $('#color_box').css('background-color',$('#color').val());
        });
</script>


<script src="<?php echo base_url('js/ajax/add_barcode.js');?>" type="text/javascript" id="ajax_barcode" data-base_url="<?php echo base_url()?>" data-item_id="<?= $item['id']?>"></script>
<script src="<?php echo base_url('js/ajax/stock_buttons.js');?>" type="text/javascript" id="ajax_stock_buttons" data-base_url="<?php echo base_url()?>" ></script>