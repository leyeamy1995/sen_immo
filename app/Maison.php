<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Maison
 * 
 * @property int $id
 * @property string $uuid
 * @property string $numero
 * @property int $nombre_chambre
 * @property string $type_maison
 * @property int $biens_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Bien $bien
 *
 * @package App
 */
class Maison extends Model
{
	use SoftDeletes;
	protected $table = 'maisons';

	protected $casts = [
		'nombre_chambre' => 'int',
		'biens_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'numero',
		'nombre_chambre',
		'type_maison',
		'biens_id'
	];

	public function bien()
	{
		return $this->belongsTo(Bien::class, 'biens_id');
	}
}
