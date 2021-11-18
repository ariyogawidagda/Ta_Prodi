var keyword = document.getElementById('keyword_prodi');
var container = document.getElementById('container_prodi');

// untuk list mahasiswa
keyword.addEventListener('keyup',function(){
    // membuat object ajax
    var xxhr = new XMLHttpRequest() 

    // cek kesiapan ajax
    xxhr.onreadystatechange = function() {
        if(xxhr.readyState == 4 && xxhr.status == 200) {
            container.innerHTML = xxhr.responseText;
        }
    }

    //  eksekusi ajax
    xxhr.open('GET','ajax/listprodi.php?keyword='+ keyword.value,true);
    xxhr.send();
});
