<div class="row">
    <div class="col-md-12">
        <form action="" method="POST" id="add-job">
            <div class="{card_class}">
                <div class="card-header">
                    <h3 class="card-title">Add Job</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <select name="job_category_id" data-allow-clear="true" class="form-control form-select-solid" data-control="select2" data-placeholder="Select Category">
                                <option></option>
                                <?php
                                $get = $this->db->get('job_category');
                                if($get->num_rows()){
                                    foreach($get->result() as $row){
                                        echo '<option value="'.$row->job_category_id.'">'.$row->title.'</option>';
                                    }
                                }
                                ?>
                            </select>
                    </div>
                    <div class="row p-0 list-sub-cats mt-4">

                    </div>
                    <div class="row p-0 mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="q1" class="form-label">Company Title</label>
                                <input type="text" name="comapny_title" placeholder="Company Title" id="q1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="q2" class="form-label">Company Logo</label>
                                <input type="file" name="image" class="form-control">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    {save_button}
                </div>
            </div>
        </form>
    </div>
</div>