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
 * Class User
 * 
 * @property int $id
 * 
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $password
 * @property string $telephone
 * @property string $role
 * @property string $email_verified_at
 * @property string $remember_token
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Gestionnaire[] $gestionnaires
 *
 * @package App
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [

		'nom',
		'prenom',
		'email',
		'password',
		'telephone',
		'role',
		'email_verified_at',
		'remember_token'
	];

	public function gestionnaire()
	{
		return $this->hasOne(Gestionnaire::class, 'users_id');
	}
}
