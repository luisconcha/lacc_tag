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
				$listTags = $this->tag->all();

				return $this->response->view( 'lacctag::index', compact( 'listTags' ) );
		}

		public function create()
		{
				return $this->response->view( 'lacctag::create' );
		}

		public function store( Request $request )
		{
				$this->tag->create( $request->all() );

				return redirect()->route( 'admin.tags.index' );
		}

		public function edit( $id )
		{
				$tag = $this->tag->find( $id );

				return $this->response->view( 'lacctag::edit', compact( 'tag' ) );
		}

		public function update( Request $request, $id )
		{
				$tagId = $id;
				$input = $request->all();
				$this->tag->find( $tagId )->update( $input );

				return redirect()->route( 'admin.tags.index' );
		}

		public function destroy( $id )
		{
				$this->tag->find( $id )->delete();

				return redirect()->route( 'admin.tags.index' );
		}

}