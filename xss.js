// test de XSS

function toggleAccordion()
{
    var button = $(this)[0];
    var zone = button.getAttribute('data-target');
    var buttonId = button.getAttribute('id');
    $(zone.toString()).slideToggle();
    $('#' + buttonId + ' a').toggleClass('collapsed');
}
