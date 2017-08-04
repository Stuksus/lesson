<?php


class GdGeneration
{
    public function Gd_Generation($name, $score, $point)
    {
        header('content-type: image/png');
        $image = imagecreatetruecolor(2480, 3508);

        $backgroundcol = imagecolorallocate($image, 17, 159, 38);
        $textcolor = imagecolorallocate($image, 0, 0, 0);
        imagefill($image, 0, 0, $backgroundcol);
        imagettftext($image, 250, 0, 797, 848, $textcolor, 'ARIAL.TTF', 'Diplom');
        imagettftext($image, 170, 0, 988, 1455, $textcolor, 'ARIAL.TTF', "$name");
        imagettftext($image, 170, 0, 617, 1884, $textcolor, 'ARIAL.TTF', 'You passed our');
        imagettftext($image, 170, 0, 601, 2118, $textcolor, 'ARIAL.TTF', 'training test!');
        imagettftext($image, 170, 0, 211, 2858, $textcolor, 'ARIAL.TTF', "Correct answers $point of 5!");
        imagettftext($image, 170, 0, 606, 3266, $textcolor, 'ARIAL.TTF', "Your mark: $score");
        imagepng($image);
        imagedestroy($image);
    }
}