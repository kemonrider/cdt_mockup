<?php include("_header.php") ?>
<?php include("_navbar.php") ?>

<div class="page page-dashboard box-padding">

  <div class="demands">
    <h2 class="title">Client Demands <a href="demand.new.php<?php echo("?role=$role") ?>" class="label label-default">New</a></h2>
    <table class="table table-bordered table-hover list">
      <thead>
        <tr>
          <th class="demand--id">Client Demand ID</th>
          <th class="demand--channel">Channel</th>
          <th class="demand--client">Client</th>
          <th class="demand--type">Type</th>
          <th class="demand--status">Status</th>
          <th class="demand--createdat">Created At</th>
          <th class="demand--duedate">Due Date</th>
          <th class="demand--urgency">Urgency (hours)</th>
          <th class="demand--leadtime">Lead time</th>
        </tr>
      </thead>
    </table>
    
    <div class="demands--list">
      
      <div class="demand">
        <div class="demand--header">
          
          <div class="demand--id">
            <span><b><a href="demand.detail.php<?php echo("?role=$role") ?>">1234567890</a></b></span>
          </div>
          <div class="demand--channel">
            <span>B2B</span>
          </div>
          <div class="demand--client">
            <span>Unilever</span>
          </div>
          <div class="demand--type">
            <span>Project</span>
          </div>
          <div class="demand--status">
            <span>PENDING</span>
          </div>
          <div class="demand--createdat">
            <span>7-June-2016 at 09:00</span>
          </div>
          <div class="demand--duedate">
            <span>7-June-2016 at 14:00</span>
          </div>
          <div class="demand--urgency">
            <span>-</span>
          </div>
          <div class="demand--leadtime">
            <span>-</span>
          </div>
          
        </div><!-- .demand--header -->
        <div class="demand--body">
          <div class="items">
            <h4>Item List</h4>
            <table class="items--list table table-bordered">
              <thead>
                <tr>
                  <th class="item--id">Request Item ID</th>
                  <th class="item--name">Item Name</th>
                  <th class="item--exist">Item Exist</th>
                  <th class="item--found">Item Found</th>
                  <th class="item--alternative">Item Alternative</th>
                  <th class="item--notfound">Item Not Found</th>
                  <th class="item--status">Status</th>
                  <th class="item--urgency">Urgency</th>
                  <th class="item--leadtime">Leadtime</th>
                </tr>
              </thead>
              <tbody>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-01</a></td>
                  <td class="item--name"><span>HP Probook G3</span></td>
                  <td class="item--exist"><span>-</span></td>
                  <td class="item--found">-</td>
                  <td class="item--alternative"><span>-</span></td>
                  <td class="item--notfound"><span>-</span></td>
                  <td class="item--status"><span>-</span></td>
                  <th class="item--urgency">-</th>
                  <td class="item--leadtime"><span>-</span></td>
                </tr>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-02</a></td>
                  <td class="item--name"><span>LG LED TV 52 Inch</span></td>
                  <td class="item--exist"><span>-</span></td>
                  <td class="item--found"><span>-</span></td>
                  <td class="item--alternative"><span>-</span>
                  </td>
                  <td class="item--notfound"><span>-</span></td>
                  <td class="item--status"><b>-</span></td>
                  <th class="item--urgency">-</th>
                  <td class="item--leadtime"><span>-</span></td>
                </tr>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-02</a></td>
                  <td class="item--name"><span>Intel NUC Mini PC</span></td>
                  <td class="item--exist"><span>-</span></td>
                  <td class="item--found"><span>-</span></td>
                  <td class="item--alternative"><span>-</span></td>
                  <td class="item--notfound"><span>-</span></td>
                  <td class="item--status"><span>-</span></td>
                  <th class="item--urgency">-</th>
                  <td class="item--leadtime"><span>-</span></td>
                </tr>
              </tbody>
            </table>
          </div><!-- .items -->
        </div><!-- .demand--body -->
      </div><!-- .demand -->
      
      <!-- demand start -->
      <div class="demand">
        <div class="demand--header">
          
          <div class="demand--id">
            <span><b><a href="demand.detail.php<?php echo("?role=$role") ?>">1234567890</a></b></span>
          </div>
          <div class="demand--channel">
            <span>B2B</span>
          </div>
          <div class="demand--client">
            <span>Unilever</span>
          </div>
          <div class="demand--type">
            <span>Project</span>
          </div>
          <div class="demand--status">
            <span>OPEN</span>
          </div>
          <div class="demand--createdat">
            <span>7-June-2016 at 09:00</span>
          </div>
          <div class="demand--duedate">
            <span>7-June-2016 at 14:00</span>
          </div>
          <div class="demand--urgency">
            <span>03:42:00</span>
          </div>
          <div class="demand--leadtime">
            <span>-</span>
          </div>
          
        </div><!-- .demand--header -->
        <div class="demand--body">
          <div class="items">
            <h4>Item List</h4>
            <table class="items--list table table-bordered">
              <thead>
                <tr>
                  <th class="item--id">Request Item ID</th>
                  <th class="item--name">Item Name</th>
                  <th class="item--exist">Item Exist</th>
                  <th class="item--found">Item Found</th>
                  <th class="item--alternative">Item Alternative</th>
                  <th class="item--notfound">Item Not Found</th>
                  <th class="item--status">Status</th>
                  <th class="item--urgency">Urgency</th>
                  <th class="item--leadtime">Leadtime</th>
                </tr>
              </thead>
              <tbody>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-01</a></td>
                  <td class="item--name"><span>HP Probook G3</span></td>
                  <td class="item--exist status--success"><span><a href="#">SKU1234567890</a></span></td>
                  <td class="item--found">-</td>
                  <td class="item--alternative"><span>-</span></td>
                  <td class="item--notfound"><span>-</span></td>
                  <td class="item--status"><span>CLOSED</span></td>
                  <th class="item--urgency">-</th>
                  <td class="item--leadtime"><span>3:00:00</span></td>
                </tr>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-02</a></td>
                  <td class="item--name"><span>LG LED TV 52 Inch</span></td>
                  <td class="item--exist status--danger"><span>NOT FOUND</span></td>
                  <td class="item--found status--success"><span>FOUND</span></td>
                  <td class="item--alternative">
                    <a href="#">SKU123456</a><br/>
                    <a href="#">SKU123456</a>
                  </td>
                  <td class="item--notfound"><span>-</span></td>
                  <td class="item--status"><b>SOURCING</b><br/><span>ON PROGRESS</span></td>
                  <th class="item--urgency">3:00:00</th>
                  <td class="item--leadtime"><span>ON PROGRESS</span></td>
                </tr>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-02</a></td>
                  <td class="item--name"><span>Intel NUC Mini PC</span></td>
                  <td class="item--exist status--danger"><span>NOT FOUND</span></td>
                  <td class="item--found status--danger"><span>NOT FOUND</span></td>
                  <td class="item--alternative status--danger"><span>NOT FOUND</span></td>
                  <td class="item--notfound status--danger"><span>NOT FOUND</span><p><span>Lorem ipsum dolor sit amet adpiscing elite</span></p></td>
                  <td class="item--status">CLOSED</td>
                  <th class="item--urgency">-</th>
                  <td class="item--leadtime"><span>03:00:00</span></td>
                </tr>
              </tbody>
            </table>
          </div><!-- .items -->
        </div><!-- .demand--body -->
      </div><!-- .demand -->
      <!-- demand end -->
      
      <!-- demand start -->
      <div class="demand">
        <div class="demand--header">
          
          <div class="demand--id">
            <span><b><a href="demand.detail.php<?php echo("?role=$role") ?>">1234567890</a></b></span>
          </div>
          <div class="demand--channel">
            <span>B2B</span>
          </div>
          <div class="demand--client">
            <span>Unilever</span>
          </div>
          <div class="demand--type">
            <span>Project</span>
          </div>
          <div class="demand--status">
            <span>CLOSED</span>
          </div>
          <div class="demand--createdat">
            <span>7-June-2016 at 09:00</span>
          </div>
          <div class="demand--duedate">
            <span>7-June-2016 at 14:00</span>
          </div>
          <div class="demand--urgency">
            <span>03:42:00</span>
          </div>
          <div class="demand--leadtime">
            <span>02:15:00</span>
          </div>
          
        </div><!-- .demand--header -->
        <div class="demand--body">
          <div class="items">
            <h4>Item List</h4>
            <table class="items--list table table-bordered">
              <thead>
                <tr>
                  <th class="item--id">Request Item ID</th>
                  <th class="item--name">Item Name</th>
                  <th class="item--exist">Item Exist</th>
                  <th class="item--found">Item Found</th>
                  <th class="item--alternative">Item Alternative</th>
                  <th class="item--notfound">Item Not Found</th>
                  <th class="item--status">Status</th>
                  <th class="item--urgency">Urgency</th>
                  <th class="item--leadtime">Leadtime</th>
                </tr>
              </thead>
              <tbody>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-01</a></td>
                  <td class="item--name"><span>HP Probook G3</span></td>
                  <td class="item--exist status--success"><span><a href="#">SKU1234567890</a></span></td>
                  <td class="item--found">-</td>
                  <td class="item--alternative"><span>-</span></td>
                  <td class="item--notfound"><span>-</span></td>
                  <td class="item--status"><span>CLOSED</span></td>
                  <th class="item--urgency">-</th>
                  <td class="item--leadtime"><span>03:00</span></td>
                </tr>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-02</a></td>
                  <td class="item--name"><span>LG LED TV 52 Inch</span></td>
                  <td class="item--exist status--danger"><span>NOT FOUND</span></td>
                  <td class="item--found status--success"><span>FOUND</span></td>
                  <td class="item--alternative">
                    <a href="#">SKU123456</a><br/>
                    <a href="#">SKU123456</a>
                  </td>
                  <td class="item--notfound"><span>-</span></td>
                  <td class="item--status"><span>CLOSED</span></td>
                  <th class="item--urgency">-</th>
                  <td class="item--leadtime"><span>03:00</span></td>
                </tr>
                <tr class="item">
                  <td class="item--id"><a href="item.detail.php<?php echo("?role=$role") ?>">1234567890-02</a></td>
                  <td class="item--name"><span>Intel NUC Mini PC</span></td>
                  <td class="item--exist status--danger"><span>NOT FOUND</span></td>
                  <td class="item--found status--danger"><span>NOT FOUND</span></td>
                  <td class="item--alternative status--danger"><span>NOT FOUND</span></td>
                  <td class="item--notfound status--danger"><span>NOT FOUND</span><p><span>Lorem ipsum dolor sit amet adpiscing elite</span></p></td>
                  <td class="item--status">CLOSED</td>
                  <th class="item--urgency">-</th>
                  <td class="item--leadtime"><span>03:00:00</span></td>
                </tr>
              </tbody>
            </table>
          </div><!-- .items -->
        </div><!-- .demand--body -->
      </div><!-- .demand -->
      <!-- demand end -->
      
    </div><!-- .demands--list -->
    
    <div class="demands--paging">
      <nav>
        <ul class="pagination">
          <li>
            <a href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div><!-- .demands--paging -->
    
  </div><!-- ..demands -->
  
</div><!-- .page -->

<?php include("_footer.php") ?>