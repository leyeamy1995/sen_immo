<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Appartement
 * 
 * @property int $id
 * @property string $uuid
 * @property string $code
 * @property string $type_appartement
 * @property int $biens_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Bien $bien
 *
 * @package App
 */
class Appartement extends Model
{
	use SoftDeletes;
	protected $table = 'appartements';

	protected $casts = [
		'biens_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'code',
		'type_appartement',
		'biens_id'
	];

	public function bien()
	{
		return $this->belongsTo(Bien::class, 'biens_id');
	}
}
