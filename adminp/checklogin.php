<? session_start();

include("config/config.php");

$username=$_POST['username'];

$password_new=$_POST['password'];

 

    $sql = "SELECT * FROM user_employee WHERE office_email_id='$username'";

   	$myquery=$conn->query($sql);

	$mydara= $myquery->fetchAll()  ;

	

	$rows_found = $myquery->rowCount();

	if($rows_found==0){

		$_SESSION['unvalidate']=12;

		$_SESSION['tologusername']='';

		unsetme();

		echo '<script>window.location="login.php"</script>';

		}else{

			 

			foreach( $mydara as $row ) {

				$rowId= $row['rowId'];

				$first_name= $row['first_name'];

				$email_id= $row['office_email_id'];

				$mobile_no= $row['mobile_number'];

				$password= $row['password'];

		}

		 

		if($password_new==$password){

				$_SESSION['unvalidate']='';

				unset($_SESSION['unvalidate']);

				$_SESSION['my_userIdbrm']=$rowId;

				$_SESSION['my_first_brm']=$first_name;

				$_SESSION['my_email_brm']=$email_id;

				$_SESSION['my_mobile_brm']=$mobile_no;

				echo '<script>window.location="index.php"</script>';	

			}else{

				$_SESSION['unvalidate']=14;

				$_SESSION['tologusername']=$username;

				unsetme();

				echo '<script>window.location="login.php"</script>';	

				}

			

			}

			



	 

?>