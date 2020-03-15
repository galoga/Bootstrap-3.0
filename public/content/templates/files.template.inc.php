
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
# www.your-site-url.com/pid=start-<page-name>
# NB! YOU NEED TO SAVE THE FILE AS :
# start-<page-name>.inc
# AND IN THE "public/content" FOLDER
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
		<h2>File download</h2>
		<h5>Click to download</h5>
	</div>
	<div class="container<?= CON_DIV_STYLE; ?>">&nbsp;</div>	
	<div class="container<?= CON_DIV_STYLE; ?>">
        <table id="table" class="table table-hover">
            <tbody>
                <tr>
                    <td valign="middle"><?= FUNC_FILE_ICON('file')?>File</td>
                    <td align="right"><a class="badge badge-primary" href="<?= FUNC_FILE_DOWNLOAD_NAME('TEST.docx'); ?>" role="button">Download</a></td>
                </tr>
                <tr>
                    <td><?= FUNC_FILE_ICON('word')?>Document</td>
                    <td align="right"><a class="badge badge-primary" href="<?= FUNC_FILE_DOWNLOAD_NAME('TEST.docx'); ?>" role="button">Download</a></td>
                </tr>
                <tr>
                    <td><?= FUNC_FILE_ICON('excel')?>Spreadsheet</td>
                    <td align="right"><a class="badge badge-primary" href="<?= FUNC_FILE_DOWNLOAD_NAME('TEST.pdf'); ?>" role="button">Download</a></td>
                </tr>
                <tr>
                    <td><?= FUNC_FILE_ICON('powerpoint')?>Presentation</td>
                    <td align="right"><a class="badge badge-primary" href="<?= FUNC_FILE_DOWNLOAD_NAME('TEST.docx'); ?>" role="button">Download</a></td>
                </tr>
                <tr>
                    <td><?= FUNC_FILE_ICON('pdf')?>PDF</td>
                    <td align="right"><a class="badge badge-primary" href="<?= FUNC_FILE_DOWNLOAD_NAME('TEST.pdf'); ?>" role="button">Download</a></td>
                </tr>
            </tbody>
         </table>
	</div>
</section>