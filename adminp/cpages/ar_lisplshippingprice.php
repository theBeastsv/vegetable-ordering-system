<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Seller Id</th>
<th>Lowrange</th>
<th>Highrange</th>
<th>Shipping_price</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'shipping_price','rowId,seller_id,lowrange,highrange,shipping_price','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edishippingprice.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delshippingprice.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['seller_id'].'</td>
'; echo '<td>'.$row['lowrange'].'</td>
'; echo '<td>'.$row['highrange'].'</td>
'; echo '<td>'.$row['shipping_price'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>