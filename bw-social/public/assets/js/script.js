(function ($) {

    $('#header__icon').click(function (e) {
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    $('#site-cache').click(function (e) {
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
$(".more").on('click', function (e) {
    var element = e.target;
    var prev = element.previousElementSibling;
    var prevprev = prev.previousElementSibling;
    var next = element.nextElementSibling;
    element.classList.add("hidden");
    prevprev.classList.add("expand");
    next.classList.remove("hidden");
    next.classList.add("nohidden");
    e.preventDefault();
    e.stopPropagation();
});

$("a.less").on('click', function (e) {
    var element = e.target;
    var description = $('.activity_description');
    var prev = element.previousElementSibling;
    var prevprev = prev.previousElementSibling;
    var prevprevprev = prevprev.previousElementSibling;
    element.classList.remove("nohidden");
    element.classList.add("hidden");
    prev.classList.remove("hidden");
    prevprevprev.classList.remove("expand")


    // e.preventDefault();
    // e.stopPropagation();
});

function addActivity() {
    var nb = $(".thumbnail").length;
    console.log(nb);
    $.ajax({
        url: '/activities/more',
        data: {'nb': nb},
        type: 'post',
        success: function (data) {
            if (data['success'] == true) {
                var jsonResponse = JSON.parse(data['activities']);
                $.each(jsonResponse, function () {
                    console.log(this);
                    $("#list_activity").append("<div class=\"col-xs-12 col-sm-6 col-md-8 grid\">" +
                        "<div class=\"activity\">"+
                        "<div class=\"image-container\"><img src=\"assets/img/" + this.type.image + "\" alt=\"...\" class=\"activitybanner\">" +
                            "<div class=\"after\"></div>"+
                            "<div class=\"info\">"+
                                "<div class=\"user_logo\">"+
                                     "<img src=\"assets/img/blank-profile.jpg\">"+
                                "</div>"+
                                "<div class=\"user_name\">"+
                                   "<p class=\"white\">" + this.user.firstname + this.user.name+"</p>"+
                                "</div>"+
                            "</div>"+
                        "</div>"+
                        "<div class=\"content\"><h3>" + this.name + "<br><span class=\"date\">" + this.date_activity + "</span></h3>" +
                        "<p class=\"activity_description\">" + this.description + "</p><a class=\"more\">voir plus...</a>" +
                        "<a class=\"less hidden\">voir moins...</a>"+
                        "<a class=\"participate\" href=\"\">Je participe</a></div></div></div></div>");

                });

            }
            else {
                $("#loadmore").addClass("hidden");
            }
        }
    });
}
