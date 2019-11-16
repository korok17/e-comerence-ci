<script src="<?= base_url(); ?>assets/admin/vendors/dropify/js/dropify.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/scripts/form-file-uploads.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#page_barang').DataTable({
            //"scrollX": true,
            "ajax": "<?php echo base_url(); ?>show_barang",
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
                    "data": "nama_barang"
                },
                {
                    "data": "jenis_barang"
                },
                {
                    "data": "kd_kategori_barang"
                },
                {
                    "data": "stok"
                },
                {
                    "data": "harga"
                },
                {
                    "data": null,
                    "render": function(data) {
                        return '<img style="width: 100px;" src=<?= base_url('assets/portal/barang/') ?>' + data.gambar_barang + ' class="responsive-img">';
                    }
                },
                {
                    "data": null,
                    "render": function(data) {
                        return '<a href="#!" onclick=edit("' + data.kd_barang + '");> <i class="fas fa-eye"></i> </a> &nbsp;' +
                            '<a  href="#!" onclick=remove("' + data.kd_barang + '");> <i class="fas fa-trash"></i> </a>';
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

    function edit(id) {
        window.location.href = "form_berita/" + id;
    }

    function normal() {
        location.reload();
    }
</script>