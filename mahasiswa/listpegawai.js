var keyword_pegawai = document.getElementById('keyword_pegawai');
var container_pegawai = document.getElementById('container_pegawai');

// untuk list mahasiswa
keyword_pegawai.addEventListener('keyup',function(){
    // membuat object ajax
    var xxhr = new XMLHttpRequest() 

    // cek kesiapan ajax
    xxhr.onreadystatechange = function() {
        if(xxhr.readyState == 4 && xxhr.status == 200) {
            container_pegawai.innerHTML = xxhr.responseText;
        }
    }

    //  eksekusi ajax
    xxhr.open('GET','ajax/listpegawai.php?keyword='+ keyword_pegawai.value,true);
    xxhr.send();
});
