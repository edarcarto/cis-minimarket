<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrademarkRequest;
use App\Http\Requests\UpdateTrademarkRequest;
use App\Repositories\TrademarkRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TrademarkController extends AppBaseController
{
    /** @var  TrademarkRepository */
    private $trademarkRepository;

    public function __construct(TrademarkRepository $trademarkRepo)
    {
        $this->trademarkRepository = $trademarkRepo;
    }

    /**
     * Display a listing of the Trademark.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trademarks = $this->trademarkRepository->paginate(10);

        return view('trademarks.index')
            ->with('trademarks', $trademarks);
    }

    /**
     * Show the form for creating a new Trademark.
     *
     * @return Response
     */
    public function create()
    {
        return view('trademarks.create');
    }

    /**
     * Store a newly created Trademark in storage.
     *
     * @param CreateTrademarkRequest $request
     *
     * @return Response
     */
    public function store(CreateTrademarkRequest $request)
    {
        $input = $request->all();

        $trademark = $this->trademarkRepository->create($input);

        Flash::success('Marca guardado correctamente.');

        return redirect(route('trademarks.index'));
    }

    /**
     * Display the specified Trademark.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trademark = $this->trademarkRepository->find($id);

        if (empty($trademark)) {
            Flash::error('Marca no encontrado');

            return redirect(route('trademarks.index'));
        }

        return view('trademarks.show')->with('trademark', $trademark);
    }

    /**
     * Show the form for editing the specified Trademark.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trademark = $this->trademarkRepository->find($id);

        if (empty($trademark)) {
            Flash::error('Marca no encontrado');

            return redirect(route('trademarks.index'));
        }

        return view('trademarks.edit')->with('trademark', $trademark);
    }

    /**
     * Update the specified Trademark in storage.
     *
     * @param int $id
     * @param UpdateTrademarkRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrademarkRequest $request)
    {
        $trademark = $this->trademarkRepository->find($id);

        if (empty($trademark)) {
            Flash::error('Marca no encontrado');

            return redirect(route('trademarks.index'));
        }

        $trademark = $this->trademarkRepository->update($request->all(), $id);

        Flash::success('Marca actualizado correctamente.');

        return redirect(route('trademarks.index'));
    }

    /**
     * Remove the specified Trademark from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trademark = $this->trademarkRepository->find($id);

        if (empty($trademark)) {
            Flash::error('Marca no encontrado');

            return redirect(route('trademarks.index'));
        }

        $this->trademarkRepository->delete($id);
        Flash::success('Marca eliminado correctamente.');

        return redirect(route('trademarks.index'));
    }
}
