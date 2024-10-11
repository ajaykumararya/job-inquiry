<div class="row">
    <div class="col-md-12">

        <div class="{card_class}">
            <div class="card-header collapsible cursor-pointer rotate" data-bs-toggle="collapse"
                data-bs-target="#kt_docs_card_collapsible">
                <h3 class="card-title">List Job(s)</h3>
                <div class="card-toolbar rotate-180">
                    <i class="ki-duotone ki-down fs-1"></i>
                </div>
            </div>
            <div id="kt_docs_card_collapsible" class="collapse show">
                <div class="card-body">
                
                    <div class="table-responsive">
                        <!--begin::Datatable-->
                        <table id="list_center" class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">

                                    <th>Company Logo</th>
                                    <th>Company Title</th>                                    
                                    <th>Category</th>
                                    <th>Sub-Category</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-dark fw-semibold">
                                <?php
                            $get = $this->db->from('jobs as j')
                                            ->join('job_category as jc','jc.job_category_id = j.job_category_id')
                                            ->group_by('j.job_id')
                                            ->get();
                            if($get->num_rows()){
                                foreach($get->result() as $row){
                                    $cats = '';
                                    if($row->job_sub_cats){
                                        $getC = $this->db->where_in('job_sub_category_id',json_decode($row->job_sub_cats,true))->get('job_sub_category');
                                        if($getC->num_rows()){
                                            foreach($getC->result() as $subcat){
                                                $cats .= label($subcat->sub_title,getRandomBootstrapClass().' fs-5')."\t\t";
                                            }
                                        }
                                    }
                                    echo '<tr>
                                        <td>'.$row->job_icon.'</td>
                                        <td>'.$row->job_title.'</td>
                                        <td>'.$row->title.'</td>
                                        <td>'.$cats.'</td>
                                        <td>
                                           <button class="btn btn-danger btn-sm delete-job" data-id="'.$row->job_id.'"><i class="fa fa-trash"></i> Delete</button>     
                                        </td>
                                    
                                    
                                    </tr>';
                                }
                            }
                                ?>
                            </tbody>
                        </table>
                        <!--end::Datatable-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
