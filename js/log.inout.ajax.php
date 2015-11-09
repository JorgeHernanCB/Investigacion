<?php
	session_start();
	//print($_SESSION['username']);
	//print($_SESSION['userid']);
	
	if ( isset($_SESSION['username']) && isset($_SESSION['userid']) ){
		
		if ( @$idcnx = @mysql_connect('localhost','root','') ){
			
			if ( @mysql_select_db('investigacion',$idcnx) ){
				
				$sql = 'SELECT id,usuario,password,cedulaDocente FROM loguin WHERE usuario="' . $_POST['login_username']. '" && password="' . ($_POST['login_userpass']) . '" LIMIT 1';
				//echo "$sql";

				if ( @$res = @mysql_query($sql) ){
					//echo "++";
					if ( @mysql_num_rows($res) == 1 ){
						
						$user = @mysql_fetch_array($res);
						
						$_SESSION['username']	= $user['usuario'];
						$_SESSION['userid']	= $user['id'];
						

						echo 1;
						
						
					}
					else
						echo 0;
				}
				else
					echo 0;
				
				
			}
			
			mysql_close($idcnx);
		}
		else
			echo 0;
	}
	else{
		echo 0;
	}
?>