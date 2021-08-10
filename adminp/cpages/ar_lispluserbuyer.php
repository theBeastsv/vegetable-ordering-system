<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Companyid</th>
<th>Inputname</th>
<th>Inputlastname</th>
<th>Inputemail</th>
<th>Mobileno</th>
<th>Datebobirth</th>
<th>Inputpasswordcurrent</th>
<th>Daddress</th>
<th>Countrys</th>
<th>States</th>
<th>Mastercity</th>
<th>Postalcode</th>
<th>Newsletter</th>
<th>Optin</th>
<th>Isactive</th>
<th>Firstlogin</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'user_buyer','rowId,companyid,inputname,inputlastname,inputemail,mobileno,datebobirth,inputpasswordcurrent,daddress,countrys,states,mastercity,postalcode,newsletter,optin,isactive,firstlogin','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="ediuserbuyer.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/deluserbuyer.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['companyid'].'</td>
'; echo '<td>'.$row['inputname'].'</td>
'; echo '<td>'.$row['inputlastname'].'</td>
'; echo '<td>'.$row['inputemail'].'</td>
'; echo '<td>'.$row['mobileno'].'</td>
'; echo '<td>'.$row['datebobirth'].'</td>
'; echo '<td>'.$row['inputpasswordcurrent'].'</td>
'; echo '<td>'.$row['daddress'].'</td>
'; echo '<td>'.$row['countrys'].'</td>
'; echo '<td>'.$row['states'].'</td>
'; echo '<td>'.$row['mastercity'].'</td>
'; echo '<td>'.$row['postalcode'].'</td>
'; echo '<td>'.$row['newsletter'].'</td>
'; echo '<td>'.$row['optin'].'</td>
'; echo '<td>'.$row['isactive'].'</td>
'; echo '<td>'.$row['firstlogin'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>