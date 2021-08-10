<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Name</th>
<th>Country_id</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'ud_states','rowId,name,country_id','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="ediudstates.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/deludstates.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['name'].'</td>
'; echo '<td>'.$row['country_id'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>