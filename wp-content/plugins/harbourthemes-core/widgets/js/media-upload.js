jQuery(function ($){
  'use strict';
  $('body').on('click','.ht-widget-media-upload',function(e) {
    e.preventDefault();
    var clicked = $(this).closest('div');
    var custom_uploader = wp.media({
      title: 'Upload avatar',
      multiple: false,
      })
    .on('select', function() {
      var attachment = custom_uploader.state().get('selection').first().toJSON();
      clicked.find('.ht-widget-media-img').attr('src', attachment.url);
      clicked.find('.ht-widget-media-url').val(attachment.url).trigger('change');
    }) 
    .open();
  });

  $('body').on('click','.ht-widget-media-remove',function(e) {
    $(this).closest('div').find('.ht-widget-media-img').removeAttr('src');
    $(this).closest('div').find('.ht-widget-media-url').val('').trigger('change');
    return false;
  });
});