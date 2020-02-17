<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reglement
 * 
 * @property int $id
 * @property string $uuid
 * @property string $numero
 * @property Carbon $date
 * @property double $montant
 * @property string $mode_reglement
 * @property int $ventes_id
 * @property int $clients_id
 * @property int $locations_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Client $client
 * @property Location $location
 * @property Vente $vente
 *
 * @package App
 */
class Reglement extends Model
{
	use SoftDeletes;
	protected $table = 'reglements';

	protected $casts = [
		'ventes_id' => 'int',
		'clients_id' => 'int',
		'locations_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'uuid',
		'numero',
		'date',
		'montant',
		'mode_reglement',
		'ventes_id',
		'clients_id',
		'locations_id'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'clients_id');
	}

	public function location()
	{
		return $this->belongsTo(Location::class, 'locations_id');
	}

	public function vente()
	{
		return $this->belongsTo(Vente::class, 'ventes_id');
	}
}
