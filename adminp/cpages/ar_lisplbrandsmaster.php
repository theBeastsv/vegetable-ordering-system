<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Companyid</th>
<th>Brandname</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'brandsmaster','rowId,companyid,brandname','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edibrandsmaster.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delbrandsmaster.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['companyid'].'</td>
'; echo '<td>'.$row['brandname'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>