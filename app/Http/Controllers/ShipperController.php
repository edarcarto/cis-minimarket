<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShipperRequest;
use App\Http\Requests\UpdateShipperRequest;
use App\Repositories\ShipperRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ShipperController extends AppBaseController
{
    /** @var  ShipperRepository */
    private $shipperRepository;

    public function __construct(ShipperRepository $shipperRepo)
    {
        $this->shipperRepository = $shipperRepo;
    }

    /**
     * Display a listing of the Shipper.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shippers = $this->shipperRepository->all();

        return view('shippers.index')
            ->with('shippers', $shippers);
    }

    /**
     * Show the form for creating a new Shipper.
     *
     * @return Response
     */
    public function create()
    {
        return view('shippers.create');
    }

    /**
     * Store a newly created Shipper in storage.
     *
     * @param CreateShipperRequest $request
     *
     * @return Response
     */
    public function store(CreateShipperRequest $request)
    {
        $input = $request->all();

        $shipper = $this->shipperRepository->create($input);

        Flash::success('Envio guardado correctamente.');

        return redirect(route('shippers.index'));
    }

    /**
     * Display the specified Shipper.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $shipper = $this->shipperRepository->find($id);

        if (empty($shipper)) {
            Flash::error('Envio no encontrado');

            return redirect(route('shippers.index'));
        }

        return view('shippers.show')->with('shipper', $shipper);
    }

    /**
     * Show the form for editing the specified Shipper.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $shipper = $this->shipperRepository->find($id);

        if (empty($shipper)) {
            Flash::error('Envio no encontrado');

            return redirect(route('shippers.index'));
        }

        return view('shippers.edit')->with('shipper', $shipper);
    }

    /**
     * Update the specified Shipper in storage.
     *
     * @param int $id
     * @param UpdateShipperRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateShipperRequest $request)
    {
        $shipper = $this->shipperRepository->find($id);

        if (empty($shipper)) {
            Flash::error('Envio no encontrado');

            return redirect(route('shippers.index'));
        }

        $shipper = $this->shipperRepository->update($request->all(), $id);

        Flash::success('Envio actualizado correctamente.');

        return redirect(route('shippers.index'));
    }

    /**
     * Remove the specified Shipper from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $shipper = $this->shipperRepository->find($id);

        if (empty($shipper)) {
            Flash::error('Envio no encontrado');

            return redirect(route('shippers.index'));
        }

        $this->shipperRepository->delete($id);

        Flash::success('Envio eliminado correctamente.');

        return redirect(route('shippers.index'));
    }
}
