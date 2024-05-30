<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Livewire\Livewire;
use App\Livewire\Berita\Show as BeritaShow;
use App\Livewire\Desa\Kegiatan as DesaKegiatan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->role === 'Admin' || $user->role === 'Pengurus Desa';
        });

        Gate::define('pengguna', function (User $user) {
            return $user->role === 'Pengguna';
        });

        Livewire::component('berita.show', BeritaShow::class);
        Livewire::component('desa.kegiatan', DesaKegiatan::class);
    }
}