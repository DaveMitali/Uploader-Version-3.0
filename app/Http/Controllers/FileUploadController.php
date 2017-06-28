<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UploaderModel;

class FileUploadController extends Controller
{
	public function uploadForm()
	{
		{
        return view('form_upload');
    	}
	}
	public function uploadSubmit(Request $request)
	{
	$tempModel = new UploaderModel;
	$tempModel->File_Name = $request->fname;
    $tempModel->Project_Name = $request->pname;
    $tempModel->Project_Lead_Name = $request->plname;
    $tempModel->File_Description = $request->fd;
    $tempModel->Share_Type = $request->sharetype;
    $tempModel->save();
    $targetPath=dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR. $tempModel->ID;
   	$targetPath = $request->file->storeAs('uploads', $tempModel->ID);
    
    return view('form_upload');
	}
	public function view_table()
	{
		{
		 $request_data = UploaderModel::all();
		  return view('view_files')->with('request_data', $request_data);
    	}
	}
}