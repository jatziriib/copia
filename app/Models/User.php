<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model; // Modelo base para MongoDB
use Illuminate\Auth\Authenticatable; // Trait para autenticación
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract; // Interfaz para autenticación
use Illuminate\Support\Facades\Hash;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable; // Incluye métodos requeridos para autenticación

    /**
     * Conexión específica para MongoDB.
     *
     * @var string
     */
    protected $connection = 'mongodb';

    /**
     * Nombre de la colección en MongoDB.
     *
     * @var string
     */
    protected $collection = 'users';

    /**
     * Atributos que se pueden asignar en masa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usuario',
        'contrasena',
    ];

    /**
     * Atributos que deben ocultarse para la serialización.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'contrasena',
    ];

    /**
     * Mutador para encriptar la contraseña automáticamente.
     *
     * @param string $value
     * @return void
     */
    public function setContrasenaAttribute($value)
    {
        $this->attributes['contrasena'] = bcrypt($value);
    }

    /**
     * Método para verificar la contraseña.
     *
     * @param string $contrasena
     * @return bool
     */
    public function verifyContrasena($contrasena)
    {
        return Hash::check($contrasena, $this->attributes['contrasena']);
    }

    /**
     * Sobrescribir el identificador de autenticación.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'usuario'; // Cambiar 'email' a 'usuario'
    }

    /**
     * Obtener el valor del identificador de autenticación.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->attributes['usuario'];
    }

    /**
     * Obtener el valor de la contraseña para la autenticación.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->attributes['contrasena'];
    }
}
