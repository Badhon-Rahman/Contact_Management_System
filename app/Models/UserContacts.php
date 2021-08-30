<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContacts extends Model
{
    protected $table='user_contacts';
    protected $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATEDTED_AT = 'updated_at';
    protected $name;
    protected $email_1;
    protected $email_2;
    protected $mobile_1;
    protected $mobile_2;
    protected $groupId;
    protected $isFavorite;
    protected $fillable = [
      'name',
      'email_1',
      'email_2',
      'mobile_1',
      'mobile_2',
      'group_id',
      'isFavorite'
  ];

    public function checkAuthentication($name, $email_1, $email_2, $mobile_1, $mobile_2, $groupId, $isFavorite)
    {
      $data=array('name'=>$name, 'email_1'=>$email_1, 'email_2'=>$email_2, 'mobile_1'=>$mobile_1, 'mobile_2'=>$mobile_2, 'group_id'=>$groupId, 'isFavorite'=>$isFavorite);
      DB::table('user_contacts')->insert($data);
    }
}
