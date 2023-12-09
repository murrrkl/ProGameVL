$('.spoiler_title').click(function() {
    $(this).parents('.spoiler_wrap').find('.spoiler_content').toggleClass('open');
    $(this).parents('.spoiler_wrap').find('.spoiler_arrow').toggleClass('open');
});