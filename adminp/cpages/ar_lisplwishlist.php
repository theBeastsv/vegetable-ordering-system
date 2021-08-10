<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Buyer Id</th>
<th>Userid</th>
<th>Productid</th>
<th>Addedfromip</th>
<th>Isactive</th>
<th>Removedat</th>
<th>Removedip</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'wishlist','rowId,buyer_id,userid,productid,addedfromip,isactive,removedat,removedip','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="ediwishlist.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delwishlist.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['buyer_id'].'</td>
'; echo '<td>'.$row['userid'].'</td>
'; echo '<td>'.$row['productid'].'</td>
'; echo '<td>'.$row['addedfromip'].'</td>
'; echo '<td>'.$row['isactive'].'</td>
'; echo '<td>'.$row['removedat'].'</td>
'; echo '<td>'.$row['removedip'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>