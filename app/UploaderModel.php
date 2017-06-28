<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class UploaderModel extends Model
{
        public $table = 'files_table';
        public $primaryKey = 'ID';
        public $timestamps=false;
     	public $fillable=['fname','pname','plname','fd','sharetype'];
     	   
        
       
}
