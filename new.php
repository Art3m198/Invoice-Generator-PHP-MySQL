<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Invoice generator" />
<meta property="og:title" content="Invoice generator" />
<meta property="og:description" content="Invoice generator" />
<link rel="icon" href="http://faviconka.ru/ico/faviconka_ru_1009.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"/>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/style2.css" rel="stylesheet" id="style-css">
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<title>Create invoice</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav col-md-12 justify-content-center align-items-center">
    <div class="col-md-3 text-center">
      <li class="nav-item">
        <a target = "_blanc" class="card bg-c-pink order-card nav-link" href="index.php"><h6 class="mb-20 text-center">Main page</h6> </a>
      </li>
</div>
<div class="col-md-3 text-center ">
      <li class="nav-item">
        <a target = "_blanc" class="card bg-c-yellow order-card nav-link" href="all/"><h6 class="mb-20 text-center">All invoices</h6></a>
      </li>
</div>
    </ul>
  </div>
</nav> 
<?php
require_once('settings.local.inc.php'); 
    $link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME); 

    if (!$link) {
      echo 'I cant connect to the database. Error code: ' . mysqli_connect_errno() . ', error: ' . mysqli_connect_error();
      exit;
    }
if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];

    $product1 = $_POST['product1'];
    $quantity1 = $_POST['quantity1'];
    $cost1 = $_POST['cost1'];
    $total1 = $quantity1 * $cost1;

    $product2 = $_POST['product2'];
    $quantity2 = $_POST['quantity2'];
    $cost2 = $_POST['cost2'];
    $total2 = $quantity2 * $cost2;

    $product3 = $_POST['product3'];
    $quantity3 = $_POST['quantity3'];
    $cost3 = $_POST['cost3'];
    $total3 = $quantity3 * $cost3;

    $product4 = $_POST['product4'];
    $quantity4 = $_POST['quantity4'];
    $cost4 = $_POST['cost4'];
    $total4 = $quantity4 * $cost4;

    $product5 = $_POST['product5'];
    $quantity5 = $_POST['quantity5'];
    $cost5 = $_POST['cost5'];
    $total5 = $quantity5 * $cost5;
    $subtotal = $total1 + $total2 + $total3 + $total4 + $total5;
    $discount = $_POST['discount'];
    $d1 = $subtotal / 100;
    $d2 = $d1 * $discount;
    $alltotal = $subtotal - $d2;
    $date = $_POST['date'];
    $signature = $_POST['signature'];
    
    $result = $link->query("INSERT INTO `invoice` (name,country,state,city,zip,email,phone,address1,address2,product1,quantity1,cost1,total1,product2,quantity2,cost2,total2,product3,quantity3,cost3,total3,product4,quantity4,cost4,total4,product5,quantity5,cost5,total5,subtotal,alltotal,discount,date,signature) VALUES ('$name','$country','$state','$city','$zip','$email','$phone','$address1','$address2','$product1','$quantity1','$cost1','$total1','$product2','$quantity2','$cost2','$total2','$product3','$quantity3','$cost3','$total3','$product4','$quantity4','$cost4','$total4','$product5','$quantity5','$cost5','$total5','$subtotal','$alltotal','$discount','$date','$signature')");
    
    if ($result == true){
        header('Location: all/');
    }else{
    	echo "The information is not entered in the database";
    }
}
  ?>
<form method="POST" name="1" action="">
    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>Invoice generator</h3>
                    </div>
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h4 class="card-title">
                            <b>1. Client or company information</b>
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="collapse show">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Name or company name *</label>
                                    <input id="name" name="name" type="text" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                    <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Country *</label>
                                    <input id="country" name="country" class="form-control" type="text" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">State or area *</label>
                                    <input id="state" name="state" class="form-control" type="text" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">City *</label>
                                    <input id="city" name="city" class="form-control" type="text" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Zip *</label>
                                    <input id="zip" name="zip" class="form-control" type="text" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Address line 1 *</label>
                                    <input id="address1" name="address1" type="text" class="form-control" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Address line 2</label>
                                    <input id="address2" name="address2" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email *</label>
                                    <input name="email" type="email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Phone number *</label>
                                    <input name="phone" type="text" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="card card-default">
                <div class="card-header">
                    <h4 class="card-title">
                            <b>2. Products</b>
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="collapse show">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Product 1 *</label>
                                    <input id="product1" name="product1" type="text" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Quantity *</label>
                                    <input id="quantity1" name="quantity1" type="number" step="any" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cost *</label>
                                    <input id="cost1" name="cost1" type="number" step="any" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Total</label>
                                    <input id="total1" name="item_total1" jAutoCalc="{quantity1} * {cost1}" type="text" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Product 2</label>
                                    <input id="product2" disabled="disabled" name="product2" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Quantity</label>
                                    <input id="quantity2" name="quantity2" disabled="disabled" type="number"  step="any" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cost</label>
                                    <input id = "cost2" name="cost2" disabled="disabled" type="number" step="any" class="form-control" />
                                </div>
                            </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Total</label>
                                    <input id="total2" name="item_total2" jAutoCalc="{quantity2} * {cost2}" type="text" class="form-control" required/>
                                </div>
                            </div>
                            </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Product 3</label>
                                    <input id="product3" disabled="disabled" name="product3" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Quantity</label>
                                    <input id="quantity3" name="quantity3" disabled="disabled" type="number" step="any" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cost</label>
                                    <input id="cost3" name="cost3" disabled="disabled" type="number" step="any" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Total</label>
                                    <input id="total3" name="item_total3" jAutoCalc="{quantity3} * {cost3}" type="text" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Product 4</label>
                                    <input id="product4" disabled="disabled" name="product4" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Quantity</label>
                                    <input id="quantity4" name="quantity4" disabled="disabled" type="number" step="any" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cost</label>
                                    <input id="cost4" name="cost4" disabled="disabled" type="number" step="any" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Total</label>
                                    <input id="total4" name="item_total4" jAutoCalc="{quantity4} * {cost4}" type="text" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Product 5</label>
                                    <input id="product5" disabled="disabled" name="product5" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Quantity</label>
                                    <input id="quantity5" name="quantity5" disabled="disabled" type="number" step="any" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cost</label>
                                    <input id="cost5" name="cost5" disabled="disabled" type="number" step="any" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Total</label>
                                    <input id="total5" name="item_total5" jAutoCalc="{quantity5} * {cost5}" type="text" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />

            <div class="card card-default">
                <div class="card-header">
                    <h4 class="card-title">
                            <b>3. Discount, Date and Signature</b>
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="collapse show">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">DISCOUNT</label>
                                    <input id="discount" name="discount" type="number" placeholder="Without %" class="form-control"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Date *</label>
                                    <input name="date" type="date" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Signature *</label>
                                    <input id="signature" name="signature" type="text" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
        </div>
        <div class="row">
            <div class="col-md-12 justify-content-center align-items-center">
                    <div class="text-center">
                    <input class="btn btn-success btn-lg" id="submit" type="submit" name="submit" value="Save"> <a class="btn btn-warning btn-lg" href="#" id="btnToTop"><i class="fa fa-arrow-up"></i> Top</a>
                    </div>
            </div>
        </div>
    </div>
</form>

<script src="js/jautocalc.js"></script>
<script src="js/script.js"></script>
<script src="js/input.js"></script>	
</body>
</html>