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
      
      <div class="row">
        <div class="col-sm-2">
          <label class="control-label">MBIZ SKU Exist</label>
        </div>
        <div class="col-sm-2">
          <select  class="form-control">
            <option>EXIST</option>
            <option>NOT EXIST</option>
          </select>
        </div>
      </div>
      <div class="row">
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
              <tr>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
                <td><input type="text" class="form-control"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div><!-- .row -->
      
      <div class="row">
        <div class="col-sm-2">
          <label class="control-label">Item Found</label>
        </div>
        <div class="col-sm-2">
          <?php if($role == "ca" || $role == "client"){ ?>
            <p class="form-control-static">FOUND</p>
          <?php } elseif($role == "sourcing")  { ?>
            <select  class="form-control">
              <option>FOUND</option>
              <option>NOT FOUND</option>
            </select>
          <?php } ?>
        </div>
      </div><!-- .row -->
      <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
          <table class="table table-bordered">
            <thead>
              <th>Vendor</th>
              <th>PIC</th>
              <th>PIC Phone Number</th>
              <th>Price</th>
              <th>Tax Status</th>
              <th>Availability</th>
              <th>SKU</th>
              <th>Live Status</th>
            </thead>
            <tbody>
              <tr>
                <td>AAA</td>
                <td>Ahmad Ramdani</td>
                <td>081234567890</td>
                <td>Rp 123.456</td>
                <td>PKP</td>
                <td>AVAILABLE</td>
                <td>SKU1234567</td>
                <td>LIVE</td>
              </tr>
              <tr>
                <td>AAA</td>
                <td>Ahmad Ramdani</td>
                <td>081234567890</td>
                <td>Rp 123.456</td>
                <td>NON PKP</td>
                <td>AVAILABLE</td>
                <td>SKU1234567</td>
                <td>LIVE</td>
              </tr>
              <?php if($role == "sourcing"){ ?>
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
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div><!-- .row -->
        
      <div class="row">
        <div class="col-sm-2">
          <label class="control-label">Item Alternative</label>
        </div>
        <div class="col-sm-2">
          <?php if($role == "ca"){ ?>
            <p class="form-control-static">NO</p>
          <?php } elseif($role == "sourcing") { ?>
            <select  class="form-control">
              <option>NO</option>
              <option>YES</option>
            </select>
          <?php } ?>
        </div>
      </div><!-- .row -->
      <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
          <table class="table table-bordered">
            <thead>
              <th>Product Name</th>
              <th>Vendor</th>
              <th>PIC</th>
              <th>PIC Phone Number</th>
              <th>Price</th>
              <th>Tax Status</th>
              <th>Availability</th>
              <th>SKU</th>
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
                <td>SKU1234567</td>
                <td>LIVE</td>
              </tr>
              <tr>
                <td>Sony VAIO</td>
                <td>AAA</td>
                <td>Ahmad Ramdani</td>
                <td>081234567890</td>
                <td>Rp 123.456</td>
                <td>NON PKP</td>
                <td>AVAILABLE</td>
                <td>SKU1234567</td>
                <td>LIVE</td>
              </tr>
              <?php if($role == "sourcing"){ ?>
                <tr>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                  <td><input type="text" class="form-control"></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div><!-- .row -->  
      
    
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <a href="dashboard.php<?php echo("?role=$role") ?>" class="btn btn-primary btn-block">UPDATE</a>
        </div>
      </div><!-- .row -->
    
    </form>
    
  </div><!-- .container -->
  
</div><!-- .page -->

<?php include("_footer.php") ?>