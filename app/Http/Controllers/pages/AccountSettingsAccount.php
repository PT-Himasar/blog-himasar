<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AccountSettingsAccount extends Controller
{
  public function index()
  {
    $himasar = User::orderBy('created_at', 'ASC')->first();
    return view('content.pages.pages-account-settings-account', [
      'himasar' => $himasar
    ]);
  }

  public function update(Request $request, User $id)
  {
    try {
      // Validasi data request
      $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'no_tlp' => 'required',
        'password' => 'sometimes|nullable|min:6',
        'roles' => 'nullable',
        'alamat' => 'required',
        'about' => 'nullable',
        'visi' => 'nullable',
        'misi' => 'nullable',
        'tujuan' => 'nullable',
        'sejarah' => 'nullable'
      ]);

      // Jika password diisi, maka tambahkan ke $validatedData setelah di-hash
      if ($request->filled('password')) {
        $validatedData['password'] = bcrypt($request->password);
      } else {
        // Jika password tidak diisi, hapus dari $validatedData agar tidak diperbarui
        unset($validatedData['password']);
      }

      // Perbarui data id dengan data yang telah divalidasi
      $id->fill($validatedData)->save();

      return redirect()->back()->with('success', 'Data berhasil diperbarui!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Data gagal diperbarui. Coba lagi!');
    }
  }
}
