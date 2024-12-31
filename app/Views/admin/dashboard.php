<?php include("header.php");?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
          </div>
          <div class="row grid-margin">
            <!-- <div class="col-12">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fa fa-user mr-2"></i>
                          New users
                        </p>
                        <h2>54000</h2>
                        <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                          Avg Time
                        </p>
                        <h2>123.50</h2>
                        <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                          Downloads
                        </p>
                        <h2>3500</h2>
                        <label class="badge badge-outline-success badge-pill">12% increase</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-check-circle mr-2"></i>
                          Update
                        </p>
                        <h2>7500</h2>
                        <label class="badge badge-outline-success badge-pill">57% increase</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-chart-line mr-2"></i>
                          Sales
                        </p>
                        <h2>9000</h2>
                        <label class="badge badge-outline-success badge-pill">10% increase</label>
                      </div>
                      <div class="statistics-item">
                        <p>
                          <i class="icon-sm fas fa-circle-notch mr-2"></i>
                          Pending
                        </p>
                        <h2>7500</h2>
                        <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                      </div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bookings</h4>
                  <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-todays-tab" data-toggle="pill" href="#pills-todays" role="tab" aria-controls="pills-todays" aria-selected="true">Today's</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="visited-customer-tab" data-toggle="pill" href="#visited-customer" role="tab" aria-controls="visited-customer" aria-selected="false">Visited Customer (Booking List)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="not-visited-customer-tab" data-toggle="pill" href="#not-visited-customer" role="tab" aria-controls="not-visited-customer" aria-selected="false">Not Visited Customer (Booking List)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="status-pending-tab" data-toggle="pill" href="#status-pending" role="tab" aria-controls="status-pending" aria-selected="false">Status Pending</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="upcoming-booking-tab" data-toggle="pill" href="#upcoming-booking" role="tab" aria-controls="upcoming-booking" aria-selected="false">Upcoming Booking</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-todays" role="tabpanel" aria-labelledby="pills-todays-tab">
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
                    <div class="tab-pane fade" id="visited-customer" role="tabpanel" aria-labelledby="visited-customer-tab">
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

                    <div class="tab-pane fade" id="status-pending" role="tabpanel" aria-labelledby="status-pending-tab">
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
                    <div class="tab-pane fade" id="upcoming-booking" role="tabpanel" aria-labelledby="upcoming-booking-tab">
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
