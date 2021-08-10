<? $domain=$_SERVER['HTTP_HOST'];
if($domain=='localhost'){ 	
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'vegitable_ord');
}else{	
define('DB_HOST', 'localhost');
define('DB_USER', 'aronkes_binkas');
define('DB_PASS', 'G5=nu!PaC3&z');
define('DB_NAME', 'aronkes_newdevlop');
}   
?>