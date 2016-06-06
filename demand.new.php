<?php include("_header.php") ?>
<?php include("_navbar.php") ?>

<div class="page page-demand-detail">
  
  <div class="container">
    
    <h4>Demand ID : 123456789012</h4>
    
    <form class="form form-horizontal">
      
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Client</label>
            <div class="col-sm-8">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Channel</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>B2B</option>
                <option>B2G</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Type</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>Reguler</option>
                <option>Project</option>
              </select>
            </div>
          </div>
        </div>
      </div><!-- .row -->
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Client Phone</label>
            <div class="col-sm-8">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Client Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label class="control-label col-sm-4">Deadline</label>
            <div class="col-sm-8">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </div><!-- .row -->
      
      <div class="row">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Range Price</th>
              <th>Qty</th>
              <th>Brand</th>
              <th>Product Reference</th>
              <th>Comment</th>
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
            </tr>
            <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
              <td><input type="text" class="form-control"></td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8"><a href="#" class="btn btn-primary btn-block">CREATE</a></div>
      </div>
      
    </form>
    
  </div>
  
</div><!-- .page -->

<?php include("_footer.php") ?>