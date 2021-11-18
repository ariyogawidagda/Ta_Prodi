var keyword_mhs = document.getElementById('keyword_mhs');
var container_mhs = document.getElementById('container_mhs');

// untuk list mahasiswa
keyword_mhs.addEventListener('keyup',function(){
    // membuat object ajax
    var xxhr = new XMLHttpRequest() 

    // cek kesiapan ajax
    xxhr.onreadystatechange = function() {
        if(xxhr.readyState == 4 && xxhr.status == 200) {
            container_mhs.innerHTML = xxhr.responseText;
        }
    }

    //  eksekusi ajax
    xxhr.open('GET','ajax/listmahasiswa.php?keyword='+ keyword_mhs.value,true);
    xxhr.send();
});
