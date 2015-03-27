<div class="search-box">
<form method="get" id="searchform" action="<?php echo home_url() ; ?>/">
  <div class="row">
    <div class="large-12 columns">
      <div class="row collapse">
        <div class="small-2 columns">
          <button type="submit" class="button prefix">
            <i class="fa fa-search"></i>
          </button>
        </div>
        <div class="small-10 columns">
          <input type="text" name="s" id="s" size="15"/>
        </div>
      </div>
    </div>
  </div>
<!--<input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" maxlength="33" />
<input type="image" src="<?php bloginfo('template_directory'); ?>/images/button_search.png" class="button" value=""/>-->
</form>
</div>
