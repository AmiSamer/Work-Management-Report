<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name', 'project_code', 'desc', 'start_date', 'esti_date'];
}
