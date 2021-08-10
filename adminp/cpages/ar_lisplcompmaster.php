<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Company Name</th>
<th>Contact Address</th>
<th>Contact Number</th>
<th>Support Contact Number</th>
<th>Gst Number</th>
<th>Support Email Id</th>
<th>Contact Email Id</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'comy_master','rowId,company_name,contact_address,contact_number,support_contact_number,gst_number,support_email_id,contact_email_id','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edicompmaster.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delcompmaster.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['company_name'].'</td>
'; echo '<td>'.$row['contact_address'].'</td>
'; echo '<td>'.$row['contact_number'].'</td>
'; echo '<td>'.$row['support_contact_number'].'</td>
'; echo '<td>'.$row['gst_number'].'</td>
'; echo '<td>'.$row['support_email_id'].'</td>
'; echo '<td>'.$row['contact_email_id'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>