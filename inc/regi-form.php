<div class="panel-box block-form">
	<div class="titles text-center">
		<h4>Player Registration Form</h4>
	</div>
	<div class="info-panel">
		<div class="row">
			<div class="col-md-12 text-center">
				<p class="lead">Feel the thrill of seeing a global sporting event in Bangladesh Premiere League</p>
			</div>
		</div>
		<form enctype="multipart/form-data" action="players-add.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2">Club</label>
				<div class="col-sm-10">
					<select id="club" name="club" class="form-control" required="">
						<option>Select Club</option>
						<?php
							$resultsc = $DB->prepare("SELECT * FROM club");
							$resultsc->bindParam(':userid', $res);
							$resultsc->execute();

							for($i=0; $rowsc = $resultsc->fetch(); $i++){
						?>
						<option value="<?php echo $rowsc['name']; ?>"><?php echo $rowsc['name']; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Player Name</label>
				<div class="col-sm-10">
					<input type="text" id="name" name="name" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Date of Birth</label>
				<div class="col-sm-10">
					<input type="date" id="dob" name="dob" class="form-control" required="">
				</div>
			</div> 
			<div class="form-group">
				<label class="control-label col-sm-2">Citizenship</label>
				<div class="col-sm-10">
					<input type="text" id="citizenship" name="citizenship" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Fathers Name</label>
				<div class="col-sm-10">
					<input type="text" id="father" name="father" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Passport Number</label>
				<div class="col-sm-10">
					<input type="text" id="passport" name="passport" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Religion/Race</label>
				<div class="col-sm-10">
					<input type="text" id="religion" name="religion" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Blood Group</label>
				<div class="col-sm-10">
					<input type="text" id="blood" name="blood" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Maritual Status</label>
				<div class="col-sm-10">
					<select id="married" name="married" class="form-control" required="">
						<option>Select Status</option>
						<option value="Married">Married</option>
						<option value="Single">Single</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Residential Address</label>
				<div class="col-sm-10">
					<textarea id="resiaddress" name="resiaddress" class="form-control" placeholder="Type your address"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Home Tel</label>
				<div class="col-sm-10">
					<input type="text" id="hometel" name="hometel" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Mobile</label>
				<div class="col-sm-10">
					<input type="text" id="mobile" name="mobile" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Jersey Name</label>
				<div class="col-sm-10">
					<input type="text" id="jerseyname" name="jerseyname" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Position</label>
				<div class="col-sm-10">
					<select id="position" name="position" class="form-control" required="">
						<option>Select Position</option>
						<option value="Goalkeeper">Goalkeeper</option>
						<option value="Defender">Defender</option>
						<option value="Midfielder">Midfielder</option>
						<option value="Forward">Forward</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Jersey No</label>
				<div class="col-sm-10">
					<input type="text" id="jerseyno" name="jerseyno" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Height</label>
				<div class="col-sm-10">
					<input type="text" id="height" name="height" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Weight</label>
				<div class="col-sm-10">
					<input type="text" id="weight" name="weight" class="form-control" required="">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">Players Photo</label>
				<div class="col-sm-10">
					<input type="file" name="fileToUpload" class="filestyle" data-buttonname="btn-default">
				</div>
			</div>
			<input type="hidden" name="status" value="Active">
			<div class="form-group">
				<div class="offset-sm-2 col-sm-10">
					<input type="submit" value="submit" name="submit" class="bnt btn-iw">
				</div>
			</div>
		</form>
	</div>
</div>