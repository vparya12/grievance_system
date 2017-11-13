					<div style="margin-top:5%;padding-left:12%;font-size:150%;">
						<br />
							<form method="post" action="sendpage.php" enctype="application/x-www-form-urlencoded" name="cmpform">
								<input type="text" name="Subject" placeholder="Subject Name" onblur="complainCheck1()"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<select id="Select_To" name="To" onchange="complainCheck2()">
									<option value="Chief Minister">Chief Minister</option>
									<option value="Educational Department">Education Department</option>
									<option value="Electricity Department">Electricity Department</option>
									<option value="Construction Department">Construction Department</option>
								</select><br /><br />
								<textarea rows="15" cols="55" name="comp" onblur="complainCheck3()" ></textarea><br>
								<input type="submit" name="ComplainButton" value="Send">
							</form>
					</div>		
							
						
							
						