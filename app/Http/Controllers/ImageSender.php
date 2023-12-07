<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\HttpHelper;
use Illuminate\Http\Request;

class ImageSender extends Controller
{
  public function sender(Request $request)
  {
    set_time_limit(30000);
    $fileLocation = 'C:\Users\User\Desktop\reno-japan-teens';

    $helper = new FileHelper();
    $files = $helper->location($fileLocation)->execute()->getFileName();

    $helper = new HttpHelper();

    foreach ($files as $filename) {
      $helper->post($filename);
    }    //     foreach ($hatdog as $filename) {

  }
}
