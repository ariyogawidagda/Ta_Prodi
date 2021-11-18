

var katadsn2 = document.getElementById('dsn2');
var combobox2 =  document.getElementById('nippb2');
katadsn2.addEventListener('keyup',function(){
    // membuat object ajax
    var xhttp = new XMLHttpRequest() 

    // cek kesiapan ajax
    xhttp.onreadystatechange = function() {
        if(xhttp.readyState == 4 && xhttp.status == 200) {
            combobox2.innerHTML = xhttp.responseText;
        }
    }

    //  eksekusi ajax
    xhttp.open('GET','ajax/nmdsn.php?katadsn2='+ katadsn2.value,true);
    xhttp.send();
});