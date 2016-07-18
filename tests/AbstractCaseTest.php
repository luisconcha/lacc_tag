<?php
/**
 * File: AbstractCaseTest.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 17/07/16
 * Time: 18:58
 * Project: lacc_tdd_project
 * Copyright: 2016
 */
namespace LACCPress\LACCTag\Tests;

use Orchestra\Testbench\TestCase;

abstract class AbstractCaseTest extends TestCase
{
		public function migrate()
		{
				$this->artisan( 'migrate', [
					'--realpath' => realpath( __DIR__ . '/../src/resources/migrations' ),
				] );
		}

		/**
		 * Define environment setup.
		 *
		 * @param  \Illuminate\Foundation\Application $app
		 *
		 * @return void
		 */
		protected function getEnvironmentSetUp( $app )
		{
				// Setup default database to use sqlite :memory:
				$app[ 'config' ]->set( 'database.default', 'testbench' );
				$app[ 'config' ]->set( 'database.connections.testbench', [
					'driver'   => 'sqlite',
					'database' => ':memory:',
					'prefix'   => '',
				] );
		}
}