<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Sortname</th>
<th>Name</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'ud_countries','rowId,sortname,name','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="ediudcountries.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/deludcountries.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['sortname'].'</td>
'; echo '<td>'.$row['name'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>