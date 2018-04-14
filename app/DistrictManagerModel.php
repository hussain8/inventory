<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistrictManagerModel extends Model
{
   protected $table = `district_managers`;
   protected $primaryKey = 'dm_id';
   protected $fillable = ['dm_user_id', 'dm_district_id'];
}
