<section
    class="elementor-section elementor-top-section elementor-element elementor-element-fc7f929 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
    data-id="fc7f929" data-element_type="section"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c92f53"
            data-id="7c92f53" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-3bfc2b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                    data-id="3bfc2b7" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-25152ec"
                            data-id="25152ec" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-b6de035 elementor-widget elementor-widget-heading"
                                    data-id="b6de035" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            {our_service_box_title}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-4c11a9b elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                    data-id="4c11a9b" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                    <div class="elementor-container elementor-column-gap-default">

                        <?php
                        $data = content($type);
                        if ($data->num_rows()) {
                            $i = 1;
                            foreach ($data->result() as $row) {


                                ?>

                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f402401"
                                    data-id="f402401" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div data-ha-element-link="{&quot;url&quot;:&quot;https:\/\/mrjohnnycare.in\/dry-cleaning\/&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;}"
                                            style="cursor: pointer"
                                            class="elementor-element elementor-element-9eeec24 wpr-flip-box-animation-flip wpr-flip-box-animation-3d-yes wpr-flip-box-anim-direction-right wpr-flip-box-front-align-center wpr-flip-box-back-align-center elementor-widget elementor-widget-wpr-flip-box"
                                            data-id="9eeec24" data-element_type="widget"
                                            data-widget_type="wpr-flip-box.default">
                                            <div class="elementor-widget-container">

                                                <div class="wpr-flip-box" data-trigger="hover">

                                                    <div class="wpr-flip-box-item wpr-flip-box-front wpr-anim-timing-ease-default"
                                                        style="background-image:url('{base_url}upload/<?= $row->field4 ?>')">

                                                        <div class="wpr-flip-box-overlay"></div>

                                                        <div class="wpr-flip-box-content">

                                                            <div class="wpr-flip-box-icon">
                                                                <i class="<?= $row->field1 ?>"></i>
                                                            </div>

                                                            <h3 class="wpr-flip-box-title"><?= $row->field2 ?></h3>





                                                        </div>
                                                    </div>

                                                    <div
                                                        class="wpr-flip-box-item wpr-flip-box-back wpr-anim-timing-ease-default">

                                                        <div class="wpr-flip-box-overlay"></div>

                                                        <div class="wpr-flip-box-content">

                                                            <a class="wpr-flip-box-link" href="#"></a>


                                                            <h3 class="wpr-flip-box-title">
                                                                <?= $row->field2 ?>
                                                            </h3>

                                                            <div class="wpr-flip-box-description">
                                                                <p><?= $row->field3 ?></p>
                                                            </div>




                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <?php
                                if ($i % 3 == 0) {
                                    ?>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-4c11a9b elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
                                data-id="4c11a9b" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <?php
                                }
                                $i++;

                            }
                        }
                        ?>
                    </div>
                </section>


                <div class="elementor-element elementor-element-19ff3f1 elementor-widget elementor-widget-ucaddon_color_overlay_button"
                    data-id="19ff3f1" data-element_type="widget"
                    data-widget_type="ucaddon_color_overlay_button.default">
                    <div class="elementor-widget-container">

                        <!-- start Overlay Button -->
                        <style>
                            /* widget: Overlay Button */

                            #uc_color_overlay_button_elementor_19ff3f1 a.color-overlay-link {
                                display: inline-block;
                                position: relative;
                                text-decoration: none;
                                transition: 0.5s;
                                overflow: hidden;
                            }

                            #uc_color_overlay_button_elementor_19ff3f1 a span.ue-color-overlay {
                                display: block;
                                position: absolute;
                                top: 0px;
                                right: 0px;
                                transition: 0.5s;
                            }

                            #uc_color_overlay_button_elementor_19ff3f1 a .ue-btn-txt {
                                position: relative;
                                transition: 0.5s;
                            }
                        </style>

                        <div id="uc_color_overlay_button_elementor_19ff3f1" class="color-overlay-button">
                            <?php
                            if ($buttonTitle = ES("{$type}_button_text")):
                                ?>
                                <a href="<?= ES("${type}_button_link") ?>" class="color-overlay-link ">
                                    <span class="ue-color-overlay"></span>
                                    <span class="ue-btn-txt"><?= $buttonTitle ?></span>
                                </a>
                                <?php
                            endif;
                            ?>


                        </div>
                        <!-- end Overlay Button -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>