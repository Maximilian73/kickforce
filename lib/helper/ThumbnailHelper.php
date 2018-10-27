<?php

function getThumbnail($image,$subUploadDir,$width,$height, $scale = true, $inflate = true, $quality = 95)
{

  if( 
    $image == null || 
    !file_exists(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image) || 
    $width == null || 
    $height == null 
  )
    return false;

  $thumbnail_dir = $width . 'x' . $height.'/';
  $image_file=basename($image);

  if (!is_dir(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir))
  {
    mkdir (sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir,0777);
  }

  $l = sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image;
  $s = sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file;

  if (!file_exists($s))
  {
    $imagesy = getimagesize($l);
  
    $_x = $imagesy[1] * ($width/$height);
    $_y = $imagesy[0] / ($width/$height);

    if ( ($imagesy[0] > $width) || ($imagesy[1] > $height) ){



	    if(($imagesy[0]/$imagesy[1]) > ($width/$height))
	    {
        $config['x_axis'] = ($imagesy[0] - $_x)/2;
        $config['y_axis'] = 0;
        $imagesy[0] = $_x;		    
	    }
	    else
	    {
        $config['x_axis'] = 0;
        $config['y_axis'] = (($imagesy[1]) - $_y)/2;
        $imagesy[1] = $_y;
	    
	    }
/*
      if ($imagesy[0] > $imagesy[1] || ($imagesy[0] / $imagesy[1]) > ($width/$height) )//если ширина изображения больше, чем ширина макета 
      //if ($imagesy[0] > $imagesy[1] and ($imagesy[0] / $imagesy[1]) > ($width/$height) )//если ширина изображения больше, чем ширина макета 
      {
        $config['x_axis'] = ($imagesy[0] - $_x)/2;
        $config['y_axis'] = 0;
        $imagesy[0] = $_x;			  
      }
      else 
      {
        $config['x_axis'] = 0;
        $config['y_axis'] = (($imagesy[1]) - $_y)/2;
        $imagesy[1] = $_y;
      }

*/
//echo $l,'<br />',$config['x_axis'], '<br>',$config['y_axis'],'<br />',$imagesy[0],'<br>',$imagesy[1]; exit;
      $c = new eCrop($l,$config['x_axis'], $config['y_axis'],$imagesy[0],$imagesy[1]);
      $c->setJpgQuality(100);
      $c->setThumbSize($width, $height); 
      $c->crop($s); 
    }
    else
    {
      copy($l,$s);
    }

  }
  return '/uploads'.'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file;
}



function getThumbnailInvestBlank($image,$subUploadDir,$width,$height, $scale = true, $inflate = true, $quality = 100)
{

  if( 
    $image == null || 
    !file_exists(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image) || 
    $width == null || 
    $height == null 
  )
    return false;


  $thumbnail_dir = $width . 'x' . $height.'/';
  $image_file=basename($image);

  if (!is_dir(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir))
  {
    mkdir (sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir,0777);
  }

  $l = sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image;
  $s = sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file;

  if (!file_exists($s))
  {
    $imagesy = getimagesize($l);

    $img = new sfImage($l,$imagesy['mime']);
    $img->thumbnail($width,$height);
    $img->setQuality(100);
    $img->saveAs($s);
  }
  return '/uploads'.'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file;
}


function getThumbnailInvest($image,$subUploadDir,$width,$height, $scale = true, $inflate = true, $quality = 100)
{

  if( 
    $image == null || 
    !file_exists(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image) || 
    $width == null || 
    $height == null 
  )
    return false;


  $thumbnail_dir = $width . 'x' . $height.'/';
  $image_file=basename($image);

  if (!is_dir(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir))
  {
    mkdir (sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir,0777);
  }

  $l = sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image;
  $s = sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file;
    $imagesy = getimagesize($l);
//exit;
  if (!file_exists($s))
  {
    if ( ($imagesy[0] > $width) && ($imagesy[1] > $height) ){


//	  echo 88; exit;
    $thumbnail = new sfThumbnail($width, $height,$scale,$inflate,$quality);
    $thumbnail->loadFile($l);
    $thumbnail->save($s);
    }
    else
    {
      return '/uploads'.'/'.$subUploadDir.'/'.$image_file;
//      copy($l,$s);	    
    }
  }

  return '/uploads'.'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file;
}



function getThumbnailOld($image,$subUploadDir,$width=null,$height=null, $scale = true, $inflate = true, $quality = 100)
{

  if( $image == null || !file_exists(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image))
    return false;

	$image = '/'.$image;
	$image_file=basename($image);
    $thumbnail_dir='';

	if ($width>0) $thumbnail_dir.=$width;
    if ($height>0) $thumbnail_dir.='x'.$height;
    if ($width>0 || $height>0) $thumbnail_dir.='/';


    if (!file_exists(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file) && ($width!=null || $height!=null))
    {

      if (!file_exists(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image_file)) {
        $image = '/' . sfConfig::get('app_flower_no_photo');
        $image_file=basename($image);
      }


      if (!is_dir(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir))
      {
        mkdir (sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir,0777);
      }


	  $imagesy = getimagesize(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$image);
  
      $_x = $imagesy[1] * ($width/$height);

	  $_y = $imagesy[0] / ($width/$height);

    
  
	  if ( ($imagesy[0] > $width) || ($imagesy[1] > $height) ){

		  if ($imagesy[0] > $imagesy[1] and ($imagesy[0] / $imagesy[1]) > ($width/$height) ) {
        $config['x_axis'] = ($imagesy[0] - $_x)/2;
			  $config['y_axis'] = 0;
			  $imagesy[0] = $_x;			  
		  } else {
        $config['x_axis'] = 0;
			  $config['y_axis'] = (($imagesy[1]) - $_y)/2;
			  $imagesy[1] = $_y;
		  }
    }

//echo sfConfig::get('sf_upload_dir').'+'.$image.'+'.$config['x_axis'].'+'.$config['y_axis'].'+'.$imagesy[0].'+'.$imagesy[1]; exit;
    $c = new eCrop(
      sfConfig::get('sf_upload_dir').
      '/'.$subUploadDir.
      '/'.$image, 
      $config['x_axis'], 
      $config['y_axis'], 
      $imagesy[0], 
      $imagesy[1]);
	  $c->crop(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file);

	  $thumbnail = new sfThumbnail($width, $height,$scale,$inflate,$quality);
      $thumbnail->loadFile(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file);
	  $thumbnail->save(sfConfig::get('sf_upload_dir').'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file);
	}

	return '/uploads'.'/'.$subUploadDir.'/'.$thumbnail_dir.$image_file;
}
