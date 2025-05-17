<?php
 require_once ('../classes/database.php');







session_start();

 $db = new Database2();
 if(isset($_POST['poster'])){
    $citySource = $_POST['city_source'];
    $codePoste = $_POST['code_postal'];
    $cityDestination = $_POST['city_destination'];
    $codePostalDestination = $_POST['code_postal_destination'];
    $addressSource = $_POST['addressSource'];
    $addressDestination = $_POST['addressDestination'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $weight = $_POST['weight'];
    $depth = $_POST['depth'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $deliveryDate = $_POST['delivery_date'];
    $requestDate = $_POST['request_date'];
    $price = $_POST['demo0'];
    echo addshipmentsrequest($price, $deliveryDate, $requestDate, $_SESSION['client_id'], $addressDestination, $cityDestination, $codePostalDestination, $addressSource, $citySource, $codePoste,$width, $length, $weight, $depth, $quantity, $description);
    // Check for any errors in form data
    if (isset($citySource) &&
    isset($codePostal) &&
    isset($cityDestination) &&
    isset($codePostalDestination) &&
    isset($addressSource) &&
    isset($addressDestination) &&
    isset($width) &&
    isset($length) &&
    isset($weight) &&
    isset($depth) &&
    isset($quantity) &&
    isset($description) &&
    isset($deliveryDate) &&
    isset($requestDate) &&
    isset($price)) {

        } else {
        // Use the sanitized and validated form data as needed
        echo '<script>alert("Please fill in all the required fields.");</script>';
       
    }

    echo $requestDate;
}

 ?>