// mengambil elemen yang dibutuhkan

var combobox1 =  document.getElementById('nippb1');
var katadsn = document.getElementById('dsn1');




// menambah event atau aksi ketika keyword di tulis
katadsn.addEventListener('keyup',function(){
    // membuat object ajax
    var xhr = new XMLHttpRequest() 

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            combobox1.innerHTML = xhr.responseText;
        }
    }

    //  eksekusi ajax
    xhr.open('GET','ajax/formta1.php?katadsn='+ katadsn.value,true);
    xhr.send();
});

