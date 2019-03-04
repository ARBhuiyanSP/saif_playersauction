<?php include('header.php'); 
$id=$_GET['id'];
?>
		
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
								
								<?php
										$sql = $DB->prepare("SELECT * FROM players WHERE `id`='$id'");
										//$sql->bindParam(':userid', $res);
										$sql->execute();
										$row = $sql->fetch();
								?>
                                <h4 class="m-t-0 header-title"><b><?php echo $row['name'];?></b>
								<form action="player-edit.php" method="post" enctype="multipart/form-data">
									<input type="hidden" value="<?php echo $row['id'];?>" name="id" >

									<div class="row">
										<div class="form-horizontal">


											<div class="form-group">
												<label for="name" class="col-md-2 control-label">Club</label>
												<div class="col-md-3">
													<select id="club" name="club" class="form-control" required="">
														<option value="<?php echo $row['club']; ?>"><?php echo $row['club']; ?></option>
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

												<label for="name" class="col-md-2 control-label">Player Name</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="name" value="<?php echo $row['name'];?>" name="name" required>
												</div>
											</div>


											<div class="form-group">
												<label for="noofsheet" class="col-md-2 control-label">Date of Birth</label>
												<div class="col-md-3">
													<input type="date" id="dob" name="dob" value="<?php echo $row['dob'];?>" class="form-control" required="">
												</div>
												
												<label for="buttonsize" class="col-md-2 control-label">Citizenship</label>
												<div class="col-md-3">
													<input type="text" value="<?php echo $row['citizenship'];?>" name="citizenship" class="form-control">
												</div>                    
											</div>


											<div class="form-group">
											
											<label for="Father" class="col-md-2 control-label">Father</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="father" value="<?php echo $row['father'];?>" name="father">
												</div>
												
												<label for="Passport" class="col-md-2 control-label">Passport</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="passport" value="<?php echo $row['passport'];?>" name="passport">
												</div>

												
											</div>

											<div class="form-group">
											<label for="sterine" class="col-md-2 control-label">Religion</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="religion" value="<?php echo $row['religion'];?>" name="religion">
												</div>
											
												<label for="totalchemical" class="col-md-2 control-label">Blood</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="blood" value="<?php echo $row['blood'];?>" name="blood">
												</div>
											</div>
											
											<div class="form-group">
											<label for="Marritual Status" class="col-md-2 control-label">Marritual Status</label>
												<div class="col-md-3">
													<select id="married" name="married" class="form-control" required="">
														<option value="<?php echo $row['married']; ?>"><?php echo $row['married']; ?></option>
														<option value="Married">Married</option>
														<option value="Single">Single</option>
													</select>
												</div>
											
												<label for="Residence Address" class="col-md-2 control-label">Residence Address</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="blood" value="<?php echo $row['resiaddress'];?>" name="resiaddress">
												</div>
											</div>
											
											<div class="form-group">
												<label for="Home Tel" class="col-md-2 control-label">Home Tel</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="religion" value="<?php echo $row['hometel'];?>" name="hometel">
												</div>
											
												<label for="Mobile" class="col-md-2 control-label">Mobile</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="blood" value="<?php echo $row['mobile'];?>" name="mobile">
												</div>
											</div>
											
											<div class="form-group">
												<label for="Jersey Name" class="col-md-2 control-label">Jersey Name</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="religion" value="<?php echo $row['jerseyname'];?>" name="hometel">
												</div>
											
												<label for="Position" class="col-md-2 control-label">Position</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="blood" value="<?php echo $row['position'];?>" name="mobile">
												</div>
											</div>
											
											<div class="form-group">
												<label for="Jersey No" class="col-md-2 control-label">Jersey No</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="religion" value="<?php echo $row['jerseyno'];?>" name="jerseyno">
												</div>
											
												<label for="Height" class="col-md-2 control-label">Height</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="blood" value="<?php echo $row['height'];?>" name="position">
												</div>
											</div>
											
											
											<div class="form-group">
												<label for="Weight" class="col-md-2 control-label">Weight</label>
												<div class="col-md-3">
													<input type="text" class="form-control" id="religion" value="<?php echo $row['weight'];?>" name="weight">
												</div>
											
											</div>
											<div class="form-group">
											
												<label class="col-md-2 control-label" for="">Photo</label>
                                                <span class="desc"><img height="100px" src="../img/players/<?php echo $row['photo']; ?>"  style="background-color:#9972B5;"/></span>
												<input type="hidden" name="old_image" size="50" value="<?php echo $row['photo']; ?>"  />
                                                <div class="controls">
                                                    <input type="file" class="form-control" id="formfield10" name="prt_image" >
													<span class="desc">***300x60 | e.g. "logo.png"</span>
                                                </div>
											</div>
											<div class="form-group">
												<div class="col-md-offset-5">
													<button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-plus"></i> UPDATE</button>
												</div>
											</div>
										</div>
									</div>


								</form>

                                </div>
                            </div>
                        </div>


                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

				
				
				
				
				
				
				
				
				
				
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