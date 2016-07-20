<?php
/**
 * File: Controller.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 18/07/16
 * Time: 22:54
 * Project: lacc_tdd_project
 * Copyright: 2016
 */
namespace LACCPress\LACCTag\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
		use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}