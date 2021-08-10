<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>First Name</th>
<th>Last Name</th>
<th>Company Type</th>
<th>Company Name</th>
<th>Gst Number</th>
<th>Pan Card Number</th>
<th>Adhar Number</th>
<th>Account Balance</th>
<th>Email Id</th>
<th>Mobile Number</th>
<th>Website</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'seller_master','rowId,first_name,last_name,company_type,company_name,gst_number,pan_card_number,adhar_number,account_balance,email_id,mobile_number,website','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edisellermaster.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delsellermaster.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['first_name'].'</td>
'; echo '<td>'.$row['last_name'].'</td>
'; echo '<td>'.$row['company_type'].'</td>
'; echo '<td>'.$row['company_name'].'</td>
'; echo '<td>'.$row['gst_number'].'</td>
'; echo '<td>'.$row['pan_card_number'].'</td>
'; echo '<td>'.$row['adhar_number'].'</td>
'; echo '<td>'.$row['account_balance'].'</td>
'; echo '<td>'.$row['email_id'].'</td>
'; echo '<td>'.$row['mobile_number'].'</td>
'; echo '<td>'.$row['website'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>