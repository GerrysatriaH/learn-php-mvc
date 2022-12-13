$(function(){

    $('.tombolTambahData').on('click', function(){
        $('formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/dashboard/tambah');

        $('#nama').val('');
        $('#nrp').val('');
        $('#email').val('');
        $('#prodi').val('');
        $('#id').val('');
    })

    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/dashboard/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phpmvc/public/dashboard/getubah',
            data: {id : id}, 
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#prodi').val(data.prodi);
                $('#id').val(data.id);
            }
        })
    });

});