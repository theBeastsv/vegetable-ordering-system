<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th>
                <th>Remove</th>
                <th>hsn_code</th>
                 <th>hsn_code</th>
<th>Category Name</th>
<th>Parent_category</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'product_category','rowId,companyid,category_name,parent_category,hsn_code,hsn_tax','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="ediproduccategory.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delproduccategory.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; 
	echo '<td>'.$row['hsn_code'].'</td>';
	
	echo '<td>'.$row['hsn_tax'].'</td>'; 
	echo '<td>'.$row['category_name'].'</td>
'; echo '<td>'.$row['parent_category'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>