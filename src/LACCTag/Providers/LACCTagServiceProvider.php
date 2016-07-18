<?php
/**
 * File: LACCTagServiceProvider.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 17/07/16
 * Time: 21:52
 * Project: lacc_tdd_project
 * Copyright: 2016
 */
namespace LACCPress\LACCTag\Providers;

use Illuminate\Support\ServiceProvider;

class LACCTagServiceProvider extends ServiceProvider
{
		public function boot()
		{
				$this->publishes( [ __DIR__ . '/../../resources/migrations/' => base_path( 'database/migrations' ) ], 'migrations' );
		}

		public function register()
		{
				// TODO: Implement register() method.
		}
}