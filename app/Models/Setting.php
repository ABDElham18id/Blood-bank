<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('notification_settings_text', 'about_app', 'phone', 'email', 'fb_link', 'insta_link', 'tw_link', 'youtube_link', 'whatup_link', 'goplus_link');




}
