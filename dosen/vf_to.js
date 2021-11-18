var combobox1_to =  document.getElementById('kelas_to');
var combobox2_to =  document.getElementById('nim_to');
// untuk formverifikasi_rpl
combobox1_to.addEventListener('change',function(){
    // membuat object ajax

    
    var xxhttp = new XMLHttpRequest() 

    // cek kesiapan ajax
    xxhttp.onreadystatechange = function() {
        if(xxhttp.readyState == 4 && xxhttp.status == 200) {
            combobox2_to.innerHTML = xxhttp.responseText;
        }
    }

    //  eksekusi ajax
    xxhttp.open('GET','ajax/vf_to.php?kelas='+ combobox1_to.value,true);
    xxhttp.send();
});