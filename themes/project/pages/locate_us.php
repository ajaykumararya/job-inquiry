<?php
$content = content((int)$type);
if($content->num_rows()):
    $row = ($content->row());
?>
<div data-elementor-type="wp-page" data-elementor-id="936" class="elementor elementor-936">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-52a76c7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
        data-id="52a76c7" data-element_type="section"
        style="background-image:url({base_url}upload/<?=$row->field1?>)"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5e17a2e0"
                data-id="5e17a2e0" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    
                    <?=$row->field3?>

                    <div class="elementor-element elementor-element-db39c28 elementor-widget elementor-widget-ucaddon_color_overlay_button"
                        data-id="db39c28" data-element_type="widget"
                        data-widget_type="ucaddon_color_overlay_button.default">
                        <div class="elementor-widget-container">

                            <!-- start Overlay Button -->
                            <style>
                                /* widget: Overlay Button */

                                #uc_color_overlay_button_elementor_db39c28 a.color-overlay-link {
                                    display: inline-block;
                                    position: relative;
                                    text-decoration: none;
                                    transition: 0.5s;
                                    overflow: hidden;
                                }

                                #uc_color_overlay_button_elementor_db39c28 a span.ue-color-overlay {
                                    display: block;
                                    position: absolute;
                                    top: 0px;
                                    right: 0px;
                                    transition: 0.5s;
                                }

                                #uc_color_overlay_button_elementor_db39c28 a .ue-btn-txt {
                                    position: relative;
                                    transition: 0.5s;
                                }
                            </style>
                            <?php
                            if(!empty($row->field5) && $row->field5):
                            ?>
                            <div id="uc_color_overlay_button_elementor_db39c28" class="color-overlay-button">
                                <a href="<?=$row->field6?>" class="color-overlay-link ">
                                    <span class="ue-color-overlay"></span>
                                    <span class="ue-btn-txt"><?=$row->field5?></span>
                                </a>
                            </div>
                            <?php
                            endif;
                            ?>
                            <!-- end Overlay Button -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3b864adf"
                data-id="3b864adf" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap">
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-1e39c5270 elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
        data-id="1e39c5270" data-element_type="section" data-settings="{&quot;_ha_eqh_enable&quot;:false}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2b17de55"
                data-id="2b17de55" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-68b832d elementor-widget elementor-widget-ha-icon-box happy-addon ha-icon-box"
                        data-id="68b832d" data-element_type="widget" data-widget_type="ha-icon-box.default">
                        <div class="elementor-widget-container">


                            <span class="ha-icon-box-icon">
                                <i aria-hidden="true" class="hm hm-location-pointer"></i> </span>
                            <h2 class="ha-icon-box-title"><?=$row->field2?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-208e5ae"
                data-id="208e5ae" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-43233c0 elementor-widget elementor-widget-google_maps"
                        data-id="43233c0" data-element_type="widget" data-widget_type="google_maps.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.21.0 - 18-04-2024 */
                                .elementor-widget-google_maps .elementor-widget-container {
                                    overflow: hidden
                                }

                                .elementor-widget-google_maps .elementor-custom-embed {
                                    line-height: 0
                                }

                                .elementor-widget-google_maps iframe {
                                    height: 300px
                                }
                            </style>
                            <div class="elementor-custom-embed">
                                <iframe loading="lazy"
                                    src="<?=$row->field4?>"
                                    title="<?=$row->field2?>" aria-label=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
endif;
?>