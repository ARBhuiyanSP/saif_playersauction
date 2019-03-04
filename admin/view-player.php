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




                        <div class="row" id="printableArea" style="display:block;">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
								
								<?php
										$sql = $DB->prepare("SELECT * FROM players WHERE `id`='$id'");
										//$sql->bindParam(':userid', $res);
										$sql->execute();
										$row = $sql->fetch();
								?>
                                <div class="row">
									<div class="col-sm-12" style="text-align:center;">
										<h3>Players Auction BD</h3><span style="font-size:12px;font-style:italic">(A Sister Concern of Saif Powertec)</span></br><span style="font-size:18px;font-style:italic">Players Profile</span>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
											<table class="table">
												<thead>
													<tr>
														<th></th>
														<th style=""><img height="100px" src="../img/players/<?php echo $row['photo']; ?>"/></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Club</td>
														<td><?php echo $row['club']; ?></td>
													</tr>
													<tr>
														<td>Player Nmae</td>
														<td><?php echo $row['name']; ?></td>
													</tr>
													<tr>
														<td>Date of Birth</td>
														<td><?php echo $row['dob']; ?></td>
													</tr>
													<tr>
														<td>Citizenship</td>
														<td><?php echo $row['citizenship']; ?></td>
													</tr>
													<tr>
														<td>Father</td>
														<td><?php echo $row['father']; ?></td>
													</tr>
													<tr>
														<td>Passport</td>
														<td><?php echo $row['passport']; ?></td>
													</tr>
													<tr>
														<td>Religion</td>
														<td><?php echo $row['religion']; ?></td>
													</tr>
													<tr>
														<td>Blood Group</td>
														<td><?php echo $row['blood']; ?></td>
													</tr>
													<tr>
														<td>Marital Status</td>
														<td><?php echo $row['married']; ?></td>
													</tr>
													<tr>
														<td>Residence Address</td>
														<td><?php echo $row['resiaddress']; ?></td>
													</tr>
													<tr>
														<td>Home Telephone</td>
														<td><?php echo $row['hometel']; ?></td>
													</tr>
													<tr>
														<td>mobile</td>
														<td><?php echo $row['mobile']; ?></td>
													</tr>
													<tr>
														<td>Jersey Name</td>
														<td><?php echo $row['jerseyname']; ?></td>
													</tr>
													<tr>
														<td>Position</td>
														<td><?php echo $row['position']; ?></td>
													</tr>
													<tr>
														<td>Height</td>
														<td><?php echo $row['height']; ?></td>
													</tr>
													<tr>
														<td colspan="2">
															<span style="color:green;">***Remarks here about the Player</span>
														</td>
													</tr>
													<tr>
														<td></br></br>Players Signature</td>
														<td style="float:right;"></br></br>Authorized Signature</td>
													</tr>
												</tbody>
											</table>
									</div>
								</div>

                                </div>
                            </div>
                        </div>
						<button class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>
							
							<script>
							function printDiv(divName) {
								 var printContents = document.getElementById(divName).innerHTML;
								 var originalContents = document.body.innerHTML;

								 document.body.innerHTML = printContents;

								 window.print();

								 document.body.innerHTML = originalContents;
							}
							</script>


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