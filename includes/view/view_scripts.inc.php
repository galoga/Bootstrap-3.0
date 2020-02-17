<?php
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Galoga Industries
# Contact : 		hello@galoga.tech
# Created date : 	2019-12-20
# Update date :		2020-01-10
########################################

########################################
# LOADED IN:  "/view/view.inc"
########################################
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script> 

<?php # -- JAVA UPLOAD SCRIPT BLW -- ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script>
$(document).ready(function() { 
$('#uploadForm').submit(function(e) {	
if($('#userImage').val()) {
e.preventDefault();
$(this).ajaxSubmit({ 
target:   '#targetLayer', 
beforeSubmit: function() {
$("#progress-bar").width('0%');
},
uploadProgress: function (event, position, total, percentComplete){	
$("#progress-bar").width(percentComplete + '%');
$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>')
},
success:function (){
	          
},
resetForm: true 
}); 
// return false; 
}
});
}); 
</script>
<?php # -- JAVA UPLOAD SCRIPT ABV -- ?>