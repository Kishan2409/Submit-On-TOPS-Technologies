<?php
if (!isset($_SESSION["a_id"])) {
  echo "<script>
    window.location='./';
  </script>";
}
?>
<!-- main screen -->
<div class="row mt-2">
  <div class="col-md-12 main">
    <br>
    <h3>
      Dashboard
    </h3>

    <hr>
    <div class="container">
      <br>
      <div class="row mb-3">
        <h2>Activity In Our Site</h2><br><br>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <button type="button" class="btn btn-primary position-relative" data-bs-toggle="collapse"
            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Total User
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <?php echo $countuser[0]['COUNT(*)']; ?>
            </span>
          </button>
          <b>
            <<=========See all User </b>
              <div class="collapse mt-2" id="collapseExample">
                <div class="card card-body">
                  <?php foreach ($showuser as $row) { ?>
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="../<?php echo $row['photo']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">
                              <b>Name : <span style="color:brown;">
                                  <?php echo $row['fnm']; ?></b></span>
                            </h5>
                            <p class="card-text">
                              <b>Bloodgroup : <span style="color:brown;">
                                  <?php echo $row['bloodgroup']; ?>
                                </span>
                              </b><br>
                              <b>Date of birth : <span style="color:brown;">
                                  <?php echo $row['dob']; ?>
                                </span>
                              </b><br>
                              <b>Email : <span style="color:brown;">
                                  <?php echo $row['email']; ?>
                                </span>
                              </b><br>
                              <b>Mobile : <span style="color:brown;">
                                  <?php echo $row['mobile']; ?>
                                </span>
                              </b><br>
                              <b>City : <span style="color:brown;">
                                  <?php echo $row['c_name']; ?>
                                </span>
                              </b><br>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-3">
            <b>
              See all Blood Group=========>> </b>
            <button type="button" class="btn btn-primary position-relative" data-bs-toggle="collapse"
              data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
              Total Bloodgroup
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php echo $countblood[0]['COUNT(*)']; ?>
              </span>
            </button>
            <div class="collapse mt-2" id="collapseExample1">
              <div class="card card-body">
                <?php foreach ($showblood as $row) { ?>
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">
                            <b>Bloodgroup : <span style="color:brown;">
                                <?php echo $row['bloodgroup']; ?></b></span>
                          </h5>
                          <p class="card-text">
                            <b>Donate Only : <span style="color:brown;">
                                <?php echo $row['donate']; ?>
                              </span>
                            </b><br>
                            <b>Receive Only : <span style="color:brown;">
                                <?php echo $row['receive']; ?>
                              </span>
                            </b><br>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">

          <button type="button" class="btn btn-primary position-relative" data-bs-toggle="collapse"
            data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
            Total Blood Doner
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <?php echo $countdoner[0]['COUNT(*)']; ?>
            </span>
          </button><b>
            <<=========See all Donater </b>
              <div class="collapse mt-2" id="collapseExample2">
                <div class="card card-body">
                  <?php foreach ($showdoner as $row) { ?>
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">
                              <b>Doner Name : <span style="color:brown;">
                                  <?php echo $row['d_nm']; ?></b></span>
                            </h5>
                            <p class="card-text">
                              <b>Mobile : <span style="color:brown;">
                                  <?php echo $row['d_contact']; ?>
                                </span>
                              </b><br>
                              <b>Doner Blood Group : <span style="color:brown;">
                                  <?php echo $row['bloodgroup']; ?>
                                </span>
                              </b><br>
                              <b>City: <span style="color:brown;">
                                  <?php echo $row['c_name']; ?>
                                </span>
                              </b><br>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <b>
            See all Receiver=========>> </b>
          <button type="button" class="btn btn-primary position-relative" data-bs-toggle="collapse"
            data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
            Total Blood Receiver
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              <?php echo $countreceiver[0]['COUNT(*)']; ?>
            </span>
          </button>
          <div class="collapse mt-2" id="collapseExample3">
            <div class="card card-body">
              <?php foreach ($showreceiver as $row) { ?>
                <div class="card mb-3">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">
                          <b>Blood Receiver Name : <span style="color:brown;">
                              <?php echo $row['r_nm']; ?></b></span>
                        </h5>
                        <p class="card-text">
                          <b>Receiver Bloodgroup : <span style="color:brown;">
                              <?php echo $row['bloodgroup']; ?>
                            </span>
                          </b><br>
                          <b>Mobile : <span style="color:brown;">
                              <?php echo $row['r_contact']; ?>
                            </span>
                          </b><br>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>