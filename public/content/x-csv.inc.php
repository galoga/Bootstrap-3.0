<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Galoga Tech 
# Created date : 	
# Update date :  		

########################################

########################################
# THIS PAGE IS WHERE YOU PLACE YOUR 
# CONTENT. ACCESS IT VIA :
# www.your-site-url.com/pid=<page-name>
# NB! YOU NEED TO SAVE THE FILE AS :
# <page-name>.inc
# AND IN THE "public/content/" FOLDER
########################################

########################################
# PAGE FUNCTIONS NON-LOCKED PAGES
# For pages with site wide access
########################################

# SITE WIDE ALERT FUNCTION FOR ALL PAGES - always leave on
FUNC_ALERT();

########################################
# PAGE FUNCTIONS LOCKED PAGES
# For pages with locked access
########################################

#LOCKED PAGE FUNCTION TESTER -- NB! MUST BE turned on if page is locked
# FUNC_LOCKED();

# ALERT FUNCTION FOR LOCKED PAGES -- NB MUST BE turned on if page is locked
# FUNC_ALERT_LOCKED();
?>

<section class="section">
<div class="container<?= CON_DIV_STYLE; ?>">
    <div class="row">
        <div class="col-md-12">
	        <h2>Example CSV</h2>
	    <table class="table-sm table-borderless">
		<tbody>		
			<tr>
				<td><strong>Namn</strong></td>
				<td><strong>Tel</strong></td>
				<td><strong>E-post</strong></td>
			</tr>
			<?php $csv_file = fopen("content/x-csv.csv", "r");
			$count = 0;
			while(($row = fgetcsv($csv_file, 0, ",")) !== FALSE) :
			$count++;
            if ($count == 1) { continue; }
			?>
	 		<tr>
	 			<td><?php echo $row[0]; ?></td>
	 			<td><?php echo $row[1]; ?></td>
	 			<td><?php echo $row[2]; ?></td>
	 		</tr> 
	 		<?php endwhile; ?>
	 		<?php fclose($csv_file); ?> 
	 		
		</tbody>
	    </table>
        </div>
    </div>
</div>
</section>
