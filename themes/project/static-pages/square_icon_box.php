<div class="row">
    <div class="col-md-6">
        {form}
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">Add Square Icon Box</h3>
            </div>
            <div class="card-body">
                <?php
                echo inconPickerInput('field1');
                ?>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Title</label>
                    <input type="text" name="field2" id="field2" value="" class="form-control"
                        placeholder="Enter Title">
                </div>

                <div class="form-group mt-4">
                    <label for="" class="form-label">Description</label>
                    <textarea name="field3" maxlength="200" value="" class="form-control"
                        placeholder="Enter Description"></textarea>
                </div>
            </div>
            <div class="card-footer">
                {save_button}
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-6 mt-5">
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">List Square Icon Box</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" setting-table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data = $this->SiteModel->get_contents($type);
                            if ($data->num_rows()):
                                $index = 1;
                                foreach ($data->result() as $row):
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $index++ ?>.
                                        </td>
                                        <td>
                                            <?= ('<i class="' . $row->field1 . ' text-dark" style="font-size: 30px"></i>') ?>
                                        </td>
                                        <td>
                                            <?= $row->field2 ?>
                                        </td>
                                        <td>
                                            <?= base64_encode($row->id) ?>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>