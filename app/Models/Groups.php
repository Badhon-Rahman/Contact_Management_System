<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table='groups';
    protected $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATEDTED_AT = 'updated_at';
    protected $name;
    protected $fillable = [
      'name',
  ];

    public function checkAuthentication($name)
    {
      $data=array('name'=>$name);
      DB::table('groups')->insert($data);
    }
}
