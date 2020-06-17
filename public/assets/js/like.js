$('.like').click(function() {
    var like_status = $(this).attr('data-like-status');
    var post_id = $(this).attr('data-postid');
    var npost_id = post_id.slice(0 , -2);
    var li_postid = npost_id + '-l';
    var dli_postid = npost_id + '-d';
    $.ajax({
        type: 'post',
        url: url,
        data: { like_s: like_status, post_id: npost_id, _token: token },
        success: function(data) {
           
           if(data.is_like == 1)
           {
                $('*[data-postid="'+ li_postid +'"]').removeClass('btn-default').addClass('btn-success');
                $('*[data-postid="'+ dli_postid +'"]').removeClass('btn-danger').addClass('btn-default');
                var like_count =  $('*[data-postid="'+ li_postid +'"]').find('.like-count').text();
                var dislike_count =  $('*[data-postid="'+ dli_postid +'"]').find('.dislike-count').text();
                $('*[data-postid="'+ li_postid +'"]').find('.like-count').text(parseInt(like_count)+1);   
                if(data.change_like == 1)
                {
                    $('*[data-postid="'+ dli_postid +'"]').find('.dislike-count').text(parseInt(dislike_count)-1);
                }  
           }
           else
           { 
                 $('*[data-postid="'+ li_postid +'"]').removeClass('btn-success').addClass('btn-default');
                 var like_count =  $('*[data-postid="'+ li_postid +'"]').find('.like-count').text();
                 $('*[data-postid="'+ li_postid +'"]').find('.like-count').text(parseInt(like_count)-1);
           }
        }
    });
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////
$('.dislike').click(function() {
    var like_status = $(this).attr('data-like-status');
    var post_id = $(this).attr('data-postid');
    var npost_id = post_id.slice(0 , -2);
    var li_postid = npost_id + '-l';
    var dli_postid = npost_id + '-d';
    //console.log(url_dislike);

    $.ajax({
        type: 'post',
        url: url_dislike,
        data: { like_s: like_status, post_id: npost_id, _token: token },
        success: function(data) {
            console.log(url); 
           if(data.dis_like == 1)
           {
               
            $('*[data-postid="'+ dli_postid +'"]').removeClass('btn-default').addClass('btn-danger');
                $('*[data-postid="'+ li_postid +'"]').removeClass('btn-success').addClass('btn-default');
                var like_count =  $('*[data-postid="'+ li_postid +'"]').find('.like-count').text();
                var dislike_count =  $('*[data-postid="'+ dli_postid +'"]').find('.dislike-count').text();
                $('*[data-postid="'+ dli_postid +'"]').find('.dislike-count').text(parseInt(dislike_count)+1);  
                if(data.change_like == 1)
                {
                    $('*[data-postid="'+ li_postid +'"]').find('.like-count').text(parseInt(like_count)-1); 
                }   
           }
           else
           { 
                 $('*[data-postid="'+ dli_postid +'"]').removeClass('btn-danger').addClass('btn-default');
                 var dislike_count =  $('*[data-postid="'+ dli_postid +'"]').find('.dislike-count').text();
                 $('*[data-postid="'+ dli_postid +'"]').find('.dislike-count').text(parseInt(dislike_count)-1);
           }
        }
    });
});