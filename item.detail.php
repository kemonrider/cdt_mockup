<?php include("_header.php") ?>
<?php include("_navbar.php") ?>

<div class="page page-item-detail">
  
  <div class="container">
    
    <form class="form form-horizontal">
      
      <h4>Demand ID : 1234567890</h4>
      <h3>Request Item ID : 1234567890-01</h3>
      
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Client</label>
            <div class="col-sm-8">
              <p class="form-control-static">: Unilever</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Channel</label>
            <div class="col-sm-8">
              <p class="form-control-static">: B2G</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Type</label>
            <div class="col-sm-8">
              <p class="form-control-static">: Project</p>
            </div>
          </div>
        </div>
      </div><!-- .row -->
      
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Product Name</label>
            <div class="col-sm-8">
              <p class="form-control-static">: HP Probook G3</p>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="form-group">
            <label class="control-label col-sm-2">Comment</label>
            <div class="col-sm-10">
              <p class="form-control-static">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quasi nisi est, totam velit quod iusto neque, voluptatem rerum, quia veniam in illo voluptas numquam ipsum quos? Nihil, dolore possimus.</p>
            </div>
          </div>
        </div>
      </div><!-- .row -->
      
      <div class="item-exist">
        <div class="row">
          <div class="col-sm-2">
            <label class="control-label">MBIZ SKU Exist</label>
          </div>
          <div class="col-sm-2">
            <?php if($role == "ca"){ ?>
            <select  class="form-control" data-toggle-action="item-exist">
              <option value="true">EXIST</option>
              <option value="false">NOT EXIST</option>
            </select>
            <?php } ?>
          </div>
        </div>
        <div class="row" data-toggle-child="item-exist" data-toggle-key="true">
          <div class="col-sm-10 col-sm-offset-2">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>MBiz SKU</th>
                  <th>Vendor</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Availability</th>
                </tr>
              </thead>
              <tbody>
                <?php if($role == "ca"){ ?>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><span>-</span></td>
                    <td><span>-</span></td>
                    <td><span>-</span></td>
                    <td><span>-</span></td>
                  </tr>
                <?php }elseif($role == "va"){ ?>
                  <tr>
                    <td><span>MBIZ1234567890</span></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="checkbox"></td>
                  </tr>
                <?php }else{ ?>
                  <tr>
                    <td><span>-</span></td>
                    <td><span>-</span></td>
                    <td><span>-</span></td>
                    <td><span>-</span></td>
                    <td><span>-</span></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div><!-- .row -->
      </div><!-- .item-exist -->
      
      <?php if($role != "ca"){ ?>
      <div class="item-found">
        <div class="row">
          <div class="col-sm-2">
            <label class="control-label">Item Found</label>
          </div>
          <div class="col-sm-2">
            <?php if($role == "ca" || $role == "client"){ ?>
              <p class="form-control-static">FOUND</p>
            <?php } elseif($role == "sourcing")  { ?>
              <select  class="form-control" data-toggle-action="item-found">
                <option value="true">FOUND</option>
                <option value="false">NOT FOUND</option>
              </select>
            <?php } ?>
          </div>
        </div><!-- .row -->
        <div class="row default-hidden" data-toggle-child="item-found" data-toggle-key="false">
          <div class="col-sm-10 col-sm-offset-2">
            <div class="form-group">
              <div class="col-sm-3"><label class="control-label">Not Found Reason : </label></div>
              <div class="col-sm-4">
                <select class="form-control">
                  <option>Discontinued</option>
                  <option>Out of Stock</option>
                  <option>Limited Stock</option>
                  <option>Vendor not Found</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-3"><label class="control-label">Comment : </label></div>
              <div class="col-sm-4">
                <textarea cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>
          </div>
        </div><!-- .row -->
        <div class="row" data-toggle-child="item-found" data-toggle-key="true">
          <div class="col-sm-10 col-sm-offset-2">
            <?php if($role == "sourcing"){ ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Vendor</th>
                    <th>PIC</th>
                    <th>PIC Phone Number</th>
                    <th>Price</th>
                    <th>Tax Status</th>
                    <th>Availability</th>
                    <th>Reference</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                </tbody>
              </table>
            <?php } else { ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Vendor</th>
                    <th>PIC</th>
                    <th>PIC Phone Number</th>
                    <th>Price</th>
                    <th>Tax Status</th>
                    <th>Availability</th>
                    <th>Mbiz SKU</th>
                    <th>Live Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>AAA</td>
                    <td>Ahmad Ramdani</td>
                    <td>081234567890</td>
                    <td>Rp 123.456</td>
                    <td>PKP</td>
                    <td>AVAILABLE</td>
                    <?php if($role == "content"){ ?>
                      <td><input type="text" class="form-control"></td>
                    <?php }else{ ?>
                      <td>SKU1234567</td>
                    <?php } ?>
                    <?php if($role == "va"){ ?>
                      <td><label class="control-label text-center"><input type="checkbox"></label></td>
                    <?php } else { ?>
                      <td>LIVE</td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <td>AAA</td>
                    <td>Ahmad Ramdani</td>
                    <td>081234567890</td>
                    <td>Rp 123.456</td>
                    <td>NON PKP</td>
                    <td>AVAILABLE</td>
                    <?php if($role == "content"){ ?>
                      <td><input type="text" class="form-control"></td>
                    <?php }else{ ?>
                      <td>SKU1234567</td>
                    <?php } ?>
                    <?php if($role == "va"){ ?>
                      <td><label class="control-label text-center"><input type="checkbox"></label></td>
                    <?php } else { ?>
                      <td>LIVE</td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
            <?php } ?>
          </div>
        </div><!-- .row -->
      </div><!-- .item-found -->
      <?php } ?>
        
      <?php if($role != "ca"){ ?>
      <div class="item-alternative">
        <div class="row">
          <div class="col-sm-2">
            <label class="control-label">Item Alternative</label>
          </div>
          <div class="col-sm-2">
            <?php if($role == "ca"){ ?>
              <p class="form-control-static">NO</p>
            <?php } elseif($role == "sourcing") { ?>
              <select  class="form-control" data-toggle-action="item-alternative">
                <option value="false">NO</option>
                <option value="true">YES</option>
              </select>
            <?php } ?>
          </div>
        </div><!-- .row -->
        <div class="row">
          <div class="col-sm-10 col-sm-offset-2">
            <?php if($role == "sourcing"){ ?>
              <table class="table table-bordered default-hidden" data-toggle-child="item-alternative" data-toggle-key="true">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Vendor</th>
                    <th>PIC</th>
                    <th>PIC Phone Number</th>
                    <th>Price</th>
                    <th>Tax Status</th>
                    <th>Availability</th>
                    <th>Reference</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                    <td><input type="text" class="form-control"></td>
                  </tr>
                </tbody>
              </table>
            <?php }else{ ?>
              <table class="table table-bordered">
                <thead>
                  <th>Product Name</th>
                  <th>Vendor</th>
                  <th>PIC</th>
                  <th>PIC Phone Number</th>
                  <th>Price</th>
                  <th>Tax Status</th>
                  <th>Availability</th>
                  <th>Mbiz SKU</th>
                  <th>Live Status</th>
                </thead>
                <tbody>
                  <tr>
                    <td>Lenovo</td>
                    <td>AAA</td>
                    <td>Ahmad Ramdani</td>
                    <td>081234567890</td>
                    <td>Rp 123.456</td>
                    <td>PKP</td>
                    <td>AVAILABLE</td>
                                    <?php if($role == "content"){ ?>
                      <td><input type="text" class="form-control"></td>
                    <?php }else{ ?>
                      <td>SKU1234567</td>
                    <?php } ?>
                    <?php if($role == "va"){ ?>
                      <td><label class="control-label text-center"><input type="checkbox"></label></td>
                    <?php } else { ?>
                      <td>LIVE</td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <td>Sony VAIO</td>
                    <td>AAA</td>
                    <td>Ahmad Ramdani</td>
                    <td>081234567890</td>
                    <td>Rp 123.456</td>
                    <td>NON PKP</td>
                    <td>AVAILABLE</td>
                                    <?php if($role == "content"){ ?>
                      <td><input type="text" class="form-control"></td>
                    <?php }else{ ?>
                      <td>SKU1234567</td>
                    <?php } ?>
                    <?php if($role == "va"){ ?>
                      <td><label class="control-label text-center"><input type="checkbox"></label></td>
                    <?php } else { ?>
                      <td>LIVE</td>
                    <?php } ?>
                  </tr>
                </tbody>
              </table>
            <?php } ?>
          </div>
        </div><!-- .row -->
      </div><!-- .item-alternative -->
      <?php } ?>
    
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <a href="dashboard.php<?php echo("?role=$role") ?>" class="btn btn-primary btn-block">UPDATE</a>
        </div>
      </div><!-- .row -->
    
    </form>
    
  </div><!-- .container -->
  
</div><!-- .page -->

<?php include("_footer.php") ?>