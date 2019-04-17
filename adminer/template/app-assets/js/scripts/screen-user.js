// Dashboard - Modern
//----------------------

(function (window, document, $) {

  	temp_href = location.href;
  	temp_pos = String(temp_href).indexOf('/user/');
  	user_id = temp_href.substring(temp_pos+6);

    flag_ban = false;

    //search keypress
    $(document).on("click", "#ban_switch_checkbox", function(e){
      if(flag_ban != $("#ban_switch_checkbox").prop('checked')){
        flag_ban = $("#ban_switch_checkbox").prop('checked');
        ajax_send('/set_ban/'+user_id+'/'+flag_ban, function(data){});
      }
    });

    // auto loading 
    auto_load('/user/'+user_id, function(data){
      console.log(data);

      // input the value of dom[data-key=""]
      $('[data-key="pps_count"]').text(data['pp']);
      $('[data-key="fullz_count"]').text(data['fullz']);
      $('[data-key="dead_fullz_count"]').text(data['dead_fullz']);
      $('[data-key="transaction"]').text(data['trans']);
      $('[data-key="price"]').text(data['price']);

      if(data['ban'] == 'Y'){
        flag_ban = true; 
        $("#ban_switch_checkbox").prop( "checked", true );
      }
      else{
        flag_ban = false;
        $("#ban_switch_checkbox").prop( "checked", false );
      }

    });

})(window, document, jQuery);