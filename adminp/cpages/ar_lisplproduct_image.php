<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Productid</th>
<th>Imagename</th>
<th>Product_color</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'product_image','rowId,productid,imagename,product_color','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="ediproduct_image.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delproduct_image.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['productid'].'</td>
'; echo '<td>'.$row['imagename'].'</td>
'; echo '<td>'.$row['product_color'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>