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
 * Class Client
 * 
 * @property int $id
 * @property string $uuid
 * @property string $code
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $telephone
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Location[] $locations
 * @property Collection|Reglement[] $reglements
 * @property Collection|Vente[] $ventes
 *
 * @package App
 */
class Client extends Model
{
	use SoftDeletes;
	protected $table = 'clients';

	protected $fillable = [
		
		'code',
		'nom',
		'prenom',
		'email',
		'telephone'
	];

	public function locations()
	{
		return $this->hasMany(Location::class, 'clients_id');
	}

	public function reglements()
	{
		return $this->hasMany(Reglement::class, 'clients_id');
	}

	public function ventes()
	{
		return $this->hasMany(Vente::class, 'clients_id');
	}
}
