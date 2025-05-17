<?php 
include 'traitement\inscription.php';

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register | </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">

        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>

        <div class="page-content">
            <div class="container-fluid">
        <div class="row">

        <div class="col-lg-12">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create a new client account</h4>

                    <div id="basic-pills-wizard" class="twitter-bs-wizard">
                        <ul class="twitter-bs-wizard-nav">
                            <li class="nav-item">
                                <a href="#seller-details" class="nav-link" data-toggle="tab">
                                    <span class="step-number">01</span>
                                    <span class="step-title">Client Details</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#verification-email" class="nav-link" data-toggle="tab">
                                    <span class="step-number">02</span>
                                    <span class="step-title">Verification email</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="#client-document" class="nav-link" data-toggle="tab">
                                    <span class="step-number">04</span>
                                    <span class="step-title">Client Document</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#confirm-detail" class="nav-link" data-toggle="tab">
                                    <span class="step-number">06</span>
                                    <span class="step-title">Confirm Detail</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content twitter-bs-wizard-tab-content">
                            <div class="tab-pane" id="seller-details">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basicpill-firstname-input">First name</label>
                                                <input type="text" name="nom" class="form-control" id="basicpill-firstname-input" value="<?php echo isset($nom) ? $nom : ''; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basicpill-lastname-input">Last name</label>
                                                <input type="text" class="form-control"  name="prenom" id="basicpill-lastname-input" value="<?php echo isset($prenom) ? $prenom : ''; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basicpill-phoneno-input">Phone</label>
                                                <input type="text" class="form-control"  name="phone" id="basicpill-phoneno-input" value="<?php echo isset($phone) ? $phone : ''; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basicpill-email-input">Email</label>
                                                <input type="email" class="form-control"  name="email" id="basicpill-email-input" value="<?php echo isset($email) ? $email : ''; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <?php
// Assuming you have a database connection established using PDO
// and stored in a variable called $conn

// Prepare the SQL statement
$sql = "SELECT * FROM ville";
$stmt = $conn->prepare($sql);

// Execute the statement
$stmt->execute();

// Fetch all rows from the result set as an associative array
$villeRows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- HTML code with PHP to populate the select element -->
<div class="col-lg-6">
    <div class="mb-3">
        <label>City</label>
        <select class="form-select" name="ville">
        <option value="">Select your city</option>
            <?php foreach ($villeRows as $villeRow) { ?>
                <option value="<?php echo $villeRow['id']; ?>"><?php echo $villeRow['ville']; ?></option>
            <?php } ?>
        </select>
    </div>
</div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="basicpill-address-input">Address</label>
                                                <textarea  name="address" id="basicpill-address-input" class="form-control" rows="2 " ><?php echo isset($address) ? $address : ''; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="tab-pane" id="client-document">
                              <div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Add your CIN</label>
                                            <input name="cin" class="form-control" type="file" id="formFile"  >
                                          </div>
                                          <div class="mb-3">
                                            <label for="formFile" class="form-label">Add your picture</label>
                                            <input class="form-control" type="file" id="formFile" name="photo">
                                          </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group d-flex"  >
                                              <span
                                                class="input-group-text border-0"
                                                id="password"
                                                >
                                                <i class="fas fa-lock fa-2x me-1"></i>
                                            </span>
                                              <input
                                                type="password"
                                                class="form-control rounded mt-1"
                                                placeholder="Type your password"
                                                aria-label="password"
                                                aria-describedby="password"
                                                id="password-input" name="password"
                                              />
                                              <div class="valid-feedback">Good</div>
                                              <div class="invalid-feedback">Wrong</div>
                                            </div>
                                          </div>
                                        
                                          <div class="col-6 mt-4 mt-xxl-0 w-auto h-auto">
                                        
                                            <div
                                              class="alert px-4 py-3 mb-0 d-none"
                                              role="alert"
                                              data-mdb-color="warning"
                                              id="password-alert"
                                              >
                                              <ul class="list-unstyled mb-0">
                                                <li class="requirements leng">
                                                  <i class="fas fa-check text-success me-2"></i>
                                                  <i class="fas fa-times text-danger me-3"></i>
                                                  Your password must have at least 8 chars</li>
                                                <li class="requirements big-letter">
                                                  <i class="fas fa-check text-success me-2"></i>
                                                  <i class="fas fa-times text-danger me-3"></i>
                                                  Your password must have at least 1 big letter.</li>
                                                <li class="requirements num">
                                                  <i class="fas fa-check text-success me-2"></i>
                                                  <i class="fas fa-times text-danger me-3"></i>
                                                  Your password must have at least 1 number.</li>
                                                <li class="requirements special-char">
                                                  <i class="fas fa-check text-success me-2"></i>
                                                  <i class="fas fa-times text-danger me-3"></i>
                                                  Your password must have at least 1 special char.</li>
                                              </ul>
                                            </div>
                                        
                                          </div>
                                          
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group d-flex"  >
                                              <span
                                                class="input-group-text border-0"
                                                id="password"
                                                >
                                                <i class="fas fa-lock fa-2x me-1"></i>
                                            </span>
                                              <input
                                                type="password"
                                                class="form-control rounded mt-1"
                                                placeholder="Confirm your password"
                                                aria-label="password"
                                                aria-describedby="password"
                                                id="password-input" name="cpassword"
                                              />
                                              <div class="valid-feedback">Good</div>
                                              <div class="invalid-feedback">Wrong</div>
                                            </div>
                                          </div>
                                        
                                          <div class="col-6 mt-4 mt-xxl-0 w-auto h-auto">
                                        
                                            <div
                                              class="alert px-4 py-3 mb-0 d-none"
                                              role="alert"
                                              data-mdb-color="warning"
                                              id="password-alert"
                                              >
                                              <ul class="list-unstyled mb-0">
                                                <li class="requirements leng">
                                                  <i class="fas fa-check text-success me-2"></i>
                                                  <i class="fas fa-times text-danger me-3"></i>
                                                  Your password must have at least 8 chars</li>
                                                <li class="requirements big-letter">
                                                  <i class="fas fa-check text-success me-2"></i>
                                                  <i class="fas fa-times text-danger me-3"></i>
                                                  Your password must have at least 1 big letter.</li>
                                                <li class="requirements num">
                                                  <i class="fas fa-check text-success me-2"></i>
                                                  <i class="fas fa-times text-danger me-3"></i>
                                                  Your password must have at least 1 number.</li>
                                                <li class="requirements special-char">
                                                  <i class="fas fa-check text-success me-2"></i>
                                                  <i class="fas fa-times text-danger me-3"></i>
                                                  Your password must have at least 1 special char.</li>
                                              </ul>
                                            </div>
                                        
                                          </div>
                                          
                                    </div>
                              </div>
                            </div>

                            
                            <div class="tab-pane" id="verification-email">
  <div>
    <form method="post" action="">
      <div class="row">
        <?php
        if($send==true){
          echo '<div class="row">
          <div class="card-body">
            <div class="alert alert-success" role="alert" id="success-message">
              Please check your email inbox for a code that we have sent to you. It should arrive shortly. Thank you!
            </div>
            <div class="alert alert-danger" role="alert" id="expired-message" style="display:none;">
              Code expired. Please request a new code.
            </div>
          </div>
        </div>';
        }else{
          echo '<div class="row">
            <div class="card-body">
              <div class="alert alert-danger" role="alert">
                Message could not be sent. Mailer Error
              </div>
            </div>
          </div>';
        }
        ?>
        <div class="col-lg-6">
          <div class="mb-3">
            <input type="text" class="form-control" name="code" id="basicpill-namecard-input" placeholder="Type code" >
            <span class="text-muted">e.g "000000"</span>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="mb-3">
            <button type="submit" name="verify" class="btn btn-outline-success waves-effect waves-light">Verify</button>
            <button type="submit" name="resend" class="btn btn-outline-success waves-effect waves-light">Resend Code</button>
          </div>
        </div>
      </div>
<style>
/* Success message style */
#success-message {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #1abc9c;
}
</style>


<!-- JavaScript code for timer -->
<script>
var seconds = 60; // Set initial number of seconds
var timerLabel = document.getElementById('success-message'); // Get success message element

var timer = setInterval(function() {
  seconds--; // Decrement seconds by 1
  if (seconds <= 0) {
    // If timer has expired
    clearInterval(timer); // Clear the timer
    document.getElementById('success-message').style.display = 'none'; // Hide success message
    document.getElementById('expired-message').style.display = 'block'; // Show expired message
  } else {
    // If timer is still running
    timerLabel.innerText = 'Please check your email inbox for a code that we have sent to you. It should arrive shortly. Thank you! ' + seconds + ' seconds remaining'; // Update success message with remaining seconds
  }
}, 1000); // Update timer every 1 second (1000 milliseconds)
</script>



    </form>
  </div>
</div>


<div class="tab-pane" id="verification-phone">
  <div>
    <div class="row">
      <div class="card-body">
        <div class="alert alert-success" role="alert">
          Please check your email inbox for a code that we have sent to you. It should arrive shortly. Thank you!
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="mb-3">
          <input type="text" class="form-control" id="basicpill-namecard-input" placeholder="type code">
          <span class="text-muted">e.g "99.99.99.99"</span>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="mb-3">
          <button type="button" name="resend" class="btn btn-outline-success waves-effect waves-light">Resend Code</button>
        </div>
      </div>
    </div>
  </div>
</div>
                            <div class="tab-pane" id="confirm-detail">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                            </div>
                                            <div>
                                                <h5>Confirm Details</h5>
                                                <p class="text-muted"> By confirming your inscription, you are indicating that you have read and agree to our terms and conditions.</p>
                                                <input class="btn btn-danger" type="submit" name="Valider" value="Confirme">
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                            <li class="previous"><a href="javascript: void(0);">Previous</a></li>
                            <li class="next"><a href="javascript: void(0);">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div></div>
        <!-- end --></form>
        

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
      <!-- Sweet Alerts js -->
      <script srassets/libs/sweetalert2/sweetalert2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script srassets/js/pages/sweet-alerts.init.js"></script>
        <script src="assets/js/app.js"></script>
                <!-- twitter-bootstrap-wizard js -->
                <script src="assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

                <script src="assets/libs/twitter-bootstrap-wizard/prettify.js"></script>
        
                <!-- form wizard init -->
                <script src="assets/js/pages/form-wizard.init.js"></script>
        
<script>addEventListener("DOMContentLoaded", (event) => {
    const password = document.getElementById("password-input");
    const passwordAlert = document.getElementById("password-alert");
    const requirements = document.querySelectorAll(".requirements");
    let lengBoolean, bigLetterBoolean, numBoolean, specialCharBoolean;
    let leng = document.querySelector(".leng");
    let bigLetter = document.querySelector(".big-letter");
    let num = document.querySelector(".num");
    let specialChar = document.querySelector(".special-char");
    const specialChars = "!@#$%^&*()-_=+[{]}\\|;:'\",<.>/?`~";
    const numbers = "0123456789";

    requirements.forEach((element) => element.classList.add("wrong"));

    password.addEventListener("focus", () => {
        passwordAlert.classList.remove("d-none");
        if (!password.classList.contains("is-valid")) {
            password.classList.add("is-invalid");
        }
    });

    password.addEventListener("input", () => {
        let value = password.value;
        if (value.length < 8) {
            lengBoolean = false;
        } else if (value.length > 7) {
            lengBoolean = true;
        }

        if (value.toLowerCase() == value) {
            bigLetterBoolean = false;
        } else {
            bigLetterBoolean = true;
        }

        numBoolean = false;
        for (let i = 0; i < value.length; i++) {
            for (let j = 0; j < numbers.length; j++) {
                if (value[i] == numbers[j]) {
                    numBoolean = true;
                }
            }
        }

        specialCharBoolean = false;
        for (let i = 0; i < value.length; i++) {
            for (let j = 0; j < specialChars.length; j++) {
                if (value[i] == specialChars[j]) {
                    specialCharBoolean = true;
                }
            }
        }

        if (lengBoolean == true && bigLetterBoolean == true && numBoolean == true && specialCharBoolean == true) {
            password.classList.remove("is-invalid");
            password.classList.add("is-valid");

            requirements.forEach((element) => {
                element.classList.remove("wrong");
                element.classList.add("good");
            });
            passwordAlert.classList.remove("alert-warning");
            passwordAlert.classList.add("alert-success");
        } else {
            password.classList.remove("is-valid");
            password.classList.add("is-invalid");

            passwordAlert.classList.add("alert-warning");
            passwordAlert.classList.remove("alert-success");

            if (lengBoolean == false) {
                leng.classList.add("wrong");
                leng.classList.remove("good");
            } else {
                leng.classList.add("good");
                leng.classList.remove("wrong");
            }

            if (bigLetterBoolean == false) {
                bigLetter.classList.add("wrong");
                bigLetter.classList.remove("good");
            } else {
                bigLetter.classList.add("good");
                bigLetter.classList.remove("wrong");
            }

            if (numBoolean == false) {
                num.classList.add("wrong");
                num.classList.remove("good");
            } else {
                num.classList.add("good");
                num.classList.remove("wrong");
            }

            if (specialCharBoolean == false) {
                specialChar.classList.add("wrong");
                specialChar.classList.remove("good");
            } else {
                specialChar.classList.add("good");
                specialChar.classList.remove("wrong");
            }
        }
    });

    password.addEventListener("blur", () => {
        passwordAlert.classList.add("d-none");
    });
});</script>
<script></script>
    </body>
</html>