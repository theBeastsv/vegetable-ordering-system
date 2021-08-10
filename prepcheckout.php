<? session_start();
include("config/config.php");
include("config/masterconfig.php");
$myIp= ipCheck() ;
$masterUserId=$_SESSION['KesOnUserId']; 
if($masterUserId==''){
echo '<script>window.location="login.php";</script>';
}
if($masterUserId==''){
$buyerid=0;
}else{
$buyerid=$masterUserId;
}
$sessionvalue=session_id();
//////////////////////////////ORDER ID GENERATION/////////////////////////////
$today = date('jmy');
$saltcode=str_pad(dechex(mt_rand( 0x00000, 0xFFFFF)), 6, '0', STR_PAD_LEFT);;
$mcxvshow= show_selecttable($debug,$limitstring,$conn,'invoice_master','rowId','','1',1,' rowId DESC');
foreach( $mcxvshow as $ssxgbw ) { 
$rowIdPrderLadt=$ssxgbw['rowId'];
}
$curneworder=$rowIdPrderLadt+1;			
$curneworders='z';
$curneworder=str_pad($curneworder,4, "0", STR_PAD_LEFT);							
$neworderId=$curneworders.''.$today.''.$saltcode.''.	$curneworder;
//////////////////////////////ORDER ID GENERATION/////////////////////////////
$dateceated=date("Y-m-d G:i:s");
$olgaquery="INSERT INTO invoice_master SET createdip='$myIp', createdby='$masterUserId', orderid='$neworderId', userid='$buyerid',  dateceated='$dateceated'";
$myquery=$conn->query($olgaquery); 
$invoiceid = $conn->lastInsertId();
$_SESSION['MasterOrderIdjk']=$invoiceid;
$mySqlKart = "SELECT * FROM temp_order_cart WHERE   createdip='$myIp' AND createdby='$masterUserId' AND buyerid='$buyerid' and sessionvalue='$sessionvalue' AND isconvertedtoorder='0'";
$mySKLkart=$conn->query($mySqlKart);
$myKartdara= $mySKLkart->fetchAll()  ;
$KartRowfound = $mySKLkart->rowCount();
if($KartRowfound>0){
$fincart='';
$overallamount=0;
$tins=0;
foreach( $myKartdara as $KrtRow ) {
$mycart_productid=$KrtRow['productid'];
$productIdcode =str_pad($mycart_productid, 10, "0", STR_PAD_LEFT);
$mycart_quantity=$KrtRow['quantity'];
$mycart_rowId=$KrtRow['rowId'];
$mycart_mrp_payable=$KrtRow['mrp_payable_after_discount'];
$mrp_sale=$KrtRow['mrp_sale'];
$mycart_selectedcolor=$KrtRow['selectedcolor'];
$mycart_selectedsize=$KrtRow['selectedsize'];
$discount_scheme_applied=$KrtRow['discount_scheme_applied'];
$totalAmount_thisprd=$mycart_mrp_payable*$mycart_quantity;
$overallamount=$overallamount+$totalAmount_thisprd;
$limits=1;
///////////// PRODUCT NAME ///////////////
$mcxvshow= show_selecttable($debug,$limitstring,$conn,'productmaster','rowId,product_name,in_stock_quantity,sellerId','WHERE rowId=\''.$mycart_productid.'\'',$limits,1,' rowId ASC');
foreach( $mcxvshow as $sxsxgbw ) { 
$product_name=$sxsxgbw['product_name'];
$sellerId=$sxsxgbw['sellerId'];
$in_stock_quantity=$sxsxgbw['in_stock_quantity'];
}
///////////// PRODUCT NAME ///////////////
///////////// PRODUCT PHOTO ///////////////
$mcxvshow= show_selecttable($debug,$limitstring,$conn,'product_image','rowId,imagename_tr','WHERE productid=\''.$mycart_productid.'\'',$limits,1,' rowId ASC');
foreach( $mcxvshow as $ssxgbw ) { 
$imagename_tr=$ssxgbw['imagename_tr'];
}
///////////// PRODUCT PHOTO ///////////////
//////////////// SELER AND GST APPLIED //////////////////////////
$compaId=1;
$BiSellSqlId= show_selecttable($debug,$limitstring,$conn,'seller_master','*','WHERE rowId=\''.$sellerId.'\'',$limit,1,' rowId ASC');
$maxrita= ' ';
foreach( $BiSellSqlId as $orSeBilrRow ) {  
$gst_numberS					=	$orSeBilrRow['gst_number'];  
}
if(($gst_numberS=='') || ($gst_numberS=='NOTAPPLIED')){
$SellerGST='-1';
}else{
$SellerGST=$sellerId;
}
//////////////////////////  GET BILLER //////////////////////////////
//////////////// SELER AND GST APPLIED //////////////////////////
$olgaquery="INSERT INTO invoice_detail SET createdip='$myIp',dateceated='$dateceated',createdby='$masterUserId', invoiceid='$invoiceid', invoicestring='$neworderId', buyerid='$buyerid',seller_id='$sellerId', sellerGST='$SellerGST', productid='$mycart_productid', productname='$product_name', prdcolor='$mycart_selectedcolor', prdsize='$mycart_selectedsize', quantity='$mycart_quantity', unitprice='$mrp_sale', unitpricediscoutn='$mycart_mrp_payable', discount_price='$mycart_mrp_payable', discount_id='$discount_scheme_applied', payableprice='$mycart_mrp_payable'";
$myquery=$conn->query($olgaquery);	
}
}
$overallamount = number_format($overallamount, 2, '.', '');
$shipping_price=getShippingPrice($overallamount);
$netpayable=$overallamount+$shipping_price;
$netpayable = number_format($netpayable, 2, '.', '');
$mcxvshow= show_selecttable($debug,$limitstring,$conn,'addressbillship','*','WHERE createdby=\''.$buyerid.'\' AND typeofaddress=\'billing\'',1,1,' rowId ASC');
foreach( $mcxvshow as $ssxgbw ) { 
$bill_address=$ssxgbw['address'];
$bill_citys=$ssxgbw['citys'];
$bill_states=$ssxgbw['states'];
$bill_countrys=$ssxgbw['countrys'];
$billing_postalcode=$ssxgbw['postalcode'];
}
$mcxvshow= show_selecttable($debug,$limitstring,$conn,'addressbillship','*','WHERE createdby=\''.$buyerid.'\' AND typeofaddress=\'shipping\'',1,1,' rowId ASC');
foreach( $mcxvshow as $ssxgbw ) { 
$shipp_address=$ssxgbw['address'];
$shipp_citys=$ssxgbw['citys'];
$shipp_states=$ssxgbw['states'];
$shipp_countrys=$ssxgbw['countrys'];
$shipp_postalcode=$ssxgbw['postalcode'];
}
$olgaquery="UPDATE invoice_master SET total_order_price_withoutshipping='$overallamount', total_order_price='$netpayable', shipping_price='$shipping_price',bill_address='$bill_address',bill_citys='$bill_citys',bill_states='$bill_states',bill_countrys='$bill_countrys',bill_postalcode='$bill_postalcode',shipp_postalcode='$shipp_postalcode',shipp_countrys='$shipp_countrys',shipp_states='$shipp_states',shipp_citys='$shipp_citys',shipp_address='$shipp_address'  WHERE rowId='$invoiceid'";
$myquery=$conn->query($olgaquery); 
$olgaquery="DELETE FROM temp_order_cart WHERE   createdip='$myIp' AND   (buyerid='$buyerid' OR sessionvalue='$sessionvalue') AND isconvertedtoorder='0'";
$myquery=$conn->query($olgaquery); 	
echo '<script>window.location="checkout.php"</script>';

?>