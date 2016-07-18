<?php
/**
 * File: Tag.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 03/07/16
 * Time: 22:10
 * Project: CodeTags
 * Copyright: 2016
 */
namespace LACCPress\LACCTag\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
		protected $table = 'laccpress_tag';
		protected $fillable = [
			'name',
		];

		public function categorizable()
		{
				return $this->morphTo();
		}
}