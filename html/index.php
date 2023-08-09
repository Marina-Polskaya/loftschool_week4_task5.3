<?php
include '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('image.jpg');

$image->resize(200, null, function (\Intervention\Image\Constraint $constraint){
    $constraint->aspectRatio();
});

$image->text('ШАБЛОН', $image->getWidth()/2, $image->getHeight()/2, function (\Intervention\Image\AbstractFont $font) {
    $font->size(40);
    $font->file('./ofont.ru_Oldtimer.ttf');
    $font->color([255, 255, 255, 0.6]);
    $font->align('center');
    $font->valign('middle');
});
$image->save('miniImage.jpg');

echo $image->response('jpg');
