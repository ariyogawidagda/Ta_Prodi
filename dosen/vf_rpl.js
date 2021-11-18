var combobox1_rpl =  document.getElementById('kelas_rpl');
var combobox2_rpl =  document.getElementById('nim_rpl');
// untuk formverifikasi_rpl
combobox1_rpl.addEventListener('change',function(){
    // membuat object ajax

    
    var xxhttp = new XMLHttpRequest() 

    // cek kesiapan ajax
    xxhttp.onreadystatechange = function() {
        if(xxhttp.readyState == 4 && xxhttp.status == 200) {
            combobox2_rpl.innerHTML = xxhttp.responseText;
        }
    }

    //  eksekusi ajax
    xxhttp.open('GET','ajax/vf_rpl.php?kelas='+ combobox1_rpl.value,true);
    xxhttp.send();
});