<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle after user is authenticated.
     */
    protected function authenticated(Request $request, $user)
{
    $user->last_login_at = now(); // Set waktu sekarang
    $user->save(); // Simpan perubahan
}
public function logout(Request $request)
{
    Auth::logout(); // Mengeluarkan pengguna yang sedang login

    return redirect('/login')->with('success', 'Anda telah berhasil logout.'); // Redirect ke halaman login
}

}
