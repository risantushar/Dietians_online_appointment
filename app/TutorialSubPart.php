<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorialSubPart extends Model
{
    protected $table="tutorial_sub_parts";
    protected $fillable=['sub_tutorial_id','tutorial_id','sub_tutorial_link'];
}
