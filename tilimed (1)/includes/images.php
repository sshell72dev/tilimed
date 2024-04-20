<?
#поддержка миниатюр
add_theme_support('post-thumbnails');

#получает ссылку на изображение по ID миниатюры
function getImageSrcByThumbId($thumbId, $size) {
    $image = wp_get_attachment_image_src($thumbId, $size);
    return $image[0];
}

#получает ссылку на изображение по ID записи
function getImageSrcByPostId($postId, $size) {
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($postId), $size);
    return $image[0];
}

#устанавливает качество загружаемых через админку изображений
add_filter('jpeg_quality', function($arg) {return 100;});

#кастомные размеры изображений
// add_image_size('w60-h-a', 60, '', false);
  add_image_size('375x224', 375, 224, true);
 // add_image_size('560x400', 560, 400, true);
?>