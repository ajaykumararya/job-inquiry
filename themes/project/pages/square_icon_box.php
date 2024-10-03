<div class="container">
    <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">Explore By Category</h1>
    <div class="row g-4">
        <?php
        $data = content($type);
        if ($data->num_rows()) {
            $i = 1;
            foreach ($data->result() as $row) {

                ?>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <a class="cat-item rounded p-4" href="#">
                        <i class="fa fa-3x fa-<?= $row->field1 ?> text-primary mb-4"></i>
                        <h6 class="mb-3"><?= $row->field2 ?></h6>
                        <p class="mb-0"><?= $row->field3 ?></p>
                    </a>
                </div>
                <?php
            }
        }
        ?>


    </div>
</div>