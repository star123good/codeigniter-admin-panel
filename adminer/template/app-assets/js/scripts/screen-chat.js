// /*
// * ChartJS - Chart
// */

(function (window, document, $) {

    temp_href = location.href;
    temp_pos = String(temp_href).indexOf('/chat');
    user_id = temp_href.substring(temp_pos+5);
    if(user_id != '') load_url = '/chat' + user_id;
    else load_url = '/chat';

    // auto loading 
    auto_load(load_url, function(data){
      console.log(data);

      total_count = data['users'].length;
      for(var i = 2; i <= total_count; i++){
        temp_dom = $('#chat-user-delay-1').clone();
        temp_dom.attr('id', 'chat-user-delay-'+i);
        temp_dom.appendTo('#chat-users-list');
      }

      $( ".chat-user" ).each(function( index ) {
        temp_href = $(this).attr('href') + '/' + data['users'][index]['uin'];
        temp_date = data['users'][index]['time'].split(' ')[0]
        temp_time = data['users'][index]['time'].split(' ')[1]
        $(this).attr('href', temp_href);
        if(data['users'][index]['uin'] == data['selected']) $(this).addClass('active');
        $(this).find('[data-key="uin"]').text(data['users'][index]['uin']);
        $(this).find('[data-key="date"]').text(temp_date);
        $(this).find('[data-key="time"]').text(temp_time);
        $(this).find('[data-key="index"]').text(index+1);
      });

      const max_chats_count = 50;

      total_count = Math.min(data['chats'].length, max_chats_count);
      for(var i = 2; i <= total_count; i++){
        temp_dom = $('#chat-each-user-1').clone();
        temp_dom.attr('id', 'chat-each-user-'+i);
        temp_dom.appendTo('#chat-each-users-multi');
      }

      $( ".chat-each-user" ).each(function( index ) {
        temp_chat = data['chats'][data['chats'].length-total_count+index];
        if(temp_chat['is_bot'] == false) $(this).addClass('chat-right');
        $(this).find('.chat-text p').text(temp_chat['message']);
        $(this).find('.chat-text span').text(temp_chat['time']);
      });

      $('[data-key="selected_uin"]').text(data['selected']);

    });

})(window, document, jQuery);