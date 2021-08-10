<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Prdcategory</th>
<th>Product_id</th>
<th>Startdate</th>
<th>Till_date</th>
<th>Discount_type</th>
<th>Discount_value</th>
<th>Applytoallproducts</th>
<th>Minimum_purchase</th>
<th>Discountkeycode</th>
<th>Isactive</th>
<th>Wimci</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'discountmaster','rowId,prdcategory,product_id,startdate,till_date,discount_type,discount_value,applytoallproducts,minimum_purchase,discountkeycode,isactive,wimci','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edidiscountmaster.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/deldiscountmaster.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['prdcategory'].'</td>
'; echo '<td>'.$row['product_id'].'</td>
'; echo '<td>'.$row['startdate'].'</td>
'; echo '<td>'.$row['till_date'].'</td>
'; echo '<td>'.$row['discount_type'].'</td>
'; echo '<td>'.$row['discount_value'].'</td>
'; echo '<td>'.$row['applytoallproducts'].'</td>
'; echo '<td>'.$row['minimum_purchase'].'</td>
'; echo '<td>'.$row['discountkeycode'].'</td>
'; echo '<td>'.$row['isactive'].'</td>
'; echo '<td>'.$row['wimci'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>