<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPaginateByLimit(int $limit_count = 3,$limit = 2){
        return $this->orderBy('updated_at','DESC')->limit($limit)->paginate($limit_count);
        
    }
}
