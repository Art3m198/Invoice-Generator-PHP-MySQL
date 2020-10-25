<?php
	// Require relevent information for settings.config.inc.php, including functions and database access
	require_once("../includes/settings.config.inc.php");
	
	// Set $page_name so that the title of each page is correct
	$page_name = PAGENAME_INDEX;
	$pattern = "/(\d+)-(\d+)-(\d+)/i";
	$replacement = "\$3.\$2.\$1";
		
	// setting $datatables_required to 1 will ensure it is included in the <head> in layout.head.inc.php and so the <script> is called in the layout.footer.inc.php
	$datatables_required = 1;
	// Table ID to relate to the datatable, as identified in the <table> and in the <script>, needed to identify which tables to make into datatables
	$datatables_table_id = 'invoice';
	// No datatable option required for this page
	$datatables_option = null;
	
	// Obtain all contacts from the database, which will be used to populate the table
	$contacts = new Contact();
	
	// Create new Log instance, and log the page view to the database
	//$log = new Log('view');
	
	// Require head content in the page
	require_once("../includes/layout.head.inc.php");
	// Requre navigation content in the page
	require_once("../includes/layout.navigation.inc.php");
	
?>
			<!-- CONTENT -->
			<table id="<?php echo $datatables_table_id; ?>">
				<thead>
					<tr>
						<th>ID</th>
						<th>Customer name</th>
						<th>Country</th>
						<th>City</th>
						<th>Email</th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
<?php
				// Cycle through each item in $contacts and display them in the DataTable
				foreach($contacts->all as $contact){
				?>
					<tr>
						<td><?php echo htmlentities($contact["id"]); ?></td>
						<td><?php echo htmlentities($contact["name"]); ?></td>
						<td><?php echo htmlentities($contact["country"]); ?></td>
						<td><?php echo preg_replace($pattern, $replacement, $contact["city"]); ?></td>
						<td><?php echo htmlentities($contact["email"]); ?></td>
						<td><?php echo htmlentities($contact["date"]); ?></td>
						<td><a target="_blanc" href="<?php echo PAGELINK_CONTACTSVIEW; ?>?i=<?php echo urlencode($contact["id"]); ?>"type="button" role="button" class="btn btn-info">Get invoice</a></td>
					</tr>
<?php
				// Closing the foreach loop once final item in $contacts has been displayed
				};
					?>
				</tbody>
			</table>
			<!-- /CONTENT -->

<?php
	// Requre footer content in the page, including any relevant scripts
	require_once("../includes/layout.footer.inc.php");
?>