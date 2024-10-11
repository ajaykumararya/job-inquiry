<?php
if (isset($event_id)) {
    $get = $this->db->from('jobs as j')
        ->join('job_category jc', 'jc.job_category_id = j.job_category_id')
        ->group_by("j.job_id")
        ->get();
    if ($get->num_rows()) {
        $myTitle = $get->row('title');
        ?>
        <style>
            .mylabel {
                background-color: #00b074;
                color: white;
                padding: 0 8px 0 8px;
                border-radius: 21px;
                border: 1px solid #318b6c;
                box-shadow: 0 0 10px 0 gray;
                text-transform: capitalize;
                font-size: 15px;
                display: inline-block;
            }
        </style>
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><?=$myTitle?>'s Job Listing</h1>

                <?php
                foreach ($get->result() as $row) {
                    $cats = '';
                    if ($row->job_sub_cats) {
                        $getC = $this->db->where_in('job_sub_category_id', json_decode($row->job_sub_cats, true))->get('job_sub_category');
                        if ($getC->num_rows()) {
                            $i = 0;
                            foreach ($getC->result() as $subcat) {
                                $i++;
                                $cats .= '<div class="mylabel text-truncate me-2">' . $subcat->sub_title . "</div>\t\t";
                            }
                        }
                    }
                    ?>
                    <div class="job-item p-4 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="{assets}<?= $row->job_icon ?>" alt=""
                                    style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3 fs-3"><?= $row->job_title ?></h5>
                                    <?= $cats ?>
                                </div>
                            </div>
                            <!-- <div
                                class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                <div class="d-flex mb-3">
                                    <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                    <a class="btn btn-primary" href="">Apply Now</a>
                                </div>
                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                    Line: 01 Jan, 2045</small>
                            </div> -->
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
        <?php

    }
}
?>