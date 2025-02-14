<?php include("header.php");?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Reports
            </h3>
          </div>
          <div class="row grid-margin">
       
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <!-- <h4 class="card-title">Bookings</h4> -->
                  <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
              
                    <li class="nav-item">
                      <a class="nav-link active" id="visited-customer-tab" data-toggle="pill" href="#visited-customer" role="tab" aria-controls="visited-customer" aria-selected="false">Sales </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="not-visited-customer-tab" data-toggle="pill" href="#not-visited-customer" role="tab" aria-controls="not-visited-customer" aria-selected="false">Purchase  </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="guidance-tab" data-toggle="pill" href="#guidance" role="tab" aria-controls="guidance" aria-selected="false">Guidance's</a>
                    </li>
                   
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                 
                    <div class="tab-pane fade show active" id="visited-customer" role="tabpanel" aria-labelledby="visited-customer-tab">
                      <div class="media">
                        <div class="table-responsive">
                          <table id="order-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Order #</th>
                                  <th>Purchased On</th>
                                  <th>Customer</th>
                                  <th>Ship to</th>
                                  <th>Base Price</th>
                                  <th>Purchased Price</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>2012/08/03</td>
                                  <td>Edinburgh</td>
                                  <td>New York</td>
                                  <td>$1500</td>
                                  <td>$3200</td>
                                  <td>
                                    <label class="badge badge-info">On hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>2015/04/01</td>
                                  <td>Doe</td>
                                  <td>Brazil</td>
                                  <td>$4500</td>
                                  <td>$7500</td>
                                  <td>
                                    <label class="badge badge-danger">Pending</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>2010/11/21</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>2016/01/12</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>2017/12/28</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>2000/10/30</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-info">On-hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td>2011/03/11</td>
                                  <td>Cris</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>8</td>
                                  <td>2015/06/25</td>
                                  <td>Tim</td>
                                  <td>Italy</td>
                                  <td>$6300</td>
                                  <td>$2100</td>
                                  <td>
                                    <label class="badge badge-info">On-hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>9</td>
                                  <td>2016/11/12</td>
                                  <td>John</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>10</td>
                                  <td>2003/12/26</td>
                                  <td>Tom</td>
                                  <td>Germany</td>
                                  <td>$1100</td>
                                  <td>$2300</td>
                                  <td>
                                    <label class="badge badge-danger">Pending</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="not-visited-customer" role="tabpanel" aria-labelledby="not-visited-customer-tab">
                      <div class="media">
                        <div class="table-responsive">
                          <table id="order-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Order #</th>
                                  <th>Purchased On</th>
                                  <th>Customer</th>
                                  <th>Ship to</th>
                                  <th>Base Price</th>
                                  <th>Purchased Price</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>2012/08/03</td>
                                  <td>Edinburgh</td>
                                  <td>New York</td>
                                  <td>$1500</td>
                                  <td>$3200</td>
                                  <td>
                                    <label class="badge badge-info">On hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>2015/04/01</td>
                                  <td>Doe</td>
                                  <td>Brazil</td>
                                  <td>$4500</td>
                                  <td>$7500</td>
                                  <td>
                                    <label class="badge badge-danger">Pending</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>2010/11/21</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>2016/01/12</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>2017/12/28</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>2000/10/30</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-info">On-hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td>2011/03/11</td>
                                  <td>Cris</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>8</td>
                                  <td>2015/06/25</td>
                                  <td>Tim</td>
                                  <td>Italy</td>
                                  <td>$6300</td>
                                  <td>$2100</td>
                                  <td>
                                    <label class="badge badge-info">On-hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>9</td>
                                  <td>2016/11/12</td>
                                  <td>John</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>10</td>
                                  <td>2003/12/26</td>
                                  <td>Tom</td>
                                  <td>Germany</td>
                                  <td>$1100</td>
                                  <td>$2300</td>
                                  <td>
                                    <label class="badge badge-danger">Pending</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="guidance" role="tabpanel" aria-labelledby="guidance-tab">
                      <div class="media">
                        <div class="table-responsive">
                          <table id="order-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Order #</th>
                                  <th>Purchased On</th>
                                  <th>Customer</th>
                                  <th>Ship to</th>
                                  <th>Base Price</th>
                                  <th>Purchased Price</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>2012/08/03</td>
                                  <td>Edinburgh</td>
                                  <td>New York</td>
                                  <td>$1500</td>
                                  <td>$3200</td>
                                  <td>
                                    <label class="badge badge-info">On hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>2015/04/01</td>
                                  <td>Doe</td>
                                  <td>Brazil</td>
                                  <td>$4500</td>
                                  <td>$7500</td>
                                  <td>
                                    <label class="badge badge-danger">Pending</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>2010/11/21</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>4</td>
                                  <td>2016/01/12</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>5</td>
                                  <td>2017/12/28</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>6</td>
                                  <td>2000/10/30</td>
                                  <td>Sam</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-info">On-hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>7</td>
                                  <td>2011/03/11</td>
                                  <td>Cris</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>8</td>
                                  <td>2015/06/25</td>
                                  <td>Tim</td>
                                  <td>Italy</td>
                                  <td>$6300</td>
                                  <td>$2100</td>
                                  <td>
                                    <label class="badge badge-info">On-hold</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>9</td>
                                  <td>2016/11/12</td>
                                  <td>John</td>
                                  <td>Tokyo</td>
                                  <td>$2100</td>
                                  <td>$6300</td>
                                  <td>
                                    <label class="badge badge-success">Closed</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>10</td>
                                  <td>2003/12/26</td>
                                  <td>Tom</td>
                                  <td>Germany</td>
                                  <td>$1100</td>
                                  <td>$2300</td>
                                  <td>
                                    <label class="badge badge-danger">Pending</label>
                                  </td>
                                  <td>
                                    <button class="btn btn-outline-primary">View</button>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                
                  </div>
                </div>
              </div>
            </div>
          </div>
         
      <!-- main-panel ends -->
<?php include("footer.php");?>
