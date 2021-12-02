<?php

namespace App\Http\Controllers\GrupoServicios;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Repositories\GrupoServiciosRepository;
use App\Models\GrupoServicios;
use Exception;

class GrupoServiciosController extends Controller
{
    protected $grupoRepository;

    public function __construct(GrupoServiciosRepository $grupoRepository)
    {
        $this->grupoRepository = $grupoRepository;
    }

    public function lista(string $key, int $meses=1){

        if($key != env('API_KEY_ACCESS'))
                abort(404);
		try {
            $resultados = $this->grupoRepository->lista($meses);
			return response()->json($resultados);
		}
		catch (Exception $e) {
			return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
		}
	}
}
