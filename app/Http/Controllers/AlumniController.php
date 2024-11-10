<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlumniController extends Controller
{

    private $url;
    private $token;

    public function __construct()
    {
        $this->url = config('himasar.globalApi.url');
        $this->token = config('himasar.globalApi.token');
    }

    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->token}"
        ])->get("{$this->url}/anggota");

        $data = [];

        if ($response->successful()) {
            $data = $response['data'];
        }

        return view('pages.alumni', [
            'alumnis' => $data
        ]);
    }
}
