<div id="capture_form_outer">
	<form id="capture_form" class="register" action="" method="post">
		<ul>
			<li class="first">
				<label for="first">First Name</label>
				<input type="text" name="first" value="" placeholder="First Name" nameNotDefault="true" />
			</li>
			<li class="last">
				<label for="last">Last Name</label>
				<input type="text" name="last" value="" placeholder="Last Name" nameNotDefault="true" />
			</li>
			<li class="email">
				<label for="email">Email</label>
				<input type="email" name="email" title="Valid email required" required="required" value="" placeholder="Email"/>
			</li>
			<li class="phone">
				<label for="phone">Phone</label>
				<input type="tel" name="phone" title="Valid phone no. required" required="required" minlength="8" value="" placeholder="Phone"/>
			</li>
			<li class="required">
				<small>* All fields are Mandatory</small>
			</li>
		</ul>
		<div id="result">
			<input type="hidden" name="leadcapture" />
			<input id="submitbtn" type="submit" name="submit" value="Submit" />
		</div>
	</form>
	<form id="capture_form_part_two" class="register" action="" method="post">
		<ul>
			<li class="property_type">
				<label for="property_type">You're interested in</label>
				<select name="property_type">
					<option value="">Apartment Type</option>
					<option>1 Bedroom</option>
					<option>2 Bedroom</option>
					<option>3 Bedroom</option>
				</select>
			</li>
			<li class="reason_type">
				<label for="reason_type">Reason for Purchase</label>
				<select name="reason_type">
					<option value="">Owner Occupier</option>
					<option>First Home Buyer</option>
					<option>Investor</option>
				</select>
			</li>
			<li class="where_hear">
				<select name="where_hear">
					<option value="">How did you hear about us?</option>
					<option>Realestate.com.au</option>
					<option>Courier Mail</option>
					<option>Sydney Morning Herald </option>
					<option>Signage</option>
				</select>
			</li>
			<li class="postcode">
				<label for="postcode">Postcode</label>
				<input type="text" name="postcode" value="" placeholder="Postcode" />
			</li>
		</ul>
		<div id="result_two">
			<input type="hidden" name="new_user" />
			<input type="hidden" name="leadcapture_part_two" />
			<input id="submitbtn" type="submit" name="submit" value="Submit" />
		</div>
	</form>
</div>