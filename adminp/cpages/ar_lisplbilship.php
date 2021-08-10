<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Bill_address</th>
<th>Shipp_address</th>
<th>Bill_citys</th>
<th>Shipp_citys</th>
<th>Bill_states</th>
<th>Shipp_states</th>
<th>Bill_countrys</th>
<th>Shipp_countrys</th>
<th>Bill_postalcode</th>
<th>Shipp_postalcode</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'addressbillship','rowId,bill_address,shipp_address,bill_citys,shipp_citys,bill_states,shipp_states,bill_countrys,shipp_countrys,bill_postalcode,shipp_postalcode','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="edibilship.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delbilship.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['bill_address'].'</td>
'; echo '<td>'.$row['shipp_address'].'</td>
'; echo '<td>'.$row['bill_citys'].'</td>
'; echo '<td>'.$row['shipp_citys'].'</td>
'; echo '<td>'.$row['bill_states'].'</td>
'; echo '<td>'.$row['shipp_states'].'</td>
'; echo '<td>'.$row['bill_countrys'].'</td>
'; echo '<td>'.$row['shipp_countrys'].'</td>
'; echo '<td>'.$row['bill_postalcode'].'</td>
'; echo '<td>'.$row['shipp_postalcode'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>