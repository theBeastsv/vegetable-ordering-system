<div class="panel-body">
	<table class="table table-hover" id="sample-table-1">
		<thead>
			<tr>
				<th>ID</th><th>Remove</th><th>Invoiceid</th>
<th>Invoicestring</th>
<th>Buyerid</th>
<th>Seller Id</th>
<th>Productid</th>
<th>Productname</th>
<th>Prdcolor</th>
<th>Prdsize</th>
<th>Quantity</th>
<th>Unitprice</th>
<th>Unitpricediscoutn</th>
<th>Discount_price</th>
<th>Discount Id</th>
<th>Payableprice</th>
<th>Order_confirmed</th>
<th>Confirmationtime</th>

			</tr>
		</thead>
	<tbody>
	<? $marthtoshow= show_selecttable($debug,$limitstring,$conn,'invoice_detail','rowId,invoiceid,invoicestring,buyerid,seller_id,productid,productname,prdcolor,prdsize,quantity,unitprice,unitpricediscoutn,discount_price,discount_id,payableprice,order_confirmed,confirmationtime','',$limit,0,0);
		foreach( $marthtoshow as $row ) {
			echo '<tr>
	<td><a href="ediinvoicedetail.php?toeditdata='.$row['rowId'].'">'.$row['rowId'].'</a></td><td><a href="forms/delinvoicedetail.php?toeditdata='.$row['rowId'].'">Remove</a></td>'; echo '<td>'.$row['invoiceid'].'</td>
'; echo '<td>'.$row['invoicestring'].'</td>
'; echo '<td>'.$row['buyerid'].'</td>
'; echo '<td>'.$row['seller_id'].'</td>
'; echo '<td>'.$row['productid'].'</td>
'; echo '<td>'.$row['productname'].'</td>
'; echo '<td>'.$row['prdcolor'].'</td>
'; echo '<td>'.$row['prdsize'].'</td>
'; echo '<td>'.$row['quantity'].'</td>
'; echo '<td>'.$row['unitprice'].'</td>
'; echo '<td>'.$row['unitpricediscoutn'].'</td>
'; echo '<td>'.$row['discount_price'].'</td>
'; echo '<td>'.$row['discount_id'].'</td>
'; echo '<td>'.$row['payableprice'].'</td>
'; echo '<td>'.$row['order_confirmed'].'</td>
'; echo '<td>'.$row['confirmationtime'].'</td>
'; echo '</tr>'; 
		} ?>
		</tbody>
	</table>
</div>