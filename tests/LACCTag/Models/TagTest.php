<?php
/**
 * File: TagTest.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 17/07/16
 * Time: 21:04
 * Project: lacc_tdd_project
 * Copyright: 2016
 */
namespace LACCPress\LACCTag\Tests\Models;

use LACCPress\LACCTag\Models\Tag;
use LACCPress\LACCTag\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase
{
		public function setUp()
		{
				parent::setUp();
				$this->migrate();
		}

		public function test_check_if_a_tag_can_be_persisted()
		{
				$tag = Tag::create( [ 'name' => 'Tag 01' ] );
				$this->assertEquals( 'Tag 01', $tag->name );
				$tag = Tag::all()->first();
				$this->assertEquals( 'Tag 01', $tag->name );
		}
}