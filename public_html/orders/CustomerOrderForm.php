<html>
	<head>
	<title> Customer Order Form </title>
	<style>
		body {
			text-align:center;
			}
		form {
			display: inline-block;
			text-align: center;		
			}
	</style>
	</head>
	<body>
		<h1> Red Rock Telecommunications Order Form <img src=" C:\Users\Rae\Pictures\Red Rock Logo.jpg" style= "float:left;"/></h1>
		<h2> Customer Information </h2>
	<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
		<table>
			<tr>
				<td> Reseller Name: </td>
				<td>  <input type="text" name="resellername" value="Meowchi TalkyTalks" > </td>
			</tr>	
			<tr>
				<td> Reseller Billing Address 1: </td>
				<td> <input type="text" name="resellerba1" value="filledin"> </td>
			</tr>
			<tr>
				<td> Reseller Billing Address 2: </td>
				<td> <input type="text" name="resellerba2" value="filledin">> </td>
			</tr>
			<tr>
				<td> City: </td>
				<td> <input type="text" name="city" value="filledin">> </td>
			</tr>
			<tr>
				<td> State: </td>
				<td> <select name="state">
						<option value= "Alabama">AL</option>
						<option value= "Alaska">AK</option>
						<option value= "Arizona" selected>AZ</option>
						<option value= "Arkansas">AR</option>
						<option value= "California">CA</option>
						<option value= "Colorado">CO</option>
						<option value= "Connecticut">CT</option>
						<option value= "Delaware">AL</option>
						<option value= "District of Columbia">DC</option>
						<option value= "Florida">FL</option>
						<option value= "Georgia">GA</option>
						<option value= "Hawaii">HI</option>
						<option value= "Idaho">ID</option>
						<option value= "Illinois">IL</option>
						<option value= "Indiana">IN</option>
						<option value= "Iowa">IA</option>
						<option value= "Kansas">KS</option>
						<option value= "Kentucky">KY</option>
						<option value= "Louisiana">LA</option>
						<option value= "Maine">ME</option>
						<option value= "Maryland">MD</option>
						<option value= "Massachusetts">MA</option>
						<option value= "Michigan">MI</option>
						<option value= "Minnesota">MN</option>
						<option value= "Mississippi">MS</option>
						<option value= "Missouri">MO</option>
						<option value= "Montana">MT</option>
						<option value= "Nebraska">NE</option>
						<option value= "Nevada">NV</option>
						<option value= "New Hampshire">NH</option>
						<option value= "New Jersey">NJ</option>
						<option value= "New Mexico">NM</option>
						<option value= "New York">NY</option>
						<option value= "North Carolina">NC</option>
						<option value= "North Dakota">ND</option>
						<option value= "Ohio">OH</option>
						<option value= "Oklahoma">OK</option>
						<option value= "Oregon">OR</option>
						<option value= "Pennsylvania">PA</option>
						<option value= "Rhode Island">RI</option>
						<option value= "South Carolina">SC</option>
						<option value= "South Dakota">SD</option>
						<option value= "Tennessee">TN</option>
						<option value= "Texas">TX</option>
						<option value= "Utah">UT</option>
						<option value= "Vermont">VT</option>
						<option value= "Virginia">VA</option>
						<option value= "Washington">WA</option>
						<option value= "West Virginia">WV</option>
						<option value= "Wisconsin">WI</option>
						<option value= "Wyoming">WY</option>
				</select> </td>
			</tr>
			<tr> 
				<td> Zip Code: </td>
				<td> <input type="text" name="zipcode" value="52852"> </td>
			</tr>
			<tr> 
				<td> Telephone Number: </td>
				<td> <input type="text" name="telephonenumber" value=5556661929> </td>
			</tr>
			<tr>
				<td> Email Address: </td>
				<td> <input type="text" name="emailaddress" value="Taco@cat.com"> </td>
			</tr>
			<tr>
				<td> Reseller Contact Name: </td>
				<td> <input type="text" name="resellercn" value="Probably Beth"> </td>
			<tr>
				<td> Sales Representative: </td>
				<td> <select name="salesrep">
						<option value = ""> Select a Sales Representative</option>
						<option value = "Breanda Beall"> Brenda Beall </option>
						<option value = "other"> Other </option> 
					</select>
				</td>
			<tr>
				<td> Account Number: </td>
				<td> <input type="text" name="accountnumber" value="5"> </td>
			</tr>
			<tr> 
				<td> Service Provider Code: </td>
				<td> <input type="text" name="spcode" value="MEOW"> </td>
			<tr>
				<td> End User Customer Name: </td>
				<td> <input type="text" name="endusername" value="Princess_Fluffybutt"> </td>
			</tr>
			<tr>
				<td> Main Telephone Number: </td>
				<td> <input type="text" name="cmtelephone" value="484848484848"> </td>
			</tr>
			<tr>
				<td> Reseller Reference ID: </td>
				<td>  <input type="text" name="resellerrefid" value="whateverthefuckthisis"> </td>
			</tr>
			<tr>
				<td> Requested Built/ Service Provisioned Date: </td>
				<td> <input type="date" name= "requestedbuilt" > </td>
			</tr>
			<tr>
				<td> Requested In Service/ Effective Billing Date </td>
				<td> <input type="date" name= "requestedinservice"> </td>
			</tr>
			<tr>
				<td> Or Sooner: </td>
				<td> <input type="radio" name="orsooner" value= "Yes" checked="checked"> Yes<br> </td>
				<td> <input type="radio" name="orsooner" value= "No"> No<br> </td>
			</tr>
			<tr>
				<td> Add to Existing Customer: </td>
				<td> <input type="radio" name="addtoexistingcustomer" value= "Yes"> Yes<br> </td>
				<td> <input type="radio" name="addtoexistingcustomer" value= "No" checked="checked"> No<br> </td>
			</tr>
			<tr>
				<td> Customer Time Zone: </td>
				<td> <select name="customertimezone">
						<option value = "customertimezone"> Customer Time Zone </option>
						<option value = "customertimezone"> Eastern Time Zone </option>
						<option value = "customertimezone"> Central Time Zone </option>
						<option value = "customertimezone" selected> Mountain Time Zone </option>
						<option value = "customertimezone"> Arizona Time Zone </option>
						<option value = "customertimezone"> Pacific Time Zone </option>
						<option value = "customertimezone"> Alaska Time Zone </option>
						<option value = "customertimezone"> Hawaii-Aleutian Time Zone </option>
					</select>
				</td>
		</table>
	<h3> Service/ 911 Addresses </h3>
		<table>
			<tr>
				<td> Does this order require that 911 be provisioned per the data provided below? </td>
				<td> <input type="radio" name="emergprovisionrequired"  value= "Yes"> Yes<br> </td>
				<td> <input type="radio" name="emergprovisionrequired" value= "No"> No<br> </td>
			</tr>
			<tr>
				<td> Service/911 Address 1: </td>
				<td> <input type="text" name= "emergaddress1"> </td>
			</tr>
			<tr>
				<td> Service/911 Address 2 (Suite#): </td>
				<td> <input type="text" name= "emergaddress2"> </td>
			</tr>
			<tr>
				<td> City: </td>
				<td> <input type="text" name= "emergcity"> </td>
				<td> State: </td>
				<td> <select name="emergstate">
						<option value= "Alabama">AL</option>
						<option value= "Alaska">AK</option>
						<option value= "Arizona">AZ</option>
						<option value= "Arkansas">AR</option>
						<option value= "California">CA</option>
						<option value= "Colorado">CO</option>
						<option value= "Connecticut">CT</option>
						<option value= "Delaware">AL</option>
						<option value= "District of Columbia">DC</option>
						<option value= "Florida">FL</option>
						<option value= "Georgia">GA</option>
						<option value= "Hawaii">HI</option>
						<option value= "Idaho">ID</option>
						<option value= "Illinois">IL</option>
						<option value= "Indiana">IN</option>
						<option value= "Iowa">IA</option>
						<option value= "Kansas">KS</option>
						<option value= "Kentucky">KY</option>
						<option value= "Louisiana">LA</option>
						<option value= "Maine">ME</option>
						<option value= "Maryland">MD</option>
						<option value= "Massachusetts">MA</option>
						<option value= "Michigan">MI</option>
						<option value= "Minnesota">MN</option>
						<option value= "Mississippi">MS</option>
						<option value= "Missouri">MO</option>
						<option value= "Montana">MT</option>
						<option value= "Nebraska">NE</option>
						<option value= "Nevada">NV</option>
						<option value= "New Hampshire">NH</option>
						<option value= "New Jersey">NJ</option>
						<option value= "New Mexico">NM</option>
						<option value= "New York">NY</option>
						<option value= "North Carolina">NC</option>
						<option value= "North Dakota">ND</option>
						<option value= "Ohio">OH</option>
						<option value= "Oklahoma">OK</option>
						<option value= "Oregon">OR</option>
						<option value= "Pennsylvania">PA</option>
						<option value= "Rhode Island">RI</option>
						<option value= "South Carolina">SC</option>
						<option value= "South Dakota">SD</option>
						<option value= "Tennessee">TN</option>
						<option value= "Texas">TX</option>
						<option value= "Utah">UT</option>
						<option value= "Vermont">VT</option>
						<option value= "Virginia">VA</option>
						<option value= "Washington">WA</option>
						<option value= "West Virginia">WV</option>
						<option value= "Wisconsin">WI</option>
						<option value= "Wyoming">WY</option>
				</select> </td>
			<tr>
				<td> Zip Code: </td>
				<td> <input type="text" name= "emergzipcode"> </td>
			</tr>
			<tr>
				<td> 911 Phone Number: </td>
				<td> <input type="text" name="emergphonenumber"> </td>
			</tr>	
		</table>
		<h4>Order Details</h4>
		<textarea name="orderdetails" rows="10" cols="100"></textarea>
		<br><br>
		<input type="submit" value="Submit">
		</form>
	<body>
</html>