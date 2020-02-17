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
 * Class Bien
 * 
 * @property int $id

 * @property string $numero
 * @property double $prix
 * @property string $adresse
 * 
 * @property string $description
 * @property string $superficie
 * @property string $type_biens
 * @property string $categorie
 * @property string $image
 
 * @property float $latitude
 * @property float $longitude
 * @property int $gestionnaires_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Gestionnaire $gestionnaire
 * @property Collection|Appartement[] $appartements
 * @property Collection|Location[] $locations
 * @property Collection|Maison[] $maisons
 * @property Collection|Terrain[] $terrains
 * @property Collection|Vente[] $ventes
 *
 * @package App
 */
class Bien extends Model
{
	use SoftDeletes;
	protected $table = 'biens';

	protected $casts = [
		'prix' => 'double',
		'latitude' => 'float',
		'longitude' => 'float',
		'gestionnaires_id' => 'int'
	];

	protected $fillable = [

		'numero',
		'prix',
		'adresse',
		
		'description',
		'superficie',
		'type_biens',
		'categorie',
		'image',
		
		'latitude',
		'longitude',
		'gestionnaires_id'
	];

	public function gestionnaire()
	{
		return $this->belongsTo(Gestionnaire::class, 'gestionnaires_id');
	}

	public function appartements()
	{
		return $this->hasMany(Appartement::class, 'biens_id');
	}

	public function locations()
	{
		return $this->hasMany(Location::class, 'biens_id');
	}

	public function maisons()
	{
		return $this->hasMany(Maison::class, 'biens_id');
	}

	public function terrains()
	{
		return $this->hasMany(Terrain::class, 'biens_id');
	}

	public function ventes()
	{
		return $this->hasMany(Vente::class, 'biens_id');
	}
}
