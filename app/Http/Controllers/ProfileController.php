<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    public function show(Request $request): Response
    {
        $user = $request->user()->load([
            'persona.emails',
            'persona.telefonos',
            'persona.direcciones',
        ]);

        return Inertia::render('profile/Show', [
            'user' => $user,
        ]);
    }

    public function save(Request $request): RedirectResponse
    {
        /** @var User $user */
        $user = $request->user();

        /** @var Persona|null $persona */
        $persona = $user->persona;

        if (! $persona) {
            abort(404, 'La cuenta no tiene una persona asociada.');
        }

        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'ap1' => ['required', 'string', 'max:100'],
            'ap2' => ['nullable', 'string', 'max:100'],
            'identificacion' => ['required', 'string', 'max:30'],
            'fecha_nacimiento' => ['nullable', 'date'],

            'telefono' => ['nullable', 'string', 'max:30'],

            'provincia' => ['nullable', 'string', 'max:100'],
            'canton' => ['nullable', 'string', 'max:100'],
            'distrito' => ['nullable', 'string', 'max:100'],
            'detalle' => ['nullable', 'string', 'max:255'],
        ]);

        $persona->update([
            'nombre' => $validated['nombre'],
            'ap1' => $validated['ap1'],
            'ap2' => $validated['ap2'],
            'identificacion' => $validated['identificacion'],
            'fecha_nacimiento' => $validated['fecha_nacimiento'] ?? null,
        ]);

        if (! empty($validated['telefono'])) {
            $telefono = $persona->telefonos()
                ->where('principal', true)
                ->first();

            if ($telefono) {
                $telefono->update([
                    'numero' => $validated['telefono'],
                ]);
            } else {
                $persona->telefonos()->create([
                    'numero' => $validated['telefono'],
                    'tipo' => 'Principal',
                    'principal' => true,
                ]);
            }
        }

        $direccion = $persona->direcciones()
            ->where('principal', true)
            ->first();

        $hasAddressData = collect([
            $validated['provincia'] ?? null,
            $validated['canton'] ?? null,
            $validated['distrito'] ?? null,
            $validated['detalle'] ?? null,
        ])->filter(fn ($value) => filled($value))->isNotEmpty();

        if ($hasAddressData) {
            $addressData = [
                'provincia' => $validated['provincia'] ?? '',
                'canton' => $validated['canton'] ?? '',
                'distrito' => $validated['distrito'] ?? '',
                'detalle' => $validated['detalle'] ?? '',
            ];

            if ($direccion) {
                $direccion->update($addressData);
            } else {
                $persona->direcciones()->create([
                    ...$addressData,
                    'tipo' => 'Principal',
                    'principal' => true,
                ]);
            }
        }

        return back()->with('success', 'Perfil actualizado correctamente.');
    }
}
