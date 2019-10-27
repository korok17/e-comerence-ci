<script src="<?= base_url(); ?>assets/admin/vendors/dropify/js/dropify.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/scripts/form-file-uploads.js"></script>
<script>
    $(document).ready(function() {
        // $('.modal').modal();
        $(".saveForm").submit(function(e) {
            e.preventDefault();
            var atribut = $(this).attr("id");
            var title = $('#title').val();
            var subtitle = $('#subtitle').val();
            var slider = $("#slider").val();
            if (atribut == "tambah") {
                if (slider == "" || title == "") {
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
                        url: '<?php echo base_url(); ?>save_slider',
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
                            }).catch(swal.noop)
                        }
                    });
                }
            } else if (atribut == "update") {
                if (slider == "") {
                    Swal.fire({
                        title: "Oopss !",
                        text: "Data ada yang kosong",
                        type: "warning",
                        icon: 'warning',
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-warning"
                    }).catch(swal.noop);
                } else {
                    Swal.fire({
                        url: '<?php echo base_url(); ?>update_slider',
                        type: "POST",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        async: false,
                        success: function(data) {
                            Swal.fire({
                                title: 'Sukses',
                                text: "Data berhasil diupdate",
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
                            }).catch(swal.noop)
                        }
                    });
                }
            }
        });

        var table = $('#page-length-option').DataTable({
            "ajax": "<?php echo base_url('show_slider'); ?>",
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
                    "data": null,
                    "render": function(data) {
                        return '<img src=<?= base_url('asset/portal/banner/') ?>' + data.name_slider + ' class="responsive-img">';
                    }
                },
                {
                    "data": null,
                    "render": function(data) {
                        return '<a onclick=edit("' + data.id_slider + '");><i class="material-icons blue-text" title="Edit">edit</i></a> &nbsp;' +
                            ' <a onclick=remove("' + data.id_slider + '");><i class="material-icons red-text" title="Hapus">delete_forever</i></a>';
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
        Swal.fire({
            title: 'Apakah anda yakin ?',
            text: "Data yang telah anda hapus tidak dapat dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            buttonsStyling: false
        }, function() {
            $.ajax({
                url: "<?php echo base_url(); ?>delete_slider",
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
        });
    }

    function edit(id) {
        $.ajax({
            url: "<?php echo base_url(); ?>get_slider",
            type: "POST",
            dataType: "JSON",
            data: {
                id: id
            },
            success: function(data) {
                $("#modal1").modal("open");
                $("h5").text("Edit Slider");
                $(".saveForm").attr("data-id", data.id_slider);
                $(".saveForm").attr("id", 'update');
                $("#id").attr("value", data.id_slider);
                $("#btnok").text("Update");
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