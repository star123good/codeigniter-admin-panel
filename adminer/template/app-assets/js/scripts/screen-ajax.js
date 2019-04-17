"use strict";

// (function ($) {
//   $(function () {
	// ajax send
  	var ajax_send = function(url, success_func){
  		$.ajax({
	        url: 'http://23.254.230.177:8082'+url,
	        dataType: 'json',
	        type: 'POST',
	        async: false,
	        success: function(data){
	        	if(data['result']) success_func(data['result']);
	        	else success_func(data);
	        }
     	});
  	};

  	// auto load 
  	const delay_time = 10000;
    const auto_refresh = false;
  	var auto_load = function(url, success_func, counter=0){
  		if(counter == 0) ajax_send(url, success_func);
  		if(auto_refresh) setTimeout(function(){
  			ajax_send(url, success_func);
        counter ++;
  			auto_load(url, success_func, counter);
  		}, delay_time);
  	};
//   });
// })(jQuery);