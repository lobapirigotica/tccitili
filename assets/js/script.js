


function selectUser(obj){
	var id = $(obj).attr('data-id');
	var name = $(obj).html();
	$('.searchresults').hide();
	$('#to').val(name);
	$('#to').attr('data-id', id);
	$('#idto').val(id);
}

$(function(){

	$('#to').on('keyup', function(){
		var datatype = $(this).attr('data-type');
		var q = $(this).val();

		if(datatype != '') {
			$.ajax({
				url:BASE_URL+'ajax/'+datatype,
				type:'GET',
				data:{q:q},
				dataType:'json',
				success:function(json){
					if( $('.searchresults').length == 0 ) {
						$('#to').after('<div class="searchresults"></div');
					}
					$('.searchresults').css('left', $('#to').offset().left+'px');
					$('.searchresults').css('top', $('#to').offset().top+$('#to').height()+3+'px');

					var html = '';

					for(var i in json) {
						html += '<div class="si"><a href="javascript:;" onclick="selectUser(this)" data-id="'+json[i].id+'">'+json[i].name+'</a></div>';
					}

					$('.searchresults').html(html);
					$('.searchresults').show();


				}
			});
		}
	});
});















