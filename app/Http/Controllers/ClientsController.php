<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\CityRepository;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\StateRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\ClientService;
use Illuminate\Support\Facades\Response;

class ClientsController extends Controller
{

    public function __construct(ClientRepository $repository,
                                UserRepository $userRepository,
                                ClientService $clientService,
                                StateRepository $stateRepository,
                                CityRepository $cityRepository)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->clientService = $clientService;
        $this->stateRepository = $stateRepository;
        $this->cityRepository = $cityRepository;
    }

    public function index()
    {

        $clients = $this->repository->paginate();
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(AdminClientRequest $request)
    {
        $data = $request->all();
        $this->clientService->create($data);
        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {
        $client = $this->repository->find($id);
        return view('admin.clients.edit', compact('client'));
    }

    public function update(AdminClientRequest $request, $id)
    {
        $data = $request->all();
        $this->clientService->update($data, $id);
        return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.clients.index');
    }

//    public function cidades(AdminClientRequest $request, $id)
//    {
//        $estado = $this->stateRepository->find($id);
//        $cidades = $estado->cities()->getQuery()->get(['id', 'city']);
//        return Response::json($cidades);
//    }

}
