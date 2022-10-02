function message(){
    var Nomor = document.getElementById('no');
    var name = document.getElementById('nama_pelanggan');
    var menu = document.getElementById('menu');
    var harga = document.getElementById('harga');
    var jumlah = document.getElementById('jumlah');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(Nomor.value === '' || name.value === '' || menu.value === '' || harga.value === '' || jumlah.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            Nomor.value = '';
            name.value = '';
            menu.value = '';
            harga.value = '';
            jumlah.value = '';
        }, 2000);

        success.style.display = 'block';
    }


    setTimeout(() => {
        danger.style.display = 'none';
        success.style.display = 'none';
    }, 4000);

}