<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ClientsController extends Controller
{
    // Consumiendo mi API para mostrar todos los clientes
    public function index()
    {
        $url = env('URL_SERVER_API');
        $response = Http::get($url . '/clients');
        $data = $response->json();
        return view('clients', compact('data'));
    }

    public function create()
    {
        return view('newClient');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');
        $response = Http::post($url . '/clients', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->route('client.index');
    }

    public function delete($idClient)
    {
        $url = env('URL_SERVER_API');
        $response = Http::delete($url . '/clients/' . $idClient);
        return redirect()->route('client.index');
    }

    public function show($idClient)
    {
        $url = env('URL_SERVER_API');
        $response = Http::get($url . '/clients/' . $idClient);
        $client = $response->json();
        return view('showClient', compact('client'));
    }

    public function update(Request $request)
    {
        $url = env('URL_SERVER_API');
        $response = Http::put($url . '/clients/' . $request->id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect()->route('client.index');
    }
}
