	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="col-md-10 col-md-offset-1">
				<section style="text-align:center;">
					<h3>Sessional Marks entry</h3><br><br>
				</section>
				<table class="table table-striped">
					<thead><tr><th>S.no.</th><th>Subject Code</th><th>Subject Name</th><th>Semester</th><th>View</th><th>Marks</th></tr></thead>
					<tbody>
						<?php 	
							$counter = 1;
							foreach($rows as $r){
								echo '<tr><td>' . $counter++ . '</td><td>' . $r->subject_code . '</td><td>';
								echo $r->subject_name . '</td><td>' . $r->semester;
								echo '</td><td><form method="post" action="'. site_url('/teacher/view_marks') .'">';
									echo '<input type="submit" name="view_marks" class="btn btn-primary" value="View">';	
								echo'</form></td>';
								echo '<td><form method="post" action="'. site_url('/teacher/feed_marks') .'">';
									echo '<input type="hidden" name="semester" value="' . $r->semester .'">';
									echo '<input type="submit" name="submit_marks" class="btn btn-success" value="Feed">';	
								echo'</form></td></tr>';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>