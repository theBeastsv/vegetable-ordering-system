<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Scheme Name</th>
<th>Product Id</th>
<th>Minimum Order</th>
<th>Start Date</th>
<th>End Date</th>
<th>Discount Rate</th>
<th>Discount Type</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'discount_products','rowId,scheme_name,product_id,minimum_order,start_date,end_date,discount_rate,discount_type','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edidisprds.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/deldisprds.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['scheme_name'].'</td>
'; echo '<td>'.$row['product_id'].'</td>
'; echo '<td>'.$row['minimum_order'].'</td>
'; echo '<td>'.$row['start_date'].'</td>
'; echo '<td>'.$row['end_date'].'</td>
'; echo '<td>'.$row['discount_rate'].'</td>
'; echo '<td>'.$row['discount_type'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>