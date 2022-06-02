<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use  App\Models\MenuItem;
class MenuItem extends Model
{
    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->with('children');
    }
}
