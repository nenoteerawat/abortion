var is_loading = false; 
var limit = 1000; 
$(function() {
	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			if (is_loading == false) { 
				is_loading = true;
				$('#loader').show();
				$.ajax({
					url: 'load_more.php',
					type: 'POST',
					data: {last_id:last_id, limit:limit, sql:sql, count_row:count_row, count_bg:count_bg},
					success:function(data){
						var jsonData = JSON.parse(data);
						document.getElementById('search_show_tb').innerHTML += jsonData.html ;
						last_id = jsonData.last_id === null ? last_id : jsonData.last_id;
						count_row = jsonData.count_row === null ? count_row : jsonData.count_row;
						count_bg = jsonData.count_bg === null ? count_bg : jsonData.count_bg;
						$('#loader').hide();
						is_loading = false;
					}
				});
			}
	   }
	});
});