<!-- Author : Jan Wira Gotama Putra (13512015), Willy (13512065), Willy (13512070) -->
<!DOCTYPE HTML>
<html>	
	<body> 
		<?php 
			/* Save to external file */
			$curdir = getcwd(); 
			$file = fopen("configuration.txt","w");
			$data = $_GET["harstag"]. PHP_EOL . $_GET["tk1"]. PHP_EOL . $_GET["tk2"]. PHP_EOL . $_GET["batas"] . PHP_EOL . $_GET["algo"];
			fwrite($file,$data);
			fclose($file);
			
			$curdir = getcwd(); 
			chdir('./Programs');
			//can only run .class file
			$arg = $_GET["harstag"];
			//exec("java.exe test $arg > output.txt", $output, $return_var);
			exec("java.exe a $arg", $output, $return_var);
			echo $return_var;
			
			chdir($curdir);
			//show result
			$url = 'home.php';
			header( "Location: $url" );
		?>
	</body>
</html>