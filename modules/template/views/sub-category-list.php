<?php
if (isset($data) && sizeof($data)) {
    ?>
    <div class="card card-flush">
        <div class="card-header">
            <h3 class="card-title">Select Sub Categories</h3>
            <div class="card-toolbar">
                <div data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off"
                    data-gtm-form-interact-id="0">

                    <i
                        class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                            class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-lg border-warning border border-dashed px-15"
                        value="" placeholder="Search by Page name" data-kt-search-element="input"
                        data-gtm-form-interact-field-id="0" autocomplete="off">
                    <!--end::Input-->


                    <!--begin::Reset-->
                    <span
                        class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                        data-kt-search-element="clear">
                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span
                                class="path2"></span></i> </span>
                    <!--end::Reset-->
                </div>
            </div>
        </div>
        <div class="card-body p-5">
            <div class="row p-0 py-1">
                <?php

                if (is_array($data)) {
                    foreach ($data as $item) {
                        ?>
                        <div class="col-md-4 card-box">
                            <div class="card card-flush border-dashed border-warning">
                                <div class="card-body p-5">
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input name="sub_cats[]" class="form-check-input job_sub_category_ids" type="checkbox"
                                            value="<?= $item['job_sub_category_id'] ?>"
                                            id="item_<?= $item['job_sub_category_id'] ?>" />
                                        <label class="form-check-label text-dark fs-2 fw-bold"
                                            for="item_<?= $item['job_sub_category_id'] ?>">
                                            <?= $item['sub_title'] ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <div data-kt-search-element="empty" class="text-center d-done">
                    <!--begin::Message-->
                    <div class="fw-semibold py-0 mb-10">
                        <div class="text-danger fs-3 mb-2">Category Not found.</div>

                        <div class="text-danger fs-6">Try to search by category name </div>
                    </div>
                    <!--end::Message-->
                    <div class="text-center px-4">
                        <img class="mw-100 mh-200px" alt="image" src="{base_url}assets/media/illustrations/sigma-1/13.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>