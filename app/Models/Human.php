<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    protected object $_head;
    protected object $_body;
    public function __construct()
    {
        $this->_head = new Head();
        $this->_body = new Body();
    }
}
