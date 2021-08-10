<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Scheme Name</th>
<th>Start Date</th>
<th>Ending Date</th>
<th>Remark</th>
<th>Promo To Fly</th>
<th>Discount Type</th>
<th>Discount Rate</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'discount_master','rowId,scheme_name,start_date,ending_date,remark,promo_to_fly,discount_type,discount_rate','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edidiscmaster.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/deldiscmaster.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['scheme_name'].'</td>
'; echo '<td>'.$row['start_date'].'</td>
'; echo '<td>'.$row['ending_date'].'</td>
'; echo '<td>'.$row['remark'].'</td>
'; echo '<td>'.$row['promo_to_fly'].'</td>
'; echo '<td>'.$row['discount_type'].'</td>
'; echo '<td>'.$row['discount_rate'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>