$.pjax.defaults.timeout = 5000;
$.pjax.defaults.maxCacheLength = 0;


$('document').ready(function(){$('body').on('click', '.buttonm', function(event){
event.preventDefault();
$('.col-md-7').removeClass('hide');
$('.newhide').addClass('hide');

});})

$(document).ready(function() {
    $('body').on('click', '.incart', function(event){
        event.preventDefault();
        var id = $(this).attr('id'); 
        let qwt = $(this).parents('.text-right').children('.qwt').val();

        console.log(count);
            $.ajax({
            type: "POST", 
            url: 'cart',
            data: {
                
                "product_id": id,
                "qty" : qwt
                },
            
            success: function(data) {

                var addCount = Number(count) + Number(qwt);
                count = addCount;
                var addText = 'Cart('+ addCount +')';
                $('#cart').val(addText);
                $('#cart').text(addText);
                $('#cart').change();

                }
            });
    });

  })

$(document).pjax('a:not(a[target="_blank"])', {
    container: '#pjax-container'
});

NProgress.configure({parent: 'body'});

$(document).on('pjax:timeout', function (event) {
    event.preventDefault();
})

$(document).on('submit', 'form[pjax-container]', function (event) {
    $.pjax.submit(event, '#pjax-container')
});

$(document).on("pjax:popstate", function () {

    $(document).one("pjax:end", function (event) {
        $(event.target).find("script[data-exec-on-popstate]").each(function () {
            $.globalEval(this.text || this.textContent || this.innerHTML || '');
        });
    });
});

$(document).on('pjax:send', function (xhr) {
    if (xhr.relatedTarget && xhr.relatedTarget.tagName && xhr.relatedTarget.tagName.toLowerCase() === 'form') {
        $submit_btn = $('form[pjax-container] :submit');
        if ($submit_btn) {
            $submit_btn.button('loading')
        }
    }
    NProgress.start();
});

$(document).on('pjax:complete', function (xhr) {
    if (xhr.relatedTarget && xhr.relatedTarget.tagName && xhr.relatedTarget.tagName.toLowerCase() === 'form') {
        $submit_btn = $('form[pjax-container] :submit');
        if ($submit_btn) {
            $submit_btn.button('reset')
        }
    }
    NProgress.done();
    if ( location.pathname === "/" ) {
        $('#navbarsExampleDefault li').removeClass('active');
    }
});

$(function () {
    $('#navbarsExampleDefault li > a').on('click', function () {
        var $parent = $(this).parent().addClass('active');
        // $parent.siblings('.active').find('> a').trigger('click');
        // $parent.siblings().removeClass('active').find('li').removeClass('active');
        $parent.siblings().removeClass('active');
    });



});