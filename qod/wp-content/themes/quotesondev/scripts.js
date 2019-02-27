(function ($) {

    $('#change-quote').on('click', function (event) {
        event.preventDefault();


        $.ajax({
            method: 'get',
            url: qod_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
        })

            .done(function (response) {
                console.log(response);
                $('#post-quote').html(response[0].excerpt.rendered);
                $('#author').html(response[0].title.rendered);
                // $()._qod_quote_source);

            });
        
    });



})(jQuery);
