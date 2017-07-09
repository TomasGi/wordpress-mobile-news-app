$("#all-news").dragend({
    minDragDistance: "120",
    afterInitialize: function () {
        this.container.style.visibility = "visible";
    },
    onSwipeEnd: function () {
        var first = this.pages[0],
            last = this.pages[this.pages.length - 1]

        //$(".prev, .next").removeClass("deactivated");
        $(".category-list-items li").removeClass("active-menu-element");
        $(".category-list-items li a").removeClass("active-menu-element");
        // if (first === this.activeElement) {
        //     $(".prev").addClass("deactivated")
        // };

        // if (last === this.activeElement) {
        //     $(".next").addClass("deactivated")
        // }

        $(".category-list-items li").eq(this.page).addClass("active-menu-element")
        var newsType = $(".active-menu-element").data('type')
        chnageText(newsType)
        // var newsType = $(".active-menu-element").data('type')
        // console.log(newsType)
        // if ($('.news-type').html() !== newsType) {
        //     $('.news-type').text(newsType)
        // }

    }
})
function chnageText(newsType) {
    console.log(newsType)
    if ($('.news-type').html() !== newsType) {
        $('.news-type').text(newsType)
    }
}



$(".category-list-items li").click(function () {
    console.log('clicked on menu JQ')
    var page = $(this).data("page")
    //var newsType = $(this).data('type')
    $("#all-news").dragend({
        scrollToPage: page
    });

    $(event.target).addClass("active-menu-element");

})
