$('.dropdown').on('show.bs.dropdown', function () {
    $(this).siblings('.open').removeClass('open').find('a.dropdown-toggle').attr('data-toggle', 'dropdown');
    $(this).find('a.dropdown-toggle').removeAttr('data-toggle');
});