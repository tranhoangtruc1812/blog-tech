export default $(function(){
    $("#logo-salad").slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 6,
        arrows:true,
        prevArrow:'<a class="btn round prevBtn"><i class="icon-arrow-left"/> </a>',
        nextArrow:'<a class="btn round nextBtn"><i class="icon-arrow-right"/></a>'
    });
})