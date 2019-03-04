<?php include('header.php'); ?>
		
		 <!-- Custom box css -->
        <link href="plugins/custombox/css/custombox.min.css" rel="stylesheet">

            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">




                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Player List</b>
									<button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add New Player</button></h4>

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Name of the Player</th>
                                            <th>Club</th>
                                            <th>Age</th>
                                            <th>Rank</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>


                                        <tbody>
										
										<?php
											$result = $DB->prepare("SELECT * FROM players");
											$result->bindParam(':userid', $res);
											$result->execute();

											for($i=0; $row = $result->fetch(); $i++){
										?>
										
                                        <tr>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['club']; ?></td>
                                            <td><?php echo $row['age']; ?></td>
                                            <td><?php echo $row['rank']; ?></td>
                                            <td><img height="50px" src="../img/players/<?php echo $row['photo']; ?>"/></td>
											<td>
											<div class="btn-group">
												<button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span> </button>
												<ul class="dropdown-menu">
													<li><a href="view-player.php?id=<?php echo $row['id']; ?>" target="blank">View</a></li>
													<li><a href="edit-player.php?id=<?php echo $row['id']; ?>">Edit</a></li>
													<li><a href="delete-player.php?id=<?php echo $row['id']; ?>">Delete</a></li>
												</ul>
											</div>
											</td>
                                        </tr>
										<?php
											} 
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

				
				
				
				
				
				
				<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title">Add Club</h4>
							</div>
							<div class="modal-body">
							<form enctype="multipart/form-data" action="players-add.php" method="post">
			<div class="form-group">
				<label class="control-label">Club</label>
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
			<div class="form-group">
				<label class="control-label">Player Name</label>
				
					<input type="text" id="name" name="name" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Date of Birth</label>
				
					<input type="date" id="dob" name="dob" class="form-control" required="">
				
			</div> 
			<div class="form-group">
				<label class="control-label">Citizenship</label>
				
					<input type="text" id="citizenship" name="citizenship" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Fathers Name</label>
				
					<input type="text" id="father" name="father" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Passport Number</label>
				
					<input type="text" id="passport" name="passport" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Religion/Race</label>
				
					<input type="text" id="religion" name="religion" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Blood Group</label>
				
					<input type="text" id="blood" name="blood" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Maritual Status</label>
				
					<select id="married" name="married" class="form-control" required="">
						<option>Select Status</option>
						<option value="Married">Married</option>
						<option value="Single">Single</option>
					</select>
				
			</div>
			<div class="form-group">
				<label class="control-label">Residential Address</label>
				
					<textarea id="resiaddress" name="resiaddress" class="form-control" placeholder="Type your address"></textarea>
				
			</div>
			<div class="form-group">
				<label class="control-label">Home Tel</label>
				
					<input type="text" id="hometel" name="hometel" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Mobile</label>
				
					<input type="text" id="mobile" name="mobile" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Jersey Name</label>
				
					<input type="text" id="jerseyname" name="jerseyname" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Position</label>
				
					<select id="position" name="position" class="form-control" required="">
						<option>Select Position</option>
						<option value="Goalkeeper">Goalkeeper</option>
						<option value="Defender">Defender</option>
						<option value="Midfielder">Midfielder</option>
						<option value="Forward">Forward</option>
					</select>
				
			</div>
			<div class="form-group">
				<label class="control-label ">Jersey No</label>
				
					<input type="text" id="jerseyno" name="jerseyno" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Height</label>
				
					<input type="text" id="height" name="height" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Weight</label>
				
					<input type="text" id="weight" name="weight" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label class="control-label">Photo</label>
				
					<input type="file" name="fileToUpload" class="filestyle" data-buttonname="btn-default">
				
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
					</div>
				</div><!-- /.modal -->
				
				
				
				
				
				
				
				
				
				
                <footer class="footer text-right">
                   2018 - <?php echo date('Y'); ?> © <a href="" target="blank">Saif Powertec</a>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="plugins/datatables/dataTables.colVis.js"></script>
        <script src="plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <!-- init -->
        <script src="assets/pages/jquery.datatables.init.js"></script>
		
		
		<!-- Modal-Effect -->
        <script src="plugins/custombox/js/custombox.min.js"></script>
        <script src="plugins/custombox/js/legacy.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
            TableManageButtons.init();

        </script>


    </body>
</html>