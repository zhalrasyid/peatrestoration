        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>Spatial Analysis</h2>
                        <span>Nulis Ubahan</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="project-detail row">
                    
                    <div class="project-infos col-md-12">
                        <div class="contact-form-inner">
							<h2 class="project-title">Dissolve </h2>                            
							<br/>
							<h3 class="project-title">Dissolving a Layer </h3>
							<?php echo form_open(base_url()."index.php/spatial/rundissolve");?>
							<form method="post" action="" name="frmbuffer">
								<p>
									
								<?php echo form_input("layer", "", "hidden"); ?>
								<label>Layer to Buffer: </label>
								<select name="layer">
									<?php foreach($spatialtables as $tbl) {?>
									<option value="<?php echo $tbl->table_name; ?>"><?php echo $tbl->table_name; ?></option>
									<?php } ?>
								</select>
								</p>
								
								<p>
								<label>New Table Name: </label>
								<?php echo form_input("newtblname", "", "hidden");?>
								<input type="text" name="newtblname" size=4></input>											
								</p>
								<p>
								<?php echo form_submit("submit_buffer", "", "hidden"); ?>
								<input type="submit" class="mainBtn" name="submit_buffer" value="Run Dissolve" />
								</p>		
							</form>
                        </div> <!-- /.box-content -->
                    </div> <!-- /.project-infos -->
                </div> <!-- /.project-detail -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
       