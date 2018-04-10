function onSuccess(googleUser) {
    profile = googleUser.getBasicProfile();
    id_token = googleUser.getAuthResponse().id_token;
    id = profile.getId(); // Do not send to your backend! Use an ID token instead.
    name = profile.getGivenName();
    image = profile.getImageUrl();
    email = profile.getEmail(); // This is null if the 'email' scope is not present.
    
    $.post( "login.php", { 'id_token': id_token })
        .done(function( data ) {
            $("#content").html(data);
            $("#username").text(name);
            // console.log("success");
            // console.log(data);
        });
    
}
function onFailure(error) {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
        // window.location.replace("logout.php");
    });
}
function renderButton() {
    gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
    });
}
function renderButton2() {
    gapi.signin2.render('my-signup2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSignup,
        'onfailure': onFailure
    });
}
function onSignup(googleUser) {
    var id_token_s = googleUser.getAuthResponse().id_token;
    
    
    $.post( "signup.php", { 'id_token': id_token_s })
        .done(function( data ) {
            console.log(data);
            signOut();
            $.get("partials/_login_form.html", function(data) {
                $("#content").html(data);
                renderButton();
            });
            // onSuccess(googleUser);
        });
}


function getsignup() {
    signOut();
    $.get("partials/_signup_form.html", function(data) {
        $("#content").html(data);
        renderButton2();
    });
}
function getindex() {
    signOut();
}
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
        $.get("logout.php", function(data) {
                $("#content").html(data);
                renderButton();
            });
    });
}

function getadd() {
    $.get("add.php", function(data) {
            $("#content").html(data);
            $("#username").text(name);
            $('.custom-file-input').on('change', function() {
                var fileName = $(this).val().split('\\').pop();
                $('.custom-file-label').html(fileName);
            });
        });
}

function gettienda() {
    $.get("login.php", function(data) {
            $("#content").html(data);
            $("#username").text(name);
        });
    
}