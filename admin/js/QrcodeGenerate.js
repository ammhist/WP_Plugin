
function myFunction() {
    var site = document.getElementById('Link2Site').value
    new QRCode(document.getElementById("qrcode"), site);
}