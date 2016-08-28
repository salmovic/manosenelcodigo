function carga_ajax( id,div,url )
{
	//alert(url);
	$.post
	(
		url,
		{id:id},
		function (resp)
		{
			$("#"+div+"").html(resp);
		}
	);
}