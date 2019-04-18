// /*
// * ChartJS - Chart
// */

(function (window, document, $) {

    temp_href = location.href;
    temp_pos = String(temp_href).indexOf('/order');
    temp_url = temp_href.substring(0, temp_pos);
    order_id = temp_href.substring(temp_pos+7);
    if(order_id != '') load_url = '/order/' + order_id;
    else load_url = '/order';

    //search keypress
    $(document).on("keypress", '[data-key="search_input"]', function(e){
        if(e.which == 13){
            var inputVal = $(this).val();
            var select_option = $('#search_select').val();
            if(select_option == 1) location.href = temp_url + '/order/' + inputVal + '/uin';
            else if(select_option == 2) location.href = temp_url + '/order/' + inputVal + '/pid';
            else if(select_option == 3) location.href = temp_url + '/order/' + inputVal + '/oid';
        }
    });

    // auto loading 
    auto_load(load_url, function(data){
      console.log(data);
      total_count = data.length;
      data_paid = [];
      data_ongoing = [];
      data_canceled = [];
      data_failed = [];
      data_replaced = [];
      data_all = [];

      for(var i = 0; i < total_count; i++){
        temp = data[i];
        temp_array = temp['product_id'].split(',');
        temp['count'] = 0;
        for(var j = temp_array.length - 1; j >= 0; j--) if(temp_array[j] != '') temp['count']++;
        if(temp['success'] == 'Y') data_paid.push(temp);
        if(temp['success'] == 'N' && temp['ongoing'] == 'Y' && temp['canceled'] == 'N') data_ongoing.push(temp);
        if(temp['ongoing'] == 'Y' && temp['canceled'] == 'Y') data_canceled.push(temp);
        if(temp['success'] == 'N' && temp['ongoing'] == 'N') data_failed.push(temp);
        if(temp['success'] == 'Y' && temp['success'] == 'N') data_replaced.push(temp);
        data_all.push(temp);
      }

      // table all
      temp_html = '';
      total_count = data_all.length;
      for(var i = 0; i < total_count; i++){
        temp_html += '<tr><td>'+data_all[i]['id']+'</td><td>'+data_all[i]['uin']+'</td><td>'+data_all[i]['time']+'</td><td>'+data_all[i]['product_type']+'</td><td>'+data_all[i]['count']+'</td><td>'+data_all[i]['gbp']+'</td><td><a href="'+temp_url+'/chat/'+data_all[i]['uin']+'"><i class="material-icons dp48">chat_bubble</i></a></td></tr>';
      }
      $('[data-key="table_all"]').html(temp_html);

      // table paid
      temp_html = '';
      total_count = data_paid.length;
      for(var i = 0; i < total_count; i++){
        temp_html += '<tr><td>'+data_paid[i]['id']+'</td><td>'+data_paid[i]['uin']+'</td><td>'+data_paid[i]['time']+'</td><td>'+data_paid[i]['product_type']+'</td><td>'+data_paid[i]['count']+'</td><td>'+data_paid[i]['gbp']+'</td><td><a href="'+temp_url+'/chat/'+data_paid[i]['uin']+'"><i class="material-icons dp48">chat_bubble</i></a></td></tr>';
      }
      $('[data-key="table_paid"]').html(temp_html);

      // table ongoing
      temp_html = '';
      total_count = data_ongoing.length;
      for(var i = 0; i < total_count; i++){
        temp_html += '<tr><td>'+data_ongoing[i]['id']+'</td><td>'+data_ongoing[i]['uin']+'</td><td>'+data_ongoing[i]['time']+'</td><td>'+data_ongoing[i]['product_type']+'</td><td>'+data_ongoing[i]['count']+'</td><td>'+data_ongoing[i]['gbp']+'</td><td><a href="'+temp_url+'/chat/'+data_ongoing[i]['uin']+'"><i class="material-icons dp48">chat_bubble</i></a></td></tr>';
      }
      $('[data-key="table_ongoing"]').html(temp_html);

      // table canceled
      temp_html = '';
      total_count = data_canceled.length;
      for(var i = 0; i < total_count; i++){
        temp_html += '<tr><td>'+data_canceled[i]['id']+'</td><td>'+data_canceled[i]['uin']+'</td><td>'+data_canceled[i]['time']+'</td><td>'+data_canceled[i]['product_type']+'</td><td>'+data_canceled[i]['count']+'</td><td>'+data_canceled[i]['gbp']+'</td><td><a href="'+temp_url+'/chat/'+data_canceled[i]['uin']+'"><i class="material-icons dp48">chat_bubble</i></a></td></tr>';
      }
      $('[data-key="table_canceled"]').html(temp_html);

      // table failed
      temp_html = '';
      total_count = data_failed.length;
      for(var i = 0; i < total_count; i++){
        temp_html += '<tr><td>'+data_failed[i]['id']+'</td><td>'+data_failed[i]['uin']+'</td><td>'+data_failed[i]['time']+'</td><td>'+data_failed[i]['product_type']+'</td><td>'+data_failed[i]['count']+'</td><td>'+data_failed[i]['gbp']+'</td><td><a href="'+temp_url+'/chat/'+data_failed[i]['uin']+'"><i class="material-icons dp48">chat_bubble</i></a></td></tr>';
      }
      $('[data-key="table_failed"]').html(temp_html);

      // table replaced
      temp_html = '';
      total_count = data_replaced.length;
      for(var i = 0; i < total_count; i++){
        temp_html += '<tr><td>'+data_replaced[i]['id']+'</td><td>'+data_replaced[i]['uin']+'</td><td>'+data_replaced[i]['time']+'</td><td>'+data_replaced[i]['product_type']+'</td><td>'+data_replaced[i]['count']+'</td><td>'+data_replaced[i]['gbp']+'</td><td><a href="'+temp_url+'/chat/'+data_replaced[i]['uin']+'"><i class="material-icons dp48">chat_bubble</i></a></td></tr>';
      }
      $('[data-key="table_replaced"]').html(temp_html);

    });

})(window, document, jQuery);