<script src="<?= base_url(); ?>assets/admin/vendors/dropify/js/dropify.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/scripts/form-file-uploads.js"></script>
<script>
    $(document).ready(function() {
        // $('.modal').modal();
        $("#saveForm").submit(function(e) {
            e.preventDefault();
            var atribut = $(this).attr("name");
            var kategori = $('#kategori').val();
            var nama_barang = $('#nama_barang').val();
            var jenis_barang = $("#jenis_barang").val();
            var gambar_barang = $("#gambar_barang").val();
            var harga_barang = $("#harga_barang").val();
            var jumlah_barang = $("jumlah_barang").val();
            var deskripsi_barang = $("deskripsi_barang").val();
            if (atribut == "tambah") {
                if (nama_barang == "" || jenis_barang == "" || gambar_barang == "" || harga_barang == "" || jumlah_barang == "") {
                    Swal.fire({
                        title: "Oopss !",
                        text: "Data ada yang kosong",
                        type: "warning",
                        icon: 'warning',
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning"
                    })
                } else {
                    $.ajax({
                        url: '<?php echo base_url(); ?>save_barang',
                        type: "POST",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        success: function(data) {
                            Swal.fire({
                                title: 'Sukses',
                                text: "Data berhasil dtambah",
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonClass: 'btn btn-success',
                                confirmButtonText: 'OK',
                                buttonsStyling: false
                            }, function() {
                                normal();
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown, data) {
                            Swal.fire({
                                title: 'Gagal!',
                                text: data,
                                type: 'error',
                                confirmButtonClass: "btn btn-danger",
                                buttonsStyling: false
                            })
                        }
                    });
                }
            } else if (atribut == "update") {
                if (nama_barang == "" || jenis_barang == "" || gambar_barang == "" || harga_barang == "" || jumlah_barang == "" || deskripsi_barang == "") {
                    Swal.fire({
                        title: "Oopss !",
                        text: "Data ada yang kosong",
                        type: "warning",
                        icon: 'warning',
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning"
                    }).catch(swal.noop);
                } else {
                    $.ajax({
                        url: '<?php echo base_url(); ?>update_barang',
                        type: "POST",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        success: function(data) {
                            Swal.fire({
                                title: 'Sukses',
                                text: "Data berhasil di ubah",
                                type: 'success',
                                showCancelButton: false,
                                confirmButtonClass: 'btn btn-success',
                                confirmButtonText: 'OK',
                                buttonsStyling: false
                            }, function() {
                                normal();
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown, data) {
                            Swal.fire({
                                title: 'Gagal!',
                                text: data,
                                type: 'error',
                                confirmButtonClass: "btn btn-danger",
                                buttonsStyling: false
                            })
                        }
                    });
                }
            }
        });
    });


    function remove(id) {
        // alert('HSDSG')
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            // alert('kjsdhs')
            if (result.value) {

                $.ajax({
                    url: "<?php echo base_url(); ?>delete_barang",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        alert('Data berhasil dihapus');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Data gagal dihapus');
                    }
                });
            }

        });
    }

    function normal() {
        window.location.assign("<?= base_url('barang'); ?>");
    }
</script>