// mengambil elemen yang dibutuhkan

var keyword = document.getElementById('keyword_dosen');
var container = document.getElementById('container_dosen');






// menambah event atau aksi ketika keyword di tulis
// Untuk list dosen
keyword.addEventListener('keyup',function(){
    // membuat object ajax
    var xhr = new XMLHttpRequest() 

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    //  eksekusi ajax
    xhr.open('GET','ajax/listdosen.php?keyword='+ keyword.value,true);
    xhr.send();
});


