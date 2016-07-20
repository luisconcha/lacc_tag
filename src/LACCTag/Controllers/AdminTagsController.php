<?php
/**
 * File: AdminTagsController.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 18/07/16
 * Time: 22:54
 * Project: lacc_tdd_project
 * Copyright: 2016
 */
namespace LACCPress\LACCTag\Controllers;

class AdminTagsController extends Controller
{
		public function index()
		{
				return view( 'lacctag::index' );
		}
}