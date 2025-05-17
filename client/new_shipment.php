<?php  require_once ('../classes/database.php');
require('navbar.php');
?>


<!-- mabchour-->
<!-- Start right Content here --> 
<!-- ============================================================== -->
<div class="main-content">

<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
<h4 class="mb-sm-0">New Shipment</h4>

<div class="page-title-right">
<ol class="breadcrumb m-0">
    <li class="breadcrumb-item"><a href="javascript: void(0);">Shipment</a></li>
    <li class="breadcrumb-item active">New Shipment</li>
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

<h4 class="card-title">New Delivery Request</h4>
<p class="card-title-desc">Our commitment to providing safe and reliable delivery services. Each package entrusted to us is handled with meticulous attention to detail, ensuring that it is carefully transported from pickup to final destination. Our trained and experienced delivery personnel are dedicated to upholding the highest standards of care throughout the entire delivery process, safeguarding your packages and ensuring their timely arrival. With our unwavering focus on delivering with care, you can trust us to handle your packages with the utmost professionalism and diligence, giving you peace of mind that your deliveries are in trusted hands.</p>

<form action="add_shipment.php" method="post">
<div class="row">
<div class="col-lg-3">
    <div class="mb-3">
        <label class="form-label">City Source</label>
        <select class="form-control select2" name="city_source">
            <option value="">Select</option>
            <?php
            $cities = array(
                array('id' => 1, 'name' => 'Agadir'),
                array('id' => 2, 'name' => 'Al Hoceima'),
                array('id' => 3, 'name' => 'Azilal'),
                array('id' => 4, 'name' => 'Beni Mellal'),
                array('id' => 5, 'name' => 'Ben Slimane'),
                array('id' => 6, 'name' => 'Boulemane'),
                array('id' => 7, 'name' => 'Casablanca'),
                array('id' => 8, 'name' => 'Chaouen'),
                array('id' => 9, 'name' => 'El Jadida'),
                array('id' => 10, 'name' => 'El Kelaa des Sraghna'),
                array('id' => 11, 'name' => 'Er Rachidia'),
                array('id' => 12, 'name' => 'Essaouira'),
                array('id' => 13, 'name' => 'Fes'),
                array('id' => 14, 'name' => 'Figuig'),
                array('id' => 15, 'name' => 'Guelmim')
            );

            foreach ($cities as $city) {
                echo '<option value="' . $city['id'] . '">' . $city['name'] . '</option>';
            }
            ?>
        </select>
    </div>
</div>

        <div class="col-lg-3">
            <label class="form-label">Code postal</label>
            <input type="text" maxlength="25" name="code_postal" class="form-control" id="code_postal">
        </div>
        <div class="col-lg-3">
            <div class="mb-3">
                <label class="form-label">City Destination</label>
                <select class="form-control select2" name="city_destination">
                    <option>Select</option>
                    <option value="">Select</option>
            <?php
            $cities = array(
                array('id' => 1, 'name' => 'Agadir'),
                array('id' => 2, 'name' => 'Al Hoceima'),
                array('id' => 3, 'name' => 'Azilal'),
                array('id' => 4, 'name' => 'Beni Mellal'),
                array('id' => 5, 'name' => 'Ben Slimane'),
                array('id' => 6, 'name' => 'Boulemane'),
                array('id' => 7, 'name' => 'Casablanca'),
                array('id' => 8, 'name' => 'Chaouen'),
                array('id' => 9, 'name' => 'El Jadida'),
                array('id' => 10, 'name' => 'El Kelaa des Sraghna'),
                array('id' => 11, 'name' => 'Er Rachidia'),
                array('id' => 12, 'name' => 'Essaouira'),
                array('id' => 13, 'name' => 'Fes'),
                array('id' => 14, 'name' => 'Figuig'),
                array('id' => 15, 'name' => 'Guelmim')
            );

            foreach ($cities as $city) {
                echo '<option value="' . $city['id'] . '">' . $city['name'] . '</option>';
            }
            ?>
                </select>

            </div>
            

        </div>
        
        <div class="col-lg-3">
            <label class="form-label">Code postal</label>
            
            <input type="text" maxlength="25" name="code_postal_destination" class="form-control" id="code_postal_destination">
        </div>

        
    </div>
    <div class="row">
        <div class="col-lg-3">
            <label class="form-label">Date delivry Date</label>
            <div class="input-group" id="datepicker2">
                <input type="text" class="form-control" placeholder="dd M, yyyy"
                    data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                    data-date-autoclose="true" name="delivery_date">
    
                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
            </div><!-- input-group -->
            
        </div>
        <div class="col-lg-3">
            <label class="form-label">Date Limit of Request</label>
            <div class="input-group" id="datepicker2">
                <input type="text" class="form-control" placeholder="dd M, yyyy"
                    data-date-format="dd M, yyyy" data-date-container='#datepicker2' data-provide="datepicker"
                    data-date-autoclose="true" name="request_date">
    
                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
            </div><!-- input-group -->
            <br>
        </div>
        <div class="col-lg-6">
            <label class="form-label">Price (Dhs)</label>
            <input id="demo0" type="text" value="55" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default">
        </div>

    </div>
    <div class="row">
    <div class="col-lg-6">
        <label class="mb-1">Address Source</label>
        <textarea id="addressSource" class="form-control" maxlength="225" rows="3" placeholder="Enter address source"></textarea><br>
    </div>
    <div class="col-lg-6">
        <label class="mb-1">Address Destination</label>
        <textarea id="addressDestination" class="form-control" maxlength="225" rows="3" placeholder="Enter address destination"></textarea>
    </div>
</div>
<div class="row">
    <h4 class="card-title">Pack details</h4>
    <div class="col-lg-3">
        <label class="form-label">Width (cm)</label>
        <input type="text" maxlength="5" name="width" class="form-control" id="width">
    </div>
    <div class="col-lg-3">
        <label class="form-label">Length (cm)</label>
        <input type="text" maxlength="5" name="length" class="form-control" id="length">
    </div>
    <div class="col-lg-3">
        <label class="form-label">Weight (cm)</label>
        <input type="text" maxlength="5" name="weight" class="form-control" id="weight">
    </div>
    <div class="col-lg-3">
        <label class="form-label">Depth (kg)</label>
        <input type="text" maxlength="5" name="depth" class="form-control" id="depth">
    </div>
    <div class="col-lg-3">
        <label class="form-label">Quantity</label>
        <input type="text" maxlength="5" name="quantity" class="form-control" id="quantity">
    </div>
    <div class="col-lg-9">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" maxlength="225" name="description" id="description">
    </div>
    <div class="col-lg-3">
        <br>
        <button  class="btn btn-rounded btn-toolbar btn-danger">Add Pack</button>
        <br><br>
    </div>
</div>

                </div>
            </div>
        </div>
        <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pack list</h4>

                <div class="table-responsive" >
                    <table class="table mb-0" id="packListTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>discription</th>
                                <th>quantity (u)</th>
                                <th>width (cm)</th>
                                <th>depth (kg)</th>
                                <th>weight (cm)</th>
                                <th>length (cm)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Introducing our Travel Essentials Pack! This pack includes three items: a travel pillow, a neck pillow, and an eye mask.</td>
                                <td>12</td>
                                <td>2</td>
                                <td>1</td>
                                <td>12</td>
                                <td>12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<script>function addPack() {
    var description = document.getElementById('alloptions').value;
    var quantity = document.getElementsByName('thresholdconfig')[4].value;
    var width = document.getElementsByName('thresholdconfig')[0].value;
    var depth = document.getElementsByName('thresholdconfig')[3].value;
    var weight = document.getElementsByName('thresholdconfig')[2].value;
    var length = document.getElementsByName('thresholdconfig')[1].value;

    document.getElementById('description').value = description;
    document.getElementById('quantity').value = quantity;
    document.getElementById('width').value = width;
    document.getElementById('depth').value = depth;
    document.getElementById('weight').value = weight;
    document.getElementById('length').value = length;

    document.getElementById('addPackForm').submit();
}
</script>

        <div style="float:right;">
            <button type="submit" name="submit" class="btn btn-dark" >Poster</button>

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
<script>document.write(new Date().getFullYear())</script> © PackGo.
</div>
<div class="col-sm-6">
<div class="text-sm-end d-none d-sm-block">
Crafted with <i class="mdi mdi-heart text-danger"></i> by Grooupe A
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