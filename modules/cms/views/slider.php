<div class="row">
    <div class="col-md-5">
        <form action="" id="save-slider" enctype="multipart/form-data">
            <div class="{card_class}">
                <div class="card-header">
                    <h3 class="card-title">Add Slider</h3>
                </div>
                <div class="card-body p-3">
                    <div class="form-group">
                        <label for="image" class="form-label mb-4">Select Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                </div>
                <div class="card-footer">
                    {publish_button}
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-7">
        <div class="{card_class}">
            <div class="card-header">
                <h3 class="card-title">List Slider Image(s)</h3>
            </div>
            <div class="card-body p-3">
                <table id="list-slider" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <form action class="extra-setting">
            <div class="{card_class}">
                <div class="card-header">
                    <h3 class="card-title">Slider Setting</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="slider_title" value="<?=ES('slider_title')?>" class="form-control" placeholder="Enter Title">
                    </div>

                    <div class="form-group mt-5">
                        <label for="" class="form-label">Loctaions <code>Ex:- Indira Nagar, Gomti Nagar</code></label>
                        <textarea type="text" name="slider_locations" class="form-control" placeholder="Enter Locations. Ex:- Gomti Nagar, Indira Nagar"><?=ES('slider_locations')?></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    {publish_button}
                </div>
            </div>
        </form>
    </div>
</div>