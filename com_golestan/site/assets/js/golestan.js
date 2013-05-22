jQuery(document).ready(function(){

});

//add a departed
function addDeparted()
{
	var departedInfo = {};
	jQuery("#departedForm :input").each(function(idx,ele){
		departedInfo[jQuery(ele).attr('name')] = jQuery(ele).val();
	});

	jQuery.ajax({
		url:'index.php?option=com_golestan&controller=add&format=raw&tmpl=component',
		type:'POST',
		data:departedInfo,
		dataType:'JSON',
		success:function(data)
		{
			if ( data.success ){
				jQuery("#departed-list").append(data.html);
				jQuery("#newDepartedModal").modal('hide');
			}else{

			}
		}
	});

}
