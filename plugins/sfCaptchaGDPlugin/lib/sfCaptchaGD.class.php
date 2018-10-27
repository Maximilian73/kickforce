<?php
/**
 * sfCaptchaGD class.
 *
 * @package    sfCaptchaGD
 * @subpackage sfCaptchaGD
 * @author     Alex Kubyshkin <glint@techinfo.net.ru>
 * @version    1.0.3
 */
class sfCaptchaGD 
{
 
  public  $securityCode;
  private $border_color;
  private $background_color;
  private $fonts;
  private $fonts_dir;
  private $fontSize;
  private $fontColor;
  private $chars;
  private $codeLength;
  private $image_width;
  private $image_height;
  private $char_align;

  private $font_size_min; /* минимальная высота символа */
  private $font_size_max; /* максимальная высота символа */

  function __construct() {
      $this->border_color = sfConfig::get('app_sf_captchagd_border_color', "000000");
      $this->background_color = sfConfig::get('app_sf_captchagd_background_color', "DDDDDD");
      $this->fonts = 'comic_sans_ms/Comic_Sans_MS.ttf';
      //      $this->fonts = sfConfig::get('app_sf_captchagd_fonts', array("akbar/akbar.ttf", "brushcut/BRUSHCUT.TTF", "molten/molten.ttf", "planet_benson/Planetbe.ttf", "whoobub/WHOOBUB_.TTF"));   



      $this->font_size_min = sfConfig::get('app_sf_captchagd_font_size_min', "16");
      $this->font_size_max = sfConfig::get('app_sf_captchagd_font_size_max', "16");

      $this->fonts_dir = sfConfig::get('app_sf_captchagd_fonts_dir', sfConfig::get('sf_plugins_dir').'/sfCaptchaGDPlugin/data/fonts/');
      $this->char_align = sfConfig::get('app_sf_captchagd_char_align', "20");
      $this->fontSize = sfConfig::get('app_sf_captchagd_font_size', "16");
      $this->fontInterval = sfConfig::get('app_sf_captchagd_font_interval', "8");      
      $this->fontColor = sfConfig::get('app_sf_captchagd_font_color', array("326496"));
      $this->chars = sfConfig::get('app_sf_captchagd_chars', "123456789");
      $this->codeLength = sfConfig::get('app_sf_captchagd_length', 4);
      $this->image_width = sfConfig::get('app_sf_captchagd_image_width', 75);
      $this->image_height = sfConfig::get('app_sf_captchagd_image_height', 30);
  }
    
  
  public function simpleRandString($length, $list) {
    /*
     * Generate random string
     * 
    */
    mt_srand((double)microtime()*1000000);
 
    $newstring = "";
 
    if ($length > 0) {
        while (strlen($newstring) < $length) {
            $newstring .= $list[mt_rand(0, strlen($list)-1)];
        }
    }
    return $newstring;
  }
 
  private function allocateColor($img, $color = ""){
    return imagecolorallocate($img,
                hexdec(substr($color, 0, 2)),
                hexdec(substr($color, 2, 2)), 
                hexdec(substr($color, 4, 2))
                );
  }
  
  public function generateImage($securityCode = NULL)
  {
    $context = sfContext::getInstance();
    $l = $context->getLogger();
    if ($context->getRequest()->getGetParameter('reload') || ! $securityCode || sfConfig::get('app_sf_captchagd_force_new_captcha', false)){
      $this->securityCode = $this->simpleRandString($this->codeLength, $this->chars);
    } else {
      $this->securityCode = $securityCode;
    }
    $context->getUser()->setAttribute('captcha', $this->securityCode);

    $this->img = imagecreatetruecolor($this->image_width, $this->image_height);
    $bc_color = imagecolorallocate($this->img, 250, 250, 250);
      $this->allocateColor($this->img, $this->background_color);

    $border_color = $this->allocateColor($this->img, 'd7d7ee');

    imagefill($this->img, 0, 0, $bc_color);
    $font_color=imagecolorallocate($this->img, 32, 64, 96); 

    imagerectangle($this->img, 0, 0, $this->image_width - 1, $this->image_height - 1, $border_color);
 
 
    $newstr = "";
    for ($i = 0; $i < strlen($this->securityCode); $i++) {
        $newstr .= $this->securityCode[$i] ." ";
    }

    $newstr = trim($newstr);

    $char_angle_min=-10; 
    $char_angle_max=10;	
    $start=5;	

    $char_angle_shadow=5;	

    for ($i = 0; $i < strlen($newstr); $i++) {

      $char_angle=rand($char_angle_min, $char_angle_max);
      $newFontSize=rand($this->font_size_min, $this->font_size_max);
        
      imagettftext($this->img, $newFontSize, $char_angle, $start, $this->char_align, $font_color, $this->fonts_dir.$this->fonts, $newstr[$i]);
      imagettftext($this->img, $newFontSize,  $char_angle+$char_angle_shadow*(rand(0, 1)*2-1), $start, $this->char_align, $bc_color, $this->fonts_dir.$this->fonts, $newstr[$i]);

      $start=$start+$this->fontInterval;     
    }


    $context->getResponse()->setContentType('image/gif');
    imagegif($this->img);
    imagedestroy($this->img);
    $context->getResponse()->send();
  }
}
?>
