<div class="row">
    <div class="col-md-5">
        <form id="add_course_category">
            <div class="{card_class}">
                <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
                    data-bs-target="#kt_docs_card_collapsible">
                    <h3 class="card-title">Add Category</h3>
                    <div class="card-toolbar rotate-180">
                        <i class="ki-duotone ki-down fs-1"></i>
                    </div>
                </div>
                <div id="kt_docs_card_collapsible" class="collapse show">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="form-label required">Select Category</label>
                            <select name="job_category_id" data-clear="true" class="form-control" data-control="select2" data-placeholder="Select Category">
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
                        <div class="form-group">
                            <label class="form-label required">Enter Title</label>
                            <input type="text" name="sub_title" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="card-footer">
                        {publish_button}
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-7">
        <div class="{card_class}">
            <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse" data-bs-target="#list">
                <h3 class="card-title">List Sub Category</h3>
                <div class="card-toolbar rotate-180">
                    <i class="ki-duotone ki-down fs-1"></i>
                </div>
            </div>
            <div id="list" class="collapse show">
                <div class="card-body">

                    <div class="table-responsive">
                        <!--begin::Datatable-->
                        <table id="category_list" class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">

                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                            </tbody>
                        </table>
                        <!--end::Datatable-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script id="formTemplate" type="text/x-handlebars-template">
    <input type="hidden" name="id" value="{{job_sub_category_id}}">
    <div class="form-group">
        <label for="" class="form-label">Category Title</label>
        <input type="text" class="form-control" name="sub_title" placeholder="enter Name" value="{{sub_title}}">
    </div>
</script>