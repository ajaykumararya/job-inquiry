<div class="row">
    <div class="col-md-7">
        <div class="card border-success">
            <div class="card-header min-h-20px py-2 bg-light-success">
                <h3 class="card-title">Manage Menu</h3>
                <div class="toolbar">
                    {save_button}
                </div>
            </div>
            <div class="card-body menu-section p-3 min-h-500px"></div>
        </div>
    </div>
    <div class="col-md-5 mt-4">
        <form action="" class="extra-setting">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Menu Extra Button</h3>
                </div>
                <div class="card-body p-4">
                    <?php
                    echo $this->ki_theme->extra_setting_button_input("menu_extra_button","Enter Title Or Link");
                    ?>
                </div>
                <div class="card-footer">
                    {publish_button}
                </div>
            </div>
        </form>
    </div>
</div>