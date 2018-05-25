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
							<h2 class="project-title">Intersect </h2>                            
							<br/>
							<h3 class="project-title">Spatial process intersect two layers</h3>
							<?php echo form_open(base_url()."index.php/spatial/runintersect");?>
							<form method="post" action="" name="frmbuffer">
								<p>									
								<?php echo form_input("layer1", "", "hidden"); ?>
								<label>Layer 1: </label>
								<select name="layer1">
									<?php foreach($spatialtables as $tbl) {?>
									<option value="<?php echo $tbl->table_name; ?>"><?php echo $tbl->table_name; ?></option>
									<?php } ?>
								</select>
								</p>
								<p>									
								<?php echo form_input("layer2", "", "hidden"); ?>
								<label>Layer 2: </label>
								<select name="layer2">
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
								<?php echo form_submit("submit_intersect", "", "hidden"); ?>
								<input type="submit" class="mainBtn" name="submit_intersect" value="Run Intersect" />
								</p>		
							</form>
							
							
                            
                        </div> <!-- /.box-content -->
                    </div> <!-- /.project-infos -->
                </div> <!-- /.project-detail -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
