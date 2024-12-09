<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\User;
use Illuminate\Http\Request;
>>>>>>> 149ce15 (revu du travail)
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
