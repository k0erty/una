-- STORAGES & TRANSCODERS
UPDATE `sys_transcoder_filters` SET `filter_params`='a:3:{s:1:"w";s:3:"100";s:1:"h";s:3:"100";s:13:"square_resize";s:1:"1";}' WHERE `transcoder_object`='bx_timeline_photos_preview' AND `filter`='Resize';
UPDATE `sys_transcoder_filters` SET `filter_params`='a:3:{s:1:"w";s:3:"318";s:1:"h";s:3:"318";s:13:"square_resize";s:1:"1";}' WHERE `transcoder_object`='bx_timeline_photos_view' AND `filter`='Resize';