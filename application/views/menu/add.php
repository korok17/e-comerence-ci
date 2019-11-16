<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <!-- start: TEXT FIELDS PANEL -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php
                        echo form_open('menus/add', 'role="form" class="form-horizontal"');
                        ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-field-1">
                                NAMA MENU
                            </label>
                            <div class="col-sm-9">
                                <input type="text" name="nama menu" placeholder="MASUKAN NAMA MENU" id="form-field-1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-field-1">
                                LINK
                            </label>
                            <div class="col-sm-9">
                                <input type="text" name="link" placeholder="MASUKAN LINK" id="form-field-1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-field-1">
                                ICON
                            </label>
                            <div class="col-sm-9">
                                <input type="text" name="icon" placeholder="MASUKAN KODE ICON" id="form-field-1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-field-1">
                                IS MAIN MENU
                            </label>
                            <div class="col-sm-9">
                                <select name="is_main_menu" class="form-control">
                                    <option value="0">MAIN MENU</option>
                                    <?php
                                    $menu = $this->db->get('x_menu');
                                    foreach ($menu->result() as $row) {
                                        echo "<option value='$row->id'>$row->nama_menu</option>";
                                    }
                                    ?>
                                </select>
                                <?php //echo cmb_dinamis('is_main_menu', 'x_menu', 'nama_menu', 'id')
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-field-1">

                            </label>
                            <div class="col-sm-1">
                                <button type="submit" name="submit" class="btn btn-danger  btn-sm">SIMPAN</button>
                            </div>
                            <div class="col-sm-1">
                                <?php echo anchor('menus', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- end: TEXT FIELDS PANEL -->
            </div>
        </div>
    </div>
</div>