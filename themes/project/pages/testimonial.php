<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="text-center mb-5">{testimonial_box_title}</h1>
        <div class="owl-carousel testimonial-carousel">
            <?php
            $data = content($type);
            if ($data->num_rows()) {
                $i = 1;
                foreach ($data->result() as $row) {
                    ?>

                    <div class="testimonial-item bg-light rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p><?=$row->field3?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{base_url}upload/<?= $row->field1 ?>"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?=$row->field2?></h5>
                                <small><?=$row->field4?></small>
                            </div>
                        </div>
                    </div>
                <?php }
            }
            ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->