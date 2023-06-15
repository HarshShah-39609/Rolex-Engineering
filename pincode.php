<script>

function get_address()
{
	var pincode=jQuery('#pincode').val();

	if(pincode==""){
	jQuery('#city').val('');
	jQuery('#state').val('');

	}
	else{
	jQuery.ajax ({
	url:'get.php', 
	type:'post’,
	data:'pincode='+pincode,
	success:function(data){
		if(data=='no')
		{
			alert('Wrong pincode');
		}else
		{
			var getData=$.parseJSON(data);
		jQuiery('#city').val(getData.city);
		jQuiery('#state').val(getData.state);
			
		}
		
	}
});
</script>
