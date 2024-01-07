<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Inertia\Response;

class PizzaController extends Controller
{
    public function index(): Response 
    {
        // return Pizza::all();

        $pizzas = Pizza::all();

        return Inertia::render('Pizzas/All', [
            'pizzas' => $pizzas
        ]);
    }

    public function edit(Pizza $pizza): Response
    {
        return Inertia::render('Pizzas/Edit', [
            'pizza' => $pizza
        ]);
    }

    public function update(Pizza $pizza, Request $request): void
    {
        $pizza->update([
            'status' => $request->status,
        ]);
    }
}
