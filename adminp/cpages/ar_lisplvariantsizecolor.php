<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Companyid</th>
<th>Color_name</th>
<th>Size_name</th>
<th>Product_id</th>
<th>Product_masterid</th>
<th>Seller Id</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'size_color','rowId,companyid,color_name,size_name,product_id,product_masterid,seller_id','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edivariantsizecolor.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delvariantsizecolor.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['companyid'].'</td>
'; echo '<td>'.$row['color_name'].'</td>
'; echo '<td>'.$row['size_name'].'</td>
'; echo '<td>'.$row['product_id'].'</td>
'; echo '<td>'.$row['product_masterid'].'</td>
'; echo '<td>'.$row['seller_id'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>