<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Location
 * 
 * @property int $id
 * @property string $uuid
 * @property string $numero
 * @property double $montant
 * @property Carbon $dateDebut
 * @property Carbon $dateFin
 * @property int $clients_id
 * @property int $biens_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Bien $bien
 * @property Client $client
 * @property Collection|Reglement[] $reglements
 *
 * @package App
 */
class Location extends Model
{
	use SoftDeletes;
	protected $table = 'locations';

	protected $casts = [
		'numero' => 'string',
		'clients_id' => 'int',
		'biens_id' => 'int'
	];

	protected $dates = [
		'dateDebut',
		'dateFin'
	];

	protected $fillable = [
		'uuid',
		'numero',
		'montant',
		'dateDebut',
		'dateFin',
		'clients_id',
		'biens_id'
	];

	public function bien()
	{
		return $this->belongsTo(Bien::class, 'biens_id');
	}

	public function client()
	{
		return $this->belongsTo(Client::class, 'clients_id');
	}

	public function reglements()
	{
		return $this->hasMany(Reglement::class, 'locations_id');
	}
}
