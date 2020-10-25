<?php
	// Require relevent information for settings.config.inc.php, including functions and database access
	require_once("../includes/settings.config.inc.php");
	// Set $page_name so that the title of each page is correct
	$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	$page_name = PAGENAME_CONTACTS;
	
	
	// If the value of i in GET exists
	if($_GET["i"]) {
		
		// Find contact in database
		$contact = new Contact($_GET['i']);
		
		// If a contact could be found
		if($contact->found) {
			
		} else {
			// Contact could not be found in the database
			// Set $subpage_name so that the title of each page is correct - contact not found
			$subpage_name = 'Contact Not Found - ' . PAGENAME_CONTACTSVIEW;

			// Send session message and redirect
			$session->message_alert($notification["contact"]["view"]["not_found"], "danger");
			// Redirect the user
			Redirect::to(PAGELINK_INDEX);
		}
	} else {
		// Value of i in GET doesn't exist, send message and redirect
		// Set $subpage_name so that the title of each page is correct - GET value not correct
		$subpage_name = 'Invalid GET Value - ' . PAGENAME_CONTACTSVIEW;

		// Set session message
		$session->message_alert($notification["contact"]["view"]["not_found"], "danger");
		// Redirect the user
		Redirect::to(PAGELINK_INDEX);
	};
	
	// Require head content in the page
	require_once("../includes/layout.head.inc.php");
	// Requre navigation content in the page
	require_once("../includes/layout.navigation.inc.php");
?>
			
			<!-- CONTENT -->
      <?php $session->output_message(); ?>
      <input type="button" class="btn btn-info" value="PRINT INVOICE" onclick="window.print()"> <button class="btn btn-info" id="downloadPDF">SAVE AS PDF</button>
      <br>
<div class="container inv my-5 py-5" id ="pdf">
        <div class="row">
            <div class="col-md-6">
                            <img src="logo.png">
            </div>
                <div class="col-md-6">
                    <h1 class="font-weight-lighter py-1 px-3">INVOICE</h1>
                </div>
        </div>
            <div class="row my-3">
                <div class="col-lg-6">
                    <p class="mb-0">INVOICE TO</p>
                    <h5 class="mb-0"><b><?php echo $contact->name; ?></b></h5>
                    <p class="mb-0"><?php echo "$contact->country, $contact->city, $contact->zip"  ?></p>
                    <p class="mb-0"><?php echo $contact->address1; ?></p>
                    <p class="mb-0"><?php if ($contact->zip !== ""){echo $contact->address2;} ?></p>
                    <p class="mb-0"><?php echo $contact->email; ?></p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Invoice No</td>
                                        <td class="px-3">:</td>
                                        <td><?php echo $contact->contact_id; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date</td>
                                        <td class="px-3">:</td>
                                        <td><?php echo $contact->date; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Order Date</td>
                                        <td class="px-3">:</td>
                                        <td><?php echo $contact->date; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">PRODUCT</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">COST</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <b><?php echo $contact->product1; ?></b>
                                </td>
                                <td><?php echo $contact->quantity1; ?></td>
                                <td><?php echo $contact->cost1; ?></td>
                                <td><?php echo $contact->total1; ?></td>
                            </tr>
                            <tr>
                                <?php if ($contact->product2 !== ""){echo "
                                <td>2</td>
                                <td>
                                    <b>$contact->product2</b>
                                </td>
                                <td>$contact->quantity2</td>
                                <td>$contact->cost2</td>
                                <td>$contact->total2</td>
                            </tr>" ;} ?>
                            <tr>
                                <?php if ($contact->product3 !== ""){echo "
                                <td>3</td>
                                <td>
                                    <b>$contact->product3</b>
                                </td>
                                <td>$contact->quantity3</td>
                                <td>$contact->cost3</td>
                                <td>$contact->total3</td>
                            </tr>" ;} ?>
                            <tr>
                                <?php if ($contact->product4 !== ""){echo "
                                <td>4</td>
                                <td>
                                    <b>$contact->product4</b>
                                </td>
                                <td>$contact->quantity4</td>
                                <td>$contact->cost4</td>
                                <td>$contact->total4</td>
                            </tr>" ;} ?>
                            <tr>
                            <?php if ($contact->product5 !== ""){echo "
                            <td>5</td>
                                <td>
                                    <b>$contact->product5</b>
                                </td>
                                <td>$contact->quantity5</td>
                                <td>$contact->cost5</td>
                                <td>$contact->total5</td>
                            </tr>" ;} ?>
                            <tr>
                                <td colspan="3"></td>
                                <td><b>SUB TOTAL</b></td>
                                <td><b><?php echo $contact->subtotal; ?></b></td>
                            </tr>
                            <tr>
                                <td colspan="3"></td>
                                <td><b>DISCOUNT</b></td>
                                <td><b><?php if ($contact->discount !== ""){echo $contact->discount;} ?>%</b></td>
                            </tr>
                            <tr style="background: #E6E4E7; color: #0099D5;">
                                <td colspan="3"></td>
                                <td><b>GRAND TOTAL</b></td>
                                <td><b><?php echo $contact->alltotal; ?></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <h5 class="ml-5 border-bottom"></h5>
                    <h6>Signature of client</h6>
                    <p></p>
                </div>
                <div class="col-lg-6"></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <h5 class="ml-5">Terms and Conditions</h5>
                    <p class="ml-5">
                    Thank you for choosing our store! Every day we try to improve the quality of service.
                    </p>
                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3 text-center">
                    <h3 class="signature"><?php echo $contact->signature; ?></h3>
                    <p>Manager</p>
                </div>
            </div>
</div>
<script type="text/javascript">
var qrcode = new QRCode("qrcode", {
    text: "<?php echo $url; ?>",
    width: 120,
    height: 120,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
});
</script>
<script>
$('#downloadPDF').click(function () {
    domtoimage.toPng(document.getElementById('pdf'))
        .then(function (blob) {
            var pdf = new jsPDF('l', 'pt', [$('#pdf').width(), $('#pdf').height()]);

            pdf.addImage(blob, 'PNG', 0, 0, $('#pdf').width(), $('#pdf').height());
            pdf.save("invoice.pdf");

            that.options.api.optionsChanged();
        });
});
</script>
<?php
	// Requre footer content in the page, including any relevant scripts
	require_once("../includes/layout.footer.inc.php");
?>
