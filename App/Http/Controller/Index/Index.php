<?php

namespace App\Http\Controller\Index;

use Lamp\Controller;

/**
 * Class Index
 * @package App\Http\Controller\Index
 */
class Index extends Controller
{

    /**
     * Index
     * @return string[]
     */
    public function index ()
    {
        return ['name' => 'LAMPhp', 'version' => 'beta'];
    }
}