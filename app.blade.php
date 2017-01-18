<script type="text/javascript">
	var error = <?php
$new_array = [];
foreach ($errors->messages() as $value => $keys) {
	array_push($new_array, makeArrayNotation(explode('.', $value)));
}
echo json_encode($new_array);?>;
 	   $.each(error, function (index, value) {
 	       $("[name='"+value+"']").attr('id','error'+index).attr('class','validationError');
 	   });
</script>