<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    protected object $_leftEye;
    protected object $_rightEye;
    protected object $_leftEar;
    protected object $_rightEar;
    protected object $_nose;
    protected object $_moustache;
    protected object $_hair;
    protected object $_mouth;
    protected object $_headForm;
    public function __construct()
    {
        $this->_hair = new Hair();
        $this->_leftEye = new Eye();
        $this->_rightEye = new Eye();
        $this->_leftEar = new Ear();
        $this->_rightEar = new Ear();
        $this->_nose = new Nose();
        $this->_moustache = new Mustache();
        $this->_mouth   = new Mouth();
        $this->_headForm = new HeadForm();
    }
}
