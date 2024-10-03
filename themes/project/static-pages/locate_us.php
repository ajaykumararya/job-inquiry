<div class="row">
    <div class="col-md-12">
        {form}
        <?php
        $description = '
    
    <div class="elementor-element elementor-element-5a1919e2 elementor-widget elementor-widget-heading" data-id="5a1919e2" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.21.0 - 24-04-2024 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default"><a href="https://mrjohnnycare.in/our-service/">Gomti Nagar best dry cleaning services.</a></h2>		</div>
				</div>

                <div class="elementor-element elementor-element-7cdefb70 elementor-widget elementor-widget-text-editor" data-id="7cdefb70" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.21.0 - 24-04-2024 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p>Taking care of your clothes has never been easier.<br>Mr. Johnny Care picks up, expertly cleans, and delivers<br>your dry cleaning to your door.</p>
<p>Mr. Johnny Care is ready to take care of your clothes.</p>						</div>
				</div>
    
    ';
        ?>
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">Add <b class="text-success">Locate Us</b></h3>
            </div>
            <div class="card-body">
                <div class="form-group mt-4">
                    <label for="field1" class="form-label">Header Image</label>
                    <input type="file" required name="field1" id="field1" value="" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Location</label>
                    <input type="text" name="field2" id="field2" value="" class="form-control"
                        placeholder="Enter Location">
                </div>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Header Content</label>
                    <textarea name="field3" maxlength="250" value="" class="form-control aryaeditor"
                        placeholder="Enter Description"> <?= $description ?></textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="title" class="form-label mt-4">Header Content Button</label>
                    <input type="text" placeholder="Enter Title" name="field5" value="" class="form-control"
                        style="border-radius: 12px 12px 0 0;border-bottom: 0;">
                    <input type="text" placeholder="Enter Link" name="field6" value="" class="form-control"
                        style="border-radius: 0 0 12px 12px;">
                </div>
                <!--begin::Input wrapper-->
                <div class="form-group mt-4">
                    <label for="" class="form-label">Google Map Url</label>
                    <textarea class="form-control" rows="5" name="field4"></textarea>
                </div>
            </div>
            <div class="card-footer">
                {save_button}
            </div>
        </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mt-5">
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">List <b class="text-success">Locate Us</b></h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" setting-table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Location</th>
                                <th>Set In Page</th>
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
                                            <?= $row->field2 ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($this->uri->segment('4') == 'multiple')
                                                echo $this->ki_theme->drawer_button('locate_us', $row->id, 'Locate Us Section');
                                            else
                                                echo label('Something went wrong', 'danger');
                                            ?>
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