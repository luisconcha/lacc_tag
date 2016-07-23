<?php
/**
 * File: AdminTagsControllers.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 23/07/16
 * Time: 17:50
 * Project: lacc_tdd_project
 * Copyright: 2016
 */
namespace LACCPress\LACCTag\Tests\Controllers;

use LACCPress\LACCTag\Controllers\AdminTagsController;
use LACCPress\LACCTag\Controllers\Controller;
use LACCPress\LACCTag\Models\Tag;
use LACCPress\LACCTag\Tests\AbstractTestCase;
use Illuminate\Contracts\Routing\ResponseFactory;
use Mockery as m;

class AdminTagsControllers extends AbstractTestCase
{
		public function test_should_extend_from_controller()
		{
				$tag             = m::mock( Tag::class );
				$responseFactory = m::mock( ResponseFactory::class );
				$controller      = new AdminTagsController( $responseFactory, $tag );
				$this->assertInstanceOf( Controller::class, $controller );
		}

		public function test_controller_should_run_index_method_and_return_arguments()
		{
				$tag             = m::mock( Tag::class );
				$responseFactory = m::mock( ResponseFactory::class );
				$controller      = new AdminTagsController( $responseFactory, $tag );
				$html            = m::mock();
				$tagsResult      = [ 'tag 01', 'tag 02' ];
				$tag->shouldReceive( 'all' )->andReturn( $tagsResult );
				$responseFactory->shouldReceive( 'view' )
					->with( 'lacctag::index', [ 'listTags' => $tagsResult ] )
					->andReturn( $html );
				$this->assertEquals( $controller->index(), $html );
		}
}