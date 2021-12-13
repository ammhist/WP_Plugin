<?php
if (!defined("ABSPATH")) {
    exit; // Exit if accessed directly
  }
    // top-level administrative menu
function myplugin_add_toplevel_menu() {
    add_menu_page(
        'GoonSquad QR Generate',
        'QR Generate',
        'manage_options',
        'myplugin',
        'displaypage',
        'dashicons-admin-generic',
        null
    );
}

function displaypage() {
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../wp-content/plugins/wordpres/plugin/admin/css/style.css" />
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css"
              integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX"
              crossorigin="anonymous">
        <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
        <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
        <script type="text/javascript">
        function myFunction() {
            document.getElementById("qrcode").innerHTML="";
            var site = document.getElementById('Link2Site').value
            new QRCode(document.getElementById("qrcode"), site);
        }
        </script>  
    </head>
    <section class="qrsection">

        <h1>GOONSQUAD QR CODE GENERATOR</h1>
        
    </section>
    <section class="qrinsert">
        <div id="qrcode"></div>
        <form>
            <label for="Link2Site">Link to website</label><br>
            <input type="text" id="Link2Site" name="Link2Site"><br>
        </form>
        <button onclick="myFunction()">Generate QR Code</button>
    </section>   
</html>

<?php
}
