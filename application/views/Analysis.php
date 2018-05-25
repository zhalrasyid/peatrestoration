        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>Spatial Analysis</h2>
                        <span>Subtitle Goes Here</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="project-detail row">
                    
                    <div class="project-infos col-md-12">
                        <div class="box-content">
                            
							
							
							<h2 class="project-title">Spatial Process with single table </h2>                            
							<br/>
							<h3 class="project-title">Buffer</h3>
							<?php echo form_open(base_url()."index.php/welcome/bufferdata/blog");?>
							<form method="post" action="" name="frmbuffer">
								<table>
									<tr>
										<td>
											<?php echo form_input("selbuff", "", "hidden"); ?>
											<select name="selbuff">
												<?php foreach($spatialtables as $tbl) {?>
												<option value="<?php echo $tbl->table_name; ?>"><?php echo $tbl->table_name; ?></option>
												<?php } ?>
											</select>
										</td>										
										<td>											
											<?php echo form_input("dbuff", "", "hidden");?>
											<input type="text" name="dbuff"></input>												
										</td>
										<td>											
											<?php echo form_submit("submitbuffer", "Run Buffer"); ?>												
										</td>
									</tr>
								</table>
							</form>
							
							
                            
                        </div> <!-- /.box-content -->
                    </div> <!-- /.project-infos -->
                </div> <!-- /.project-detail -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
