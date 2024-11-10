<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style>
				body 
					{
						background-color: #F0F8FF;
						font-family: Arial;
						font-size: 17px;
						padding: 8px;
			 		}
				div
					{
						border-style:;
					}
		  		* {
			  		box-sizing: border-box;
				  }
	    		.row 
					{
						display: -ms-flexbox; /* IE10 */
						display: flex;
						-ms-flex-wrap: wrap; /* IE10 */
						flex-wrap: wrap;
						margin: 0 -16px;
		    		}
	    		.col-25 
						{
							-ms-flex: 25%; /* IE10 */
							flex: 25%;
						}
				.col-50 
						{
							-ms-flex: 50%; /* IE10 */
							flex: 50%;
						}
				.col-75 
						{
							-ms-flex: 75%; /* IE10 */
							flex: 75%;
						}
				.col-25,
				.col-50,
				.col-75 
						{
							padding: 0 16px;
						}
				.container 
						{
							background-color: #f2f2f2;
							padding: 5px 20px 15px 20px;
							border: 1px solid lightgrey;
							border-radius: 3px;
					   	}
				input[type=text] 
							{
								width: 65%;
								margin-bottom: 20px;
								padding: 10px;
								border: 1px solid #ccc;
								border-radius: 3px;
							}
				label 
					{
						margin-bottom: 10px;
						display: block;
				  	}
				.icon-container 
							{
								margin-bottom: 20px;
								padding: 7px 0;
								font-size: 24px;
							}
				.btn 
					{
						background-color: #00BFFF;
						color: black;
						padding: 12px;
						margin: 10px 0;
						border: none;
						width: 100%;
						border-radius: 3px;
						cursor: pointer;
						font-size: 17px;
				 	}
				.btn:hover 
						{
							background-color: #1E90FF;
					   	}
				a {
					color: #2196F3;
			  	  }
				hr {
					border: 1px solid lightgrey;
			   		}
				span.price {
							float: right;
							color: grey;
					   		}
		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
		@media (max-width: 800px) 
			{
				.row {
						flex-direction: column-reverse;
					}
				.col-25 {
						margin-bottom: 20px;
					}
			}
		</style> 
	</head>

	<body>

	<form action="payact.php" method="post">
		<div class="col-50" >
			<div class="row">
            	<div class="col-50">
				<?php 
					$bid=$_GET['bid'];
					$gr=$_GET['gr'];
					$amt=$_GET['amt'];
					$tp=$gr+$amt;
			 	?>
            	<table align="center">
					<tr><input type="text" name="bid" value="<?php echo $bid;?>" hidden/></tr>
            		<tr><td colspan="2" align="center"><h3><b>Payment</b></h3></td> </tr>
            		<tr><td colspan="2" align="center"><label for="fname"><b>Accepted Cards</b></label></td><tr>
            		<tr><td colspan="2" align="center"><div class="icon-container">
              			<i class="fa fa-cc-visa" style="color:navy;"></i>
              			<i class="fa fa-cc-amex" style="color:blue;"></i>
              			<i class="fa fa-cc-mastercard" style="color:red;"></i>
              			<i class="fa fa-cc-discover" style="color:orange;"></i></td></tr>
					<tr> <td colspan="2" align="center"> <label for="cname"><b>Name on Card</b></label></td></tr>
					<tr> <td colspan="2" align="center"><input type="text" id="cname" name="cname" placeholder="                 John More Doe" style="width:250px;" required> </td> </tr>
					<tr> <td> </td><td></td> </tr>
            		<tr> <td colspan="2" align="center"> <label for="ccnum"><b>Card number</b></label></td> </tr>
					<tr> <td colspan="2" align="center"> <input type="tel" pattern="[0-9]{16}" id="ccnum" name="cnum" minlength="16" maxlength="16" placeholder="        1111-2222-3333-4444" style="height:40px; width:200px;" required> </td> </tr>
					<tr> <td><br> </td> <td><br></td></tr>		
            		<tr> <td align="center"><label for="expmonth"><b>Exp Date</b></label> </td> <td align="center"> <label for="cvv"><b>CVV</b></label> </td></tr>
					<tr> <td align="center"> 
							<input type="text" id="expdate" name="xd" placeholder=" Jan 2030" minlength="8" maxlength="8" style="width:80px;" required></td> 
						 <td align="center"><input type="text" id="cvv" name="cvv" placeholder="352" minlength="3" maxlength="3" style="width:60px;" required> </td> </tr>
				<!-- <tr><td colspan="2" align="center"> <input type="text" name="amount" value="<?php echo $tp; ?>" minlength="4" maxlength="4" style="width:60px;" readonly></td></tr> -->
					<tr> <td colspan="2" align="center"> <input type="submit" name="submit" value="Pay <?php echo $tp; ?>" class="btn"> </td> </tr>
				</table>
            	</div>
            </div>
		</div>
	</form>	
	
	</body>
	</html>