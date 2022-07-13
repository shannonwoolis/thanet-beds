var postcodeField = document.getElementById('postcode');
var postcodeSubmit = document.getElementById('postcodeSubmit');
var addButton = document.querySelectorAll('#cartWrapper button[type="submit"]'); // ALL
addButton.forEach(function(btn) {
    btn.disabled = true;
});
var checkoutForm = document.getElementById("cartWrapper");
var success = document.getElementById("success");
var error = document.getElementById("error");
var delivery = false;
var change = document.querySelectorAll(".changePostcode"); // ALL
var postcodeForm = document.getElementById("postcode-checker");

change.forEach(function(ch) {
    ch.addEventListener('click', function() {
        postcodeForm.classList.add('block')
        postcodeForm.classList.remove('hidden');
        setCookie("postcodeCookie", "", 365);
        delivery = false;
    });
});

postcodeSubmit.addEventListener('click', function(e) {
    e.preventDefault();
    updatePostcode();
});

function setCookie(postcode, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = postcode + "=" + cvalue + ";" + expires + ";path=/";
}
  
function getCookie(postcode) {
    let name = postcode + "=";
    let ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkPostcode() {
    var postcodeCookie = getCookie("postcodeCookie");
    // console.log(postcodeCookie);
    
    if(postcodeCookie){
        var request = new XMLHttpRequest();
        request.open('GET', '/wp-content/themes/thanet-bedz/postcodes.json', true);
        
        request.onload = function() {
            if (request.status >= 200 && request.status < 400) {
                var data = JSON.parse(request.responseText);
                data.forEach(function( val ) {
                    var loc = val.location_code.toLowerCase();

                    if( loc && loc.indexOf(postcodeCookie) >= 0 ) {
                        delivery = true;
                    }
                });

                if(delivery) {
                    success.classList.remove('hidden'); success.classList.add('block');
                    error.classList.add('hidden'); error.classList.remove('block');
                    checkoutForm.classList.remove('hidden');
                    addButton.forEach(function(btn) {
                        btn.disabled = false;
                    });
                } else {
                    error.classList.remove('hidden'); error.classList.add('block');
                    success.classList.add('hidden'); success.classList.remove('block');
                    checkoutForm.classList.add('hidden');
                    addButton.forEach(function(btn) {
                        btn.disabled = true;
                    });
                }
            } else {
                console.log('no data');
            }
        };

        request.send();
    }

    postcodeForm.classList.add('hidden'); postcodeForm.classList.remove('block');
}

function updatePostcode() {
    var postcodeCookie = getCookie("postcodeCookie");
    var formError = document.getElementById("formError");
    // console.log(postcodeCookie);

    if(postcodeCookie == "") {
        var postcode = postcodeField.value;
        if(postcode != ""){
            function isValidPostcode(p) { 
                var postcodeRegEx = /[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}/i; 
                return postcodeRegEx.test(p); 
            }
            if(isValidPostcode(postcode)) {
                var postcodeNoSpace = postcode.toLowerCase().replace(/\s/g, '');
                var start = postcodeNoSpace.slice(0,-3);
                setCookie("postcodeCookie", start, 365);
                formError.classList.remove('block'); formError.classList.add('hidden');

                checkPostcode();
            } else {
                formError.classList.remove('hidden'); formError.classList.add('block');
            }
        } else {
            postcodeForm.classList.add('block'); postcodeForm.classList.remove('hidden');
        }
    } else {
        checkPostcode();
    }
}

updatePostcode();