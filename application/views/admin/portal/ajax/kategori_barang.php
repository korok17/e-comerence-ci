<script src="<?= base_url(); ?>assets/admin/vendors/dropify/js/dropify.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/scripts/form-file-uploads.js"></script>
<script>
    $(document).ready(function() {
        // $('.modal').modal();
        $("#saveForm").submit(function(e) {
            e.preventDefault();
            var atribut = $(this).attr("name");
            var kategori = $('#kategori_barang').val();
            if (atribut == "tambah") {
                if (kategori == "") {
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
                        url: '<?php echo base_url(); ?>save_kategori_barang',
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
                if (kategori == "") {
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
                        url: '<?php echo base_url(); ?>update_kategori_barang',
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

        var table = $('#page_kategori_barang').DataTable({
            //"scrollX": true,
            "ajax": "<?php echo base_url(); ?>show_kategori_barang",
            "order": [
                [2, 'asc']
            ],
            "columns": [{
                    "data": null,
                    "width": "50px",
                    "sClass": "text-center",
                    "orderable": false,
                },
                {
                    "data": "nama_kategori"
                },
                {
                    "data": null,
                    "render": function(data) {
                        return '<a href="#!" onclick=edit("' + data.kd_kategori_barang + '");> <i class="fas fa-eye"></i> </a> &nbsp;' +
                            '<a  href="#!" onclick=remove("' + data.kd_kategori_barang + '");> <i class="fas fa-trash"></i> </a>';
                    }
                },
            ]
        });

        table.on('order.dt search.dt', function() {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        setInterval(function() {
            table.ajax.reload();
        }, 3000);
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
            if (result.value) {
                $.ajax({
                    url: "<?php echo base_url(); ?>delete_kategori_barang",
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

    function edit(id) {
        $.ajax({
            url: "<?php echo base_url(); ?>get_kategori_barang",
            type: "POST",
            dataType: "JSON",
            data: {
                id: id
            },
            success: function(data) {
                $("#kategori").modal("show");
                $("h4").text("Edit Slider");
                $("#saveForm").attr("data-id", data.kd_kategori_barang);
                $("#saveForm").attr("name", 'update');
                $("#id").attr("value", data.kd_kategori_barang);
                $('#kategori_barang').val(data.nama_kategori);
                $("#btnok").val("Update");
                $("#btncancel").attr('onclick', 'normal();');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Gagal mengambil data.',
                    type: 'error',
                    confirmButtonClass: "btn btn-danger",
                    buttonsStyling: false
                }).catch(swal.noop)
            }
        });
    }



    function normal() {
        location.reload();
    }
</script>