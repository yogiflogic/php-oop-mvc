// kurung kurawal untuk object
$(function () {

    //class         //efek/fungsi
    $('.tambahdata').on('click', function()
    {   //mengubah text static di html
        $('#judulmodallabel').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah');  
        
                $('#id').val('');
                $('#rank').val('');
                $('#name').val('');
                $('#country').val('');
                $('#sales').val('');
                $('#profit').val('');
                $('#assets').val('');
                $('#market').val('');
                $('#year').val('');
    });

    $('.modaledit').on('click', function()
    {
        $('#judulmodallabel').html('Edit Data');
        //css selector   
        $('.modal-footer button[type=submit]').html('Simpan');
        //jquery carikan saya class modal-body lalu cari form di dalam nya kemudian ubah atribut actionnya
        $('.modal-body form').attr('action','http://localhost:8080/php/php-oop-mvc/public/forbes/update');
        //this untuk button manapun yang di klik
        //id -> isi data yang di kirimkan
        // id yang di ambil jquery berdasarkan atribut data-id="" di index
        const id = $(this).data('id');
        
        //ajax parameternya object
        $.ajax({
            //object case sensitive
            url :'http://localhost:8080/php/php-oop-mvc/public/forbes/getedit',
            // data -> kirim data ke method getedit
            //{id kiri -> nama data yang di kirimkan : id kanan id dari atas -> isi data yang di kirimkan}
            data: {id : id},
            method : 'post',
            //format pengembalian data
            dataType : 'json',
            success: function(data)
            {
                //cara baca script -> jquery ambilkan saya ID $('#rank') kemudian ubah valuenya ganti dengan data -> .val(data.rank);
                //data adalah object, object mengambil value di gabungkan dengan titik (.) pada javascript
                $('#id').val(data.id);
                $('#rank').val(data.rank);
                $('#name').val(data.name);
                $('#country').val(data.country);
                $('#sales').val(data.sales);
                $('#profit').val(data.profit);
                $('#assets').val(data.assets);
                $('#market').val(data.market_value);
                $('#year').val(data.year);
            }

        })
    });

});