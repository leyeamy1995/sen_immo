<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Terrain
 * 
 * @property int $id
 * @property string $uuid
 * @property string $code
 * @property int $biens_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Bien $bien
 *
 * @package App
 */
class Terrain extends Model
{
	use SoftDeletes;
	protected $table = 'terrains';

	protected $casts = [
		'biens_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'code',
		'biens_id'
	];

	public function bien()
	{
		return $this->belongsTo(Bien::class, 'biens_id');
	}
}
