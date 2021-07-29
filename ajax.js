let getHttpRequest = function() {
    let httpRequest = false;

if (window.XMLHttpRequest) { //Mozilla, Safari
    httpRequest = new XMLHttpRequest();
    if (httpRequest.overrideMimeType) {
        httpRequest.overrideMimeType('text/xml');
    }
}
else if (window.ActiveXObject) { //IE
    try {
        httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e) {
        try {
            httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (e) {}
    }
}
if (!httpRequest) {
    alert('Abandon :( Impossible de créer une instance XMLHTTP');
    return false;
}
return httpRequest;
}

let result = document.querySelector('#result')
form.addEventListener('submit', function(e) {
    e.preventDefault()
    result.innerHTML = 'Chargement...'
    let httpRequest = getHttpRequest();
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === 4) {
            result.innerHTML = ''
            if (httpRequest.status === 200) {
                result.innerHTML = httpRequest.responseText
            } else ('impossible de contacter le serveur')
        }
    }

    httpRequest.open('POST', 'chatprivate.php', true)
    let data = new FormData(form)
    httpRequest.send(data);
})