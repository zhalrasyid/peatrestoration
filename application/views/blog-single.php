

        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>Loading Data From POSTGRE DATABASE 'shrimp'</h2>
                        <span>Make simple query and load the data</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="blog-image col-md-12">
                        <img src="<?php echo base_url();?>images/blog/blog-single.jpg" alt="Blog 1">
                    </div> <!-- /.blog-image -->
                    <div class="blog-info col-md-12">
                        <div class="box-content">
                            <h2 class="blog-title">Load all the name of spatial table data</h2>
                            <span class="blog-meta">I'm trying to get it right</span>
                            <p><a href="http://www.templatemo.com/preview/templatemo_423_artcore">The Query </a> is:  </p>
                            
                                <blockquote>
                                     <b class="blue">SELECT</b> table_catalog, table_schema, table_name, table_type <b class="blue">FROM</b> <b class="green">information_schema.tables</b> <b class="blue">WHERE</b> table_catalog = 'shrimp' AND table_type = 'BASE TABLE'
                                </blockquote>
                            
								<table>
									<thead>
										<tr>
											<th>#</th>
											<th>Table Name</th>
											<th>Geometry Column</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$counter = 1;
										foreach($spatialtables as $tbl) {
										?>
										<tr>									
											<td><?php echo $counter;?></td>
											<td><?php echo $tbl->table_name; ?></td>
											<td><?php echo $tbl->column_name; ?></td>
										</tr>
										<?php $counter = $counter+1;} ?>
									</tbody>
								</table>
							</div>
                    </div> <!-- /.blog-info -->                   
                </div> <!-- /.row -->
                
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
