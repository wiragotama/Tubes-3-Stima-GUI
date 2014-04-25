<!-- Author : Jan Wira Gotama Putra (13512015), Willy (13512065), Willy (13512070) -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> DimSum Tweet Analytics's </title>
	</head>

<body background="./Resources/background.jpg">
	<br>
	<center> <img src="./Resources/DimSumLogo.png" width=40%> </img> <center>
	<link rel="stylesheet" type="text/css" href="ourstyle.css">
	<div class="menu">
		<nav>
			  <ul>
					<li> 
						<a href="home.php"> <font color=#FFA347> Home </font>  </a>
					</li>
					<li>
						<a href="searchResult.php"> <font color="white"> Result </font>  </a>
					</li>
					<li>
						<a href="credit.php"> <font color="white"> Credit </font> </a>
					</li>
			  </ul>
		</nav>
	</div>
	<?php
		$file = fopen("configuration.txt","rb");
		$ht = fgets($file);
		$key1 = fgets($file);
		$key2 = fgets($file);
		$batas = fgets($file);
		$algo = fgets($file);
		fclose($file);
		echo "<div class='form' style='margin-left:500px' align='left'>
			<form id='submit_form' name='submit_form' action='submitConfiguration.php' onsubmit='return validateForm()' method='get'>
				<br>
				<br>
				<b> Pencarian Twitter </b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id='harstag' style='padding:2px' type='text' name='harstag' size='18' value='$ht'>
				<br>
				<br>
				<b> <i> Keyword lalu-lintas </i> </b> &nbsp&nbsp&nbsp<input id='lalulintas' style='padding:2px' type='text' name='lalulintas' size='18' value='$key1'>
				<br>
				<br>
				<b> <i> Keyword keluhan </i> </b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id='keluhan' style='padding:2px' type='text' name='keluhan' size='18' value='$key2'>
				<br>
				<br>
				<b> <i> Batas pencarian </i> </b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input id='batas' style='padding:2px' type='text' name='batas' size='18' value='$batas'>
				<br>
				<br>
				<b> Algoritma </b> <br>";
		if ($algo=="Boyer-Moore") {
			echo "
				<br> <input type='radio' name='algo' value='Boyer-Moore' checked='checked'> Boyer-Moore <br>
				<br> <input type='radio' name='algo' value='KMP'> KMP <br>
				<br>
				<input type='submit' class='button' style='margin-left:100px' value='analisis'>
			</form> </div>";
		}
		else {
			echo "
				<br> <input type='radio' name='algo' value='Boyer-Moore'> Boyer-Moore <br>
				<br> <input type='radio' name='algo' value='KMP' checked='checked'> KMP <br>
				<br>
				<input type='submit' class='button' style='margin-left:100px' value='analisis'>
			</form> </div>";
		}
	?>
	<script type="text/javascript" LANGUAGE="JavaScript">
			function validateForm() {
				var x=document.forms["submit_form"]["harstag"].value;
				var y=document.forms["submit_form"]["lalulintas"].value;
				var z=document.forms["submit_form"]["keluhan"].value;
				var k=document.forms["submit_form"]["algo"].value;
				var l=document.forms["submit_form"]["batas"].value;
				var value=true;
				if (x==null || x=="" || y==null || y=="" || z==null || z=="" || k==null || k=="" || l==null || !isNumber(l)) {
					alert("All configuration must be filled!");
					value = false;
				}
				return value;
			}
		</script>
</body>

</html>