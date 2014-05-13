// Login Form

$(function() {
    var button = $('#7ell');
    var box = $('#loginBox');
    var form = $('#loginForm');
    button.removeAttr('href');
    button.mouseup(function(login) {
        box.toggle();
        button.toggleClass('active');
    });
    form.mouseup(function() { 
        return false;
    });
    $(this).mouseup(function(login) {
        if(!($(login.target).parent('#7ell').length > 0)) {
            button.removeClass('active');
            box.hide();
        }
    });
});
