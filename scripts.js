(function ($) {

    let lastPage = '';

    //make back / forward nav work with history API
    $(window).on('popstate', function () {
        window.location.replace(lastPage);
    });

    $('#change-quote').on('click', function (event) {
        event.preventDefault();

        //store pree-AJAX request URL for back/forward nav
        lastPage = document.URL;


        $.ajax({
            method: 'get',
            url: qod_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
        })

            .done(function (response) {
                console.log(response);
                $('.post-quote').html(response[0].excerpt.rendered);
                $('.author').html(response[0].title.rendered);

                if (response[0]._qod_quote_source_url && response[0]._qod_quote_source) {
                    $('.author').append(`<a target='_blank' class='author-source'
                          href=${response[0]._qod_quote_source_url}
                          >, ${response[0]._qod_quote_source}</a>`)
                }

                const url = qod_vars.home_url + '/' + response[0].slug + '/';
                history.pushState(null, null, url);
                console.log(url);

            })
    });

    $('#submit-form').on('submit', function (event) {
        event.preventDefault();


        const inputs = {
            title: $('#quote-author').val(),
            content: $('#quote').val(),
            _qod_quote_source_url: $('#quote-location').val(),
            _qod_quote_source: $('quote-url').val()
        };

        console.log(inputs);


        $.ajax({
            method: 'post',
            url: qod_vars.rest_url + 'wp/v2/posts/',
            data: inputs,
            success: function (response) {
                console.log('success');
            },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-WP-Nonce', qod_vars.wpapi_nonce);
            }
        }).done(function () {
            console.log('done');

            $("#submit-form").slideUp("slow", function () {
                $('.quote-submission-form').html('<p>Thanks, your quote submission was recieved!</p>');
            });


        }).fail(function () {
            alert("There was an error with your submission, please try again.");
        });
    });

})(jQuery);
