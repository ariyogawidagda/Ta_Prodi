var combobox1_tl =  document.getElementById('kelas_tl');
var combobox2_tl =  document.getElementById('nim_tl');
// untuk formta_tl
combobox1_tl.addEventListener('change',function(){
    // membuat object ajax

    
    var xxhttp = new XMLHttpRequest() 

    // cek kesiapan ajax
    xxhttp.onreadystatechange = function() {
        if(xxhttp.readyState == 4 && xxhttp.status == 200) {
            combobox2_tl.innerHTML = xxhttp.responseText;
        }
    }

    //  eksekusi ajax
    xxhttp.open('GET','ajax/vf_tl.php?kelas='+ combobox1_tl.value,true);
    xxhttp.send();
});