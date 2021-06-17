	<?php
	
		$name="";
		$errname="";
		$username="";
		$errusername="";
		$password="";
		$errpassword="";
		
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if(empty($_POST["name"]))
				$errname="Name required";
		}
		
		
		echo $_POST ["name"]."<br>";
		echo $_POST ["username"]."<br>";
		echo $_POST ["password"]."<br>";
		echo $_POST ["confirm_password"]."<br>";
		echo $_POST ["email"]."<br>";
		echo $_POST ["address"]."<br>";
			
	?>
<html>
	<head>
	</head>
	
	<body align ="center">
		<h1>
			Club Member Registration
		</h1>
		
		<form action = "" method= "post">
			<table align ="center">
				<tr>
					<td>
						Name: 
					</td>
					
					<td>
						<input type="text" placeholder ="Name" name= "name">
					</td>
				</tr>
				
				
				<tr>
					<td>
						Username: 
					</td>
					
					<td>
						<input type="text" placeholder = "Username" name= "username">
					</td>
				</tr>
				
				
				<tr>
					<td>
						Password: 
					</td>
					
					<td>
						<input type="text" placeholder = "Password" name= "password">
					</td>
				</tr>
				
				
				<tr>
					<td>
						Confirm Password: 
					</td>
					
					<td>
						<input type="text" placeholder = " Confirm Password" name= "confirm_password">
					</td>
				</tr>
				
				
				<tr>
					<td>
						Email: 
					</td>
					
					<td>
						<input type="text" placeholder = "Email" name= "email" name="email">
					</td>
				</tr>
		
				
				<tr>
					<td>
						Phone: 
					</td>
					
					<td>
						<input type="text" placeholder= "Code"> - <input type="text" placeholder= "Number">
					</td>
				</tr>
				
				
				<tr>
					<td>
						Address: 
					</td>
					
					<td>
						<input type="text" name="address">
					</td>
				</tr>
				
				
				<tr>
					<td>
						Birth Date
					</td>
					
					<td>
						<select name= "day">
							<option>
								Day
								
							</option>
						</select>
						
						<select name= "month">
							<option>
								Month
							</option>
							
							<option>
								January
							</option>
							
							<option>
								February
							</option>
							
							<option>
								March
							</option>
							
							<option>
								April
							</option>
							
							<option>
								May
							</option>
							
							<option>
								June
							</option>
							
							<option>
								July
							</option>
							
							<option>
								August
							</option>
							
							<option>
								September
							</option>
							
							<option>
								October
							</option>
							
							<option>
								November
							</option>
							
							<option>
								December
							</option>
						</select>
						
						<select name= "year">
							<option>
								Year
							</option>
						</select>
					</td>
				</tr>
				
				
				<tr>
					<td>
						Gender
					</td>
					
					<td>
						<input type="radio" name="gender" value= "Male"> Male
						<input type="radio" name="gender" value="Famale"> Famale
					</td>
				</tr>
				
				<tr>
					<td>
						Where did you hear <br> about us?
					</td>
					
					<td>
						<input type ="checkbox">A friend o Colleague<br>
						<input type ="checkbox"> Google <br>
						<input type ="checkbox"> Blog post <br>
						<input type ="checkbox"> News Article<br>
					</td>
				</tr>
				
				
				<tr>
					<td>
						Bio: 
					</td>
					
					<td>
						<textarea>
						</textarea>
					</td>
				</tr>
				
				
				<tr>
					<td>
					</td>
					
					<td>
						<input type= "submit" value= "Register">
					</td>
				</tr>
			
			</table>
		</form>	
	</body>
</html>