<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SaludoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'app:saludo-command {nombre}';
    //protected $signature = 'app:saludo-command {nombre?}';//dato opcional
    //protected $signature = 'app:saludo-command {nombre=pepe}';//dato por defecto
    protected $signature = 'app:saludo-command {nombre} {--mayuscula}';//flag
    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        // 1. Obtener el parámetro usando el método argument()
        $nombre = $this->argument('nombre')!=null ? $this->argument('nombre') :  "anonimo";
        if ($this->option('mayuscula')) {
            $nombre = strtoupper($nombre);
        }

        // 2. Imprimir en pantalla
        $this->info("Hola, $nombre! Bienvenido a Laravel 12.");
    }
}
