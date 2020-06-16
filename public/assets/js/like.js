$('.like').click(function() {
    var like_status = $(this).attr('data-like-status');
    var post_id = $(this).attr('data-postid');

    $.ajax({
        type: 'post',
        url: url,
        data: { like_s: like_status, post_id: post_id, _token: token },
        success: function(data) {
            alert('cc');
        }
    });
});