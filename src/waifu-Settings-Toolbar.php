<?php
class live2D_Settings_Toolbar {
    private $live_2d__options;
    public function live_2d_settings_toolbar_init() {
        $this->live_2d__options = get_option( 'live_2d_settings_option_name' );
        

        add_settings_section(
            'live_2d_setting_toolbar_section', // id
            '工具栏设置', // title
            array( $this, 'live_2d_toolbar_section_info' ), // callback
            'live-2d-settings-toolbar' // page
        );

        add_settings_field(
            'showToolMenu', // id
            '工具栏', // title
            array( $this, 'showToolMenu_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'canCloseLive2d', // id
            '关闭看板娘按钮', // title
            array( $this, 'canCloseLive2d_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'canSwitchModel', // id
            '模型切换按钮', // title
            array( $this, 'canSwitchModel_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'canSwitchTextures', // id
            '材质切换按钮', // title
            array( $this, 'canSwitchTextures_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'canSwitchHitokoto', // id
            '一言切换按钮', // title
            array( $this, 'canSwitchHitokoto_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'canTakeScreenshot', // id
            '看板娘截图按钮', // title
            array( $this, 'canTakeScreenshot_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'canTurnToHomePage', // id
            '返回首页按钮', // title
            array( $this, 'canTurnToHomePage_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'canTurnToAboutPage', // id
            '跳转关于页按钮', // title
            array( $this, 'canTurnToAboutPage_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'waifuToolFont', // id
            '工具栏字体', // title
            array( $this, 'waifuToolFont_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'waifuToolLine', // id
            '工具栏行高', // title
            array( $this, 'waifuToolLine_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );

        add_settings_field(
            'waifuToolTop', // id
            '工具栏顶部边距', // title
            array( $this, 'waifuToolTop_callback' ), // callback
            'live-2d-settings-toolbar', // page
            'live_2d_setting_toolbar_section' // section
        );
    }

    public function live_2d_toolbar_section_info(){
        
    }

    public function showToolMenu_callback() {
        ?> <fieldset><?php $checked = ( isset( $this->live_2d__options['showToolMenu'] ) && $this->live_2d__options['showToolMenu'] === true ) ? 'checked' : '' ; ?>
        <label for="showToolMenu-0"><input type="radio" name="live_2d_settings_option_name[showToolMenu]" id="showToolMenu-0" value="1" <?php echo $checked; ?>> 显示</label><br>
        <?php $checked = ( isset( $this->live_2d__options['showToolMenu'] ) && $this->live_2d__options['showToolMenu'] === false ) ? 'checked' : '' ; ?>
        <label for="showToolMenu-1"><input type="radio" name="live_2d_settings_option_name[showToolMenu]" id="showToolMenu-1" value="0" <?php echo $checked; ?>> 隐藏</label></fieldset> <?php
    }

    public function canCloseLive2d_callback() {
        ?> <fieldset><?php $checked = ( isset( $this->live_2d__options['canCloseLive2d'] ) && $this->live_2d__options['canCloseLive2d'] === true ) ? 'checked' : '' ; ?>
        <label for="canCloseLive2d-0"><input type="radio" name="live_2d_settings_option_name[canCloseLive2d]" id="canCloseLive2d-0" value="1" <?php echo $checked; ?>> 开启</label><br>
        <?php $checked = ( isset( $this->live_2d__options['canCloseLive2d'] ) && $this->live_2d__options['canCloseLive2d'] === false ) ? 'checked' : '' ; ?>
        <label for="canCloseLive2d-1"><input type="radio" name="live_2d_settings_option_name[canCloseLive2d]" id="canCloseLive2d-1" value="0" <?php echo $checked; ?>> 关闭</label></fieldset> <?php
    }

    public function canSwitchModel_callback() {
        ?> <fieldset><?php $checked = ( isset( $this->live_2d__options['canSwitchModel'] ) && $this->live_2d__options['canSwitchModel'] === true ) ? 'checked' : '' ; ?>
        <label for="canSwitchModel-0"><input type="radio" name="live_2d_settings_option_name[canSwitchModel]" id="canSwitchModel-0" value="1" <?php echo $checked; ?>> 显示</label><br>
        <?php $checked = ( isset( $this->live_2d__options['canSwitchModel'] ) && $this->live_2d__options['canSwitchModel'] === false ) ? 'checked' : '' ; ?>
        <label for="canSwitchModel-1"><input type="radio" name="live_2d_settings_option_name[canSwitchModel]" id="canSwitchModel-1" value="0" <?php echo $checked; ?>> 隐藏</label></fieldset> <?php
    }

    public function canSwitchTextures_callback() {
        ?> <fieldset><?php $checked = ( isset( $this->live_2d__options['canSwitchTextures'] ) && $this->live_2d__options['canSwitchTextures'] === true ) ? 'checked' : '' ; ?>
        <label for="canSwitchTextures-0"><input type="radio" name="live_2d_settings_option_name[canSwitchTextures]" id="canSwitchTextures-0" value="1" <?php echo $checked; ?>> 显示</label><br>
        <?php $checked = ( isset( $this->live_2d__options['canSwitchTextures'] ) && $this->live_2d__options['canSwitchTextures'] === false ) ? 'checked' : '' ; ?>
        <label for="canSwitchTextures-1"><input type="radio" name="live_2d_settings_option_name[canSwitchTextures]" id="canSwitchTextures-1" value="0" <?php echo $checked; ?>> 隐藏</label></fieldset> <?php
    }

    public function canSwitchHitokoto_callback() {
        ?> <fieldset><?php $checked = ( isset( $this->live_2d__options['canSwitchHitokoto'] ) && $this->live_2d__options['canSwitchHitokoto'] === true ) ? 'checked' : '' ; ?>
        <label for="canSwitchHitokoto-0"><input type="radio" name="live_2d_settings_option_name[canSwitchHitokoto]" id="canSwitchHitokoto-0" value="1" <?php echo $checked; ?>> 显示</label><br>
        <?php $checked = ( isset( $this->live_2d__options['canSwitchHitokoto'] ) && $this->live_2d__options['canSwitchHitokoto'] === false ) ? 'checked' : '' ; ?>
        <label for="canSwitchHitokoto-1"><input type="radio" name="live_2d_settings_option_name[canSwitchHitokoto]" id="canSwitchHitokoto-1" value="0" <?php echo $checked; ?>> 隐藏</label></fieldset> <?php
    }

    public function canTakeScreenshot_callback() {
        ?> <fieldset><?php $checked = ( isset( $this->live_2d__options['canTakeScreenshot'] ) && $this->live_2d__options['canTakeScreenshot'] === true ) ? 'checked' : '' ; ?>
        <label for="canTakeScreenshot-0"><input type="radio" name="live_2d_settings_option_name[canTakeScreenshot]" id="canTakeScreenshot-0" value="1" <?php echo $checked; ?>> 显示</label><br>
        <?php $checked = ( isset( $this->live_2d__options['canTakeScreenshot'] ) && $this->live_2d__options['canTakeScreenshot'] === false ) ? 'checked' : '' ; ?>
        <label for="canTakeScreenshot-1"><input type="radio" name="live_2d_settings_option_name[canTakeScreenshot]" id="canTakeScreenshot-1" value="0" <?php echo $checked; ?>> 隐藏</label></fieldset> <?php
    }

    public function canTurnToHomePage_callback() {
        ?> <fieldset><?php $checked = ( isset( $this->live_2d__options['canTurnToHomePage'] ) && $this->live_2d__options['canTurnToHomePage'] === true ) ? 'checked' : '' ; ?>
        <label for="canTurnToHomePage-0"><input type="radio" name="live_2d_settings_option_name[canTurnToHomePage]" id="canTurnToHomePage-0" value="1" <?php echo $checked; ?>> 显示</label><br>
        <?php $checked = ( isset( $this->live_2d__options['canTurnToHomePage'] ) && $this->live_2d__options['canTurnToHomePage'] === false ) ? 'checked' : '' ; ?>
        <label for="canTurnToHomePage-1"><input type="radio" name="live_2d_settings_option_name[canTurnToHomePage]" id="canTurnToHomePage-1" value="0" <?php echo $checked; ?>> 隐藏</label></fieldset> <?php
    }

    public function canTurnToAboutPage_callback() {
        ?> <fieldset><?php $checked = ( isset( $this->live_2d__options['canTurnToAboutPage'] ) && $this->live_2d__options['canTurnToAboutPage'] === true ) ? 'checked' : '' ; ?>
        <label for="canTurnToAboutPage-0"><input type="radio" name="live_2d_settings_option_name[canTurnToAboutPage]" id="canTurnToAboutPage-0" value="1" <?php echo $checked; ?>> 显示</label><br>
        <?php $checked = ( isset( $this->live_2d__options['canTurnToAboutPage'] ) && $this->live_2d__options['canTurnToAboutPage'] === false ) ? 'checked' : '' ; ?>
        <label for="canTurnToAboutPage-1"><input type="radio" name="live_2d_settings_option_name[canTurnToAboutPage]" id="canTurnToAboutPage-1" value="0" <?php echo $checked; ?>> 隐藏</label></fieldset> <?php
    }

    public function waifuToolFont_callback() {
        printf(
            '<input class="regular-text" type="text" name="live_2d_settings_option_name[waifuToolFont]" id="waifuToolFont" value="%s">',
            isset( $this->live_2d__options['waifuToolFont'] ) ? esc_attr( $this->live_2d__options['waifuToolFont']) : ''
        );
    }

    public function waifuToolLine_callback() {
        printf(
            '<input class="regular-text" type="text" name="live_2d_settings_option_name[waifuToolLine]" id="waifuToolLine" value="%s">',
            isset( $this->live_2d__options['waifuToolLine'] ) ? esc_attr( $this->live_2d__options['waifuToolLine']) : ''
        );
    }

    public function waifuToolTop_callback() {
        printf(
            '<input class="regular-text" type="text" name="live_2d_settings_option_name[waifuToolTop]" id="waifuToolTop" value="%s">',
            isset( $this->live_2d__options['waifuToolTop'] ) ? esc_attr( $this->live_2d__options['waifuToolTop']) : ''
        );
    }
}
?>