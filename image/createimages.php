<!DOCTYPE html>
<html lang="sv">
    <head>	
        <meta charset="UTF-8" />
	<title>
            Skapar 100 jpg bilder...
	</title>
    </head>
    <body>
        <?php

            for($counter = 1; $counter <= 100; $counter++)
            {
                //http://www.php.net/manual/en/function.imagecreatetruecolor.php
                //$image = imagecreatetruecolor(30, 30);
                $image = imagecreatetruecolor(50, 50);
                
                //$bgColor = ImageColorAllocate ($image, 173, 216, 230);
                $bgColor = ImageColorAllocate ($image, 0, 255, 0);
                
                //http://www.php.net/manual/en/function.imagecolorallocate.php
                //$textColor = imagecolorallocate($image, 0, 0, 255);
                $textColor = imagecolorallocate($image, 255, 255, 255);

                $strCounter = $counter;
                
                //http://www.php.net/manual/en/function.settype.php
                settype($strCounter, "string");

                $y = 7;
                if($counter < 10)
                {   
                    $x = 10;
                }

                if($counter > 9 && $counter < 100)
                {
                    $x = 8;
                }

                if($counter == 100)
                {
                    $x = 2;
                }
                
                //http://php.net/manual/en/function.imagefill.php
                imagefill($image, 0, 0, $bgColor);
                
                //http://www.php.net/manual/en/function.imagestring.php
                //imagestring($image, 5, $x, $y,  $strCounter, $textColor);
                imagestring($image, 5, $x, $y,  $strCounter, $textColor);

                //http://www.php.net/manual/en/function.imagejpeg.php
                imagepng($image, "image".$strCounter.".png", 0);

                //http://www.php.net/manual/en/function.imagedestroy.php
                imagedestroy($image);

                echo("<p><em><b>image" . $strCounter . ".jpg</b></em> är nu skapad!</p>" . PHP_EOL);
            }
        ?>
    </body>
</html>