$('.matrix').unbind('click');
$('.matrix').bind('click', function () {
    var idg = $(this).attr('name');
    var idh = $(this).attr('id');
    document.getElementById('mg').value = idg;
    document.getElementById('mh').value = idh;
    var m_data = $('#frmm').serialize();
    $.ajax({
        type: 'POST',
        url: '/action.php',
        data: m_data,
        success: function (html) {
            jQuery('#mid-' + idh + '-' + idg).html(html);
            $("[rel='popover']").popover();
        },
        error: function (xhr, str) {
            alert('������:' + xhr.responseCode);
        }
    });
    return false;
});