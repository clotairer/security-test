// test de XSS
function toggleDisabledZone(event) 
{
    var clickedZone = event.currentTarget;
    var zoneToToggle = $(clickedZone).attr('data-toggle');
    var inputId = $(clickedZone).attr('data-input');
    var inputValue = $('#' + inputId).not(':checked').length > 0;
    if (inputValue === false) {
        $('[data-' + zoneToToggle + ']').removeAttr('disabled');
        if (zoneToToggle === 'month') {
            $('#widget_input').prop('disabled', true);
            $('#widget_input').removeClass('widget_disabled');
            $('#widget_input').addClass('widget_enabled');
        }
    } else {
        $('[data-' + zoneToToggle + ']').prop('disabled', true);
        if (zoneToToggle === 'month') {
            $('#widget_input').addClass('widget_disabled');
            $('#widget_input').removeClass('widget_enabled');
        }
    }
}
