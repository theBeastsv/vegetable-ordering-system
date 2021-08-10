<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Orderid</th>
<th>Userid</th>
<th>Total_order_price_withoutshipping</th>
<th>Total_order_price</th>
<th>Shipping_price</th>
<th>Orderplaceing_name</th>
<th>Shipp_orderplaceing_name</th>
<th>Shipp_companyname</th>
<th>Companyname</th>
<th>Bill_address</th>
<th>Shipp_address</th>
<th>Bill_citys</th>
<th>Shipp_citys</th>
<th>Bill_states</th>
<th>Shipp_states</th>
<th>Bill_countrys</th>
<th>Shipp_countrys</th>
<th>Bill_postalcode</th>
<th>Shipp_postalcode</th>
<th>Bill_emailid</th>
<th>Shipp_emailid</th>
<th>Bill_mobilenumbers</th>
<th>Shipp_mobilenumbers</th>
<th>Dateceated</th>
<th>Createdip</th>
<th>Curwek</th>
<th>Orderadditionalinfo</th>
<th>Refaddressid</th>
<th>Paymentstatus</th>
<th>Paymenttype</th>
<th>Payment_comment</th>
<th>Commentsorder</th>
<th>Carnumber</th>
<th>Nameoncard</th>
<th>Expiremonth</th>
<th>Xxyear</th>
<th>Verificationcode</th>
<th>Order_confirmed</th>
<th>Confirmationtime</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'invoice_master','rowId,orderid,userid,total_order_price_withoutshipping,total_order_price,shipping_price,orderplaceing_name,shipp_orderplaceing_name,shipp_companyname,companyname,bill_address,shipp_address,bill_citys,shipp_citys,bill_states,shipp_states,bill_countrys,shipp_countrys,bill_postalcode,shipp_postalcode,bill_emailid,shipp_emailid,bill_mobilenumbers,shipp_mobilenumbers,dateceated,createdip,curwek,orderadditionalinfo,refaddressid,paymentstatus,paymenttype,payment_comment,commentsorder,carnumber,nameoncard,expiremonth,xxyear,verificationcode,order_confirmed,confirmationtime','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="ediinvoicemaster.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delinvoicemaster.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['orderid'].'</td>
'; echo '<td>'.$row['userid'].'</td>
'; echo '<td>'.$row['total_order_price_withoutshipping'].'</td>
'; echo '<td>'.$row['total_order_price'].'</td>
'; echo '<td>'.$row['shipping_price'].'</td>
'; echo '<td>'.$row['orderplaceing_name'].'</td>
'; echo '<td>'.$row['shipp_orderplaceing_name'].'</td>
'; echo '<td>'.$row['shipp_companyname'].'</td>
'; echo '<td>'.$row['companyname'].'</td>
'; echo '<td>'.$row['bill_address'].'</td>
'; echo '<td>'.$row['shipp_address'].'</td>
'; echo '<td>'.$row['bill_citys'].'</td>
'; echo '<td>'.$row['shipp_citys'].'</td>
'; echo '<td>'.$row['bill_states'].'</td>
'; echo '<td>'.$row['shipp_states'].'</td>
'; echo '<td>'.$row['bill_countrys'].'</td>
'; echo '<td>'.$row['shipp_countrys'].'</td>
'; echo '<td>'.$row['bill_postalcode'].'</td>
'; echo '<td>'.$row['shipp_postalcode'].'</td>
'; echo '<td>'.$row['bill_emailid'].'</td>
'; echo '<td>'.$row['shipp_emailid'].'</td>
'; echo '<td>'.$row['bill_mobilenumbers'].'</td>
'; echo '<td>'.$row['shipp_mobilenumbers'].'</td>
'; echo '<td>'.$row['dateceated'].'</td>
'; echo '<td>'.$row['createdip'].'</td>
'; echo '<td>'.$row['curwek'].'</td>
'; echo '<td>'.$row['orderadditionalinfo'].'</td>
'; echo '<td>'.$row['refaddressid'].'</td>
'; echo '<td>'.$row['paymentstatus'].'</td>
'; echo '<td>'.$row['paymenttype'].'</td>
'; echo '<td>'.$row['payment_comment'].'</td>
'; echo '<td>'.$row['commentsorder'].'</td>
'; echo '<td>'.$row['carnumber'].'</td>
'; echo '<td>'.$row['nameoncard'].'</td>
'; echo '<td>'.$row['expiremonth'].'</td>
'; echo '<td>'.$row['xxyear'].'</td>
'; echo '<td>'.$row['verificationcode'].'</td>
'; echo '<td>'.$row['order_confirmed'].'</td>
'; echo '<td>'.$row['confirmationtime'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>