jQuery(document).ready(function(){
        jQuery('#login-trigger').click(function(){
                jQuery(this).next('#toplogin-content').slideToggle();
                jQuery(this).toggleClass('active');                                  
 
                if (jQuery(this).hasClass('active')) 
				jQuery(this).find('span').html('&#x25B2;')
                        else jQuery(this).find('span').html('&#x25BC;')
                })
});