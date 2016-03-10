(function($){

    $('#header__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
    })

})(jQuery);

/**
 * Created by Max on 09/03/2016.
 */

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(".more" ).on('click', function(e) {
    var element = e.target;
    var prev = element.previousElementSibling;
    var next = element.nextElementSibling;
    element.classList.add("hidden");
    prev.classList.add("expand");
    next.classList.add("nohidden");
    e.preventDefault();
    e.stopPropagation();
});

function addActivity()
{
    var nb = $(".thumbnail").length;
    console.log(nb);
    $.ajax({
        url: '/activities/more',
        data: {'nb': nb },
        type: 'post',
        success: function(data) {
            if(data['success'] == true)
            {
                var jsonResponse = JSON.parse(data['activities']);
                $.each(jsonResponse, function(){
                    console.log(this);
                    $("#list_activity").append("<div class=\"col-xs-12 col-sm-6 col-md-8\"><div class=\"thumbnail\"><img src=\"assets/img/"+ this.type.image +"\" alt=\"...\"><div class=\"caption\"><h3>"+ this.name +"<br><span class=\"date\">"+ this.date_activity+"</span></h3><p class=\"activity_description\">"+ this.description+"</p><a class=\"more\">voir plus...</a><a class=\"participate\" href=\"\">Je participe</a></div></div></div>");
                });

            }
            else
            {
                $("#loadmore").addClass("hidden");
            }
        }
    });
}
