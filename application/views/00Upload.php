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
							<h2 class="project-title">Upload Data </h2>                            
							<br/>
							<h3 class="project-title">Upload data</h3>
							<?php echo form_open_multipart(base_url()."index.php/uploads/do_upload");?>
								<p>
								<label>SHP</label>
								<input type="file" name="shapefiles[]" size="20" accept=".shp"/>
								</p>								
								<p>
								<label>SHX</label>
								<input type="file" name="shapefiles[]" size="20" accept=".shx"/>
								</p>
								<p>
								<label>DBF</label>
								<input type="file" name="shapefiles[]" size="20" accept=".dbf"/>
								</p>
								<p>
								<label>New Table Name</label>
								<?php echo form_input("tablename", "", "hidden");?>
								<input type="input" name="tablename" size="20" />
								</p>
								<p>
								<label>SRID</label>
								<?php echo form_input("srid", "", "hidden");?>
								<input type="input" name="srid" size="20" />
								</p>
								<input type="submit" name="submit" class="mainBtn" value="upload" />	
							</form>
							
							
                            
                        </div> <!-- /.box-content -->
                    </div> <!-- /.project-infos -->
                </div> <!-- /.project-detail -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
