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
			<li class="post-code">
				<label for="phone">Post Code</label>
				<input type="tel" name="post-code" title="Valid post code required" required="required" value="" placeholder="Post Code"/>
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
</div>