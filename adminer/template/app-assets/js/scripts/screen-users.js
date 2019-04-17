// Dashboard - Modern
//----------------------

(function (window, document, $) {

    //search keypress
    $(document).on("keypress", "#search_user", function(e){
        if(e.which == 13){
            var inputVal = $(this).val();
            location.href = location.href + '/' + inputVal;
        }
    });

    // auto loading 
    auto_load('/user', function(data){
      // console.log(data);
      total_count = data.length;
      $('[data-key="user_count"]').text(total_count);

      for(var i = 2; i <= total_count; i++){
        temp_dom = $('#user-card-one-1').clone();
        temp_dom.attr('id', 'user-card-one-'+i);
        temp_dom.appendTo('#user-cards-multi');
      }

      $( ".user-card-one" ).each(function( index ) {
      	temp_href = $(this).attr('href') + '/' + data[index]['uin'];
      	$(this).attr('href', temp_href);
      	$(this).find('[data-key="uin"]').text(data[index]['uin']);
      	$(this).find('[data-key="time"]').text(data[index]['time']);
      	if(index % 4 > 1){
      		$(this).removeClass('fadeLeft');
      		$(this).addClass('fadeRight');
      	}
	    });

    });

})(window, document, jQuery);