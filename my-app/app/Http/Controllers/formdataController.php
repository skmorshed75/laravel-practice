<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formdataController extends Controller
{
    function demoAction(Request $request):array {
        //return $request->input();
        $photoFile = $request->file('photo');
        $fileSize = fileSize($photoFile);
        $fileType = fileType($photoFile);
        $fileOriginalName = $photoFile->getClientOriginalName();
        $tempFileName = $photoFile->getFilename();
        $extension = $photoFile->extension();

        return array(
            'filesize' => $fileSize,
            'filetype' => $fileType,
            'fileoriginalname' => $fileOriginalName,
            'temporaryfile'=> $tempFileName,
            'extension'=>$extension


        );
    }
}
