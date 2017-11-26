/**
 * Created by Son Minh on 10/6/2017.
 */
function setLanguage(setting) {
    var formdata = {
        'language': setting,
        '_token' : $('meta[name="csrf-token"]').attr('content'),
        '_method' : 'POST'
    };
    $.ajax({
        method : 'POST',
        url: "/core/setlang",
        data: formdata,
        dataType: 'json',
        success: function (result) {
            if(result.Status == '200')
            {
                location.reload();
            }
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
    return false;
}

