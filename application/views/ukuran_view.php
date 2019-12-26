<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ukuran List</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/jquery.dataTables.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">
</head>

<body>
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-12">
                <div class="col-md-12">
                    <h1>Ukuran
                        <small>List</small>
                        <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                    </h1>
                </div>
                <table class="table table-striped" id="dataWarna">
                    <thead>
                        <tr>
                            <th>id_ukuran</th>
                            <th>Ukuran</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- MODAL ADD -->
    <form>
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Ukuran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">id_ukuran</label>
                            <div class="col-md-10">
                                <input type="text" name="id_warna_baju" id="id_warna_baju" class="form-control" placeholder="id_warna_baju">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ukuran</label>
                            <div class="col-md-10">
                                <input type="text" name="warna_baju" id="warna_baju" class="form-control" placeholder="warna_baju">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL ADD-->
    <!-- MODAL EDIT -->
    <form>
        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit ukuran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">id_ukuran</label>
                            <div class="col-md-10">
                                <input type="text" name="id_warna_baju_edit" id="id_warna_baju_edit" class="form-control" placeholder="id_warna_baju" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ukuran</label>
                            <div class="col-md-10">
                                <input type="text" name="warna_baju_edit" id="warna_baju_edit" class="form-control" placeholder="warna_baju">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL EDIT-->

    <!--MODAL DELETE-->
    <form>
        <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Ukuran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_warna_baju_delete" id="id_warna_baju_delete" class="form-control">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL DELETE-->

    <script src="<?= base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
    <script src="<?= base_url() . 'assets/js/bootstrap.js' ?>"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            show_warna(); //call function show all warna

            $('#dataWarna').DataTable();

            //function show all warna
            function show_ukuran() {
                $.ajax({
                    type: 'ajax',
                    async: true,
                    url: '<?php echo base_url('ukuran/ukuran_data') ?>',
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].id_ukuran + '</td>' +
                                '<td>' + data[i].ukuran_baju + '</td>' +
                                '<td style="text-align:right;">' +
                                '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_ukuran="' + data[i].id_ukuran + '" data-ukuran_baju="' + data[i].ukuran_baju + '">Edit</a>' + ' ' +
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id_ukuran="' + data[i].id_ukuran + '">Delete</a>' +
                                '</td>' +
                                '</tr>';
                        }
                        $('#show_data').html(html);
                    }

                });
            }

            //Save warna
            $('#btn_save').on('click', function() {
                var id_ukuran = $('#id_ukuran').val();
                var ukuran_baju = $('#ukuran_baju').val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('ukuran/save') ?>",
                    dataType: "JSON",
                    data: {
                        id_ukuran: id_ukuran,
                        ukuran_baju: ukuran_baju
                    },
                    success: function(data) {
                        $('[name="id_ukuran"]').val("");
                        $('[name="ukuran_baju"]').val("");
                        $('#Modal_Add').modal('hide');
                        show_ukuran();
                    }
                });
                return false;
            });

            //get data for update record
            $('#show_data').on('click', '.item_edit', function() {
                var id_ukuran = $(this).data('id_ukuran');
                var ukuran_baju = $(this).data('ukuran_baju');

                $('#Modal_Edit').modal('show');
                $('[name="id_ukuran_edit"]').val(id_ukuran);
                $('[name="ukuran_baju_edit"]').val(ukuran_baju);
            });

            //update record to database
            $('#btn_update').on('click', function() {
                var id_ukuran = $('#id_ukuran_edit').val();
                var warna_baju = $('#ukuran_baju_edit').val();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('ukuran/update') ?>",
                    dataType: "JSON",
                    data: {
                        id_ukuran: id_ukuran,
                        ukuran_baju: ukuran_baju
                    },
                    success: function(data) {
                        $('[name="id_ukuran_edit"]').val("");
                        $('[name="ukuran_baju_edit"]').val("");
                        $('#Modal_Edit').modal('hide');
                        show_warna();
                    }
                });
                return false;
            });

            //get data for delete record
            $('#show_data').on('click', '.item_delete', function() {
                var id_ukuran = $(this).data('id_ukuran');

                $('#Modal_Delete').modal('show');
                $('[name="id_ukuran_delete"]').val(id_ukuran);
            });

            //delete record to database
            $('#btn_delete').on('click', function() {
                var id_ukuran = $('#id_ukuran_delete').val();
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('ukuran/delete') ?>",
                    dataType: "JSON",
                    data: {
                        id_ukuran: id_ukuran
                    },
                    success: function(data) {
                        $('[name="id_ukuran_delete"]').val("");
                        $('#Modal_Delete').modal('hide');
                        show_warna();
                    }
                });
                return false;
            });

        });
    </script>
</body>

</html>