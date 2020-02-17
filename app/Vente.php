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
 * Class Vente
 * 
 * @property int $id
 * @property string $uuid
 * @property string $numero
 * @property double $montant
 * @property double $reliquat
 * @property Carbon $date
 * @property int $biens_id
 * @property int $clients_id
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
class Vente extends Model
{
	use SoftDeletes;
	protected $table = 'ventes';

	protected $casts = [
		'montant' => 'double',
		'reliquat' => 'double',
		'biens_id' => 'int',
		'clients_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'uuid',
		'numero',
		'montant',
		'reliquat',
		'date',
		'biens_id',
		'clients_id'
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
		return $this->hasMany(Reglement::class, 'ventes_id');
	}
}
