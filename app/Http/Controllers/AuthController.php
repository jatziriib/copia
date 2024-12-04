<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        // Asegúrate de tener el archivo login.blade.php
        return view('login');
    }

    // Procesar el login
    public function login(Request $request)
    {
        // Validar los datos ingresados
        $credentials = $request->validate([
            'usuario' => ['required', 'string'],
            'contrasena' => ['required', 'string'],
        ]);
        echo($credentials);

        // Intentar autenticar con las credenciales
        if (Auth::attempt([
            'usuario' => $credentials['usuario'],
            'password' => $credentials['contrasena'],
        ])) {
            // Regenerar la sesión y redirigir al dashboard
            $request->session()->regenerate();
            return redirect()->intended('principal.blade.php'); // Redirige a la ruta deseada
        }

        // Si falla la autenticación, devolver error
        return back()->withErrors([
            'login_error' => 'Las credenciales no son correctas.',
        ]);
    }
}
