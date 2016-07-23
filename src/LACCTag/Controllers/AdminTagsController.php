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

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use LACCPress\LACCTag\Models\Tag;

class AdminTagsController extends Controller
{
		private $tag;
		private $response;

		public function __construct( ResponseFactory $response, Tag $tag )
		{
				$this->tag      = $tag;
				$this->response = $response;
		}

		public function index()
		{
				return $this->response->view( 'lacctag::index' );
		}
}