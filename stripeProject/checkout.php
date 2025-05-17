<?php
require('../client/navbar.php');
require __DIR__ . '/config.php';

try {
    $base = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASSWORD);
} catch (Exception $e) {
    echo "La connexion a échoué" . "<br>";
}

require __DIR__ . '/vendor/autoload.php';

use Stripe\Stripe;
Stripe::setApiKey('');

// if (isset($_POST['payer'])) {
    // $prix=strip_tags($_POST['amount']);
    // $prix=htmlspecialchars($_POST['amount']);

    // $cardNumber=strip_tags($_POST['cardNumber']);
    // $cardNumber=htmlspecialchars($_POST['cardNumber']);

    // $expMonth=strip_tags($_POST['expMonth']);
    // $expMonth=htmlspecialchars($_POST['expMonth']);

    // $expYear=strip_tags($_POST['expYear']);
    // $expYear=htmlspecialchars($_POST['expYear']);

    // $cvc=strip_tags($_POST['cvc']);
    // $cvc=htmlspecialchars($_POST['cvc']);

    // $time = time();

    
   //  echo "<pre>";
   //  print_r($_FILES['immage_article']);
   //  echo "  </pre> ";
   //  echo "  <br> ";
   $_SESSION['livraison']='1';
   $liv=$_SESSION['livraison'];    
   $select=$base->prepare(' select prix from livraison where num_livraison=".$liv."');
   $select1=$select->execute();
   $select2=$select->fetch();
   
   $inserer=$base->prepare(' insert into payement (date_payement,type_payement,livraison,status) values(?,?,?,?)');
   $inserer1=$inserer->execute(array("2023-04-06 17:57:13.000000","carte_bancaire",".$liv.","en_attente"));
//    var_dump($inserer1);
//    echo "  <br> ";
 
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
 
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/checkout.css" rel="stylesheet" />

    <link href="assets/css/responsive.css" rel="stylesheet" />
    <title>Check Out</title>
</head>
<body>


<div class="main-content">

<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
<h4 class="mb-sm-0">Payment</h4>

<div class="page-title-right">
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="javascript: void(0);">Payment</a></li>
    <li class="breadcrumb-item active">by Card </li>
</ol>
</div>

</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">

<h4 class="card-title">Payment by Card for Delivery #13 - Amount to Pay: 549 Dhs</h4>
<p class="card-title-desc">we are pleased to inform you that the total amount to be paid for delivery number #13 is 549 Dhs. You can make your payment by card.</p>

<form action="charge.php" method="POST">
   
    

    <div class="row">
        <h4 class="card-title">Personal information</h4>
        <div class="col-lg-3"><br>
            <label class="form-label">First Name</label>
            <input type="text" maxlength="5" name="prenom" class="form-control" id="thresholdconfig">
        </div>
        <div class="col-lg-3"><br>
            <label class="form-label">Last Name</label>
            <input type="text" maxlength="5" name="name" class="form-control" id="thresholdconfig">
        </div>
        
        <div class="col-lg-3"><br>
            <label class="form-label">Phone Number</label>
            <input type="text" maxlength="5" name="thresholdconfig" class="form-control" id="thresholdconfig">
        </div>
        <div class="col-lg-3"><br>
            <label class="form-label">postal code</label>
            <input type="text" maxlength="5" name="thresholdconfig" class="form-control" id="thresholdconfig">
        </div> 
        <div class="col-lg-3"> <br>
            <label class="form-label">City</label>
            <input type="text" maxlength="5" name="thresholdconfig" class="form-control" id="thresholdconfig">
        </div>
        <div class="col-lg-9"><br>
            <label class="form-label">Address</label>
            <input type="text" class="form-control" maxlength="225" name="alloptions" id="alloptions">
        </div>
       <br> <br>

</div>
           
        <div class="row">
            <h4 class="card-title"><br> Payment Details</h4>
            <div class="col-lg-6"><br>
                <label class="form-label">you have to pay</label>
                <input type="text" name="amount" class="form-control" required="required" value="<?php echo($select2[0]); ?>" disabled>
            </div>
            <div class="col-lg-6"><br>
                <label class="form-label">card number</label>
                <input type="text" maxlength="16"  name="cardNumber"  class="form-control" id="thresholdconfig">
            </div>
            <div class="col-lg-6"><br>
                <label class="form-label">"CVV" (commonly used as an acronym)</label>
                <input type="text" maxlength="5"   name="cvc" class="form-control" required id="thresholdconfig">
            </div>
            
            <div class="col-lg-6"><br>
                <label class="form-label">expiration month</label>
                <input type="text" maxlength="2" name="expMonth" required class="form-control" id="thresholdconfig">
            </div>
            <div class="col-lg-6"><br>
                <label class="form-label">expiration year</label>
                <input type="text" maxlength="2" name="expYear" required class="form-control" id="thresholdconfig">
            </div> 
            

    </div>

        <div style="float:right;"><br>
            <button type="submit" name="payer" class="btn btn-dark">Confirm</button>

        </div>
    </div>
</form>

</div>
</div>
<!-- end select2 -->

</div>


</div>
<!-- end row -->

<!-- end row -->


</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
<div class="container-fluid">
<div class="row">
<div class="col-sm-6">
<script>document.write(new Date().getFullYear())</script> © Upcube.
</div>
<div class="col-sm-6">
<div class="text-sm-end d-none d-sm-block">
Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
</div>
</div>
</div>
</div>
</footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


</body>
</html>