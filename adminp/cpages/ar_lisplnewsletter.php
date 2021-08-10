<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Emailid</th>
<th>Mobile Number</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'newsletter','rowId,emailid,mobile_number','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edinewsletter.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delnewsletter.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['emailid'].'</td>
'; echo '<td>'.$row['mobile_number'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>