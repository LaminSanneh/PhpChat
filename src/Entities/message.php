<?php
namespace ChatApp\Entities;
/**
 *
 */
class Message extends \Illuminate\Database\Eloquent\Model
{

    protected $fillable = ['text', 'sender'];
}


 ?>
