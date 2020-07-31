<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMarketRequest;
use App\Http\Requests\UpdateMarketRequest;
use App\Repositories\MarketRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MarketController extends AppBaseController
{
    private $marketRepository;

    public function __construct(MarketRepository $marketRepo)
    {
        $this->marketRepository = $marketRepo;
    }

    /**
     * Display a listing of the market.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $markets = $this->marketRepository->paginate(10);

        return view('markets.index')
            ->with('markets', $markets);
    }

    /**
     * Show the form for creating a new market.
     *
     * @return Response
     */
    public function create()
    {
        return view('markets.create');
    }

    /**
     * Store a newly created market in storage.
     *
     * @param CreateMarketRequest $request
     *
     * @return Response
     */
    public function store(CreateMarketRequest $request)
    {
        $input = $request->all();

        $market = $this->marketRepository->create($input);

        Flash::success('Tienda guardada correctamente.');

        return redirect(route('markets.index'));
    }

    /**
     * Display the specified market.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $market = $this->marketRepository->find($id);

        if (empty($market)) {
            Flash::error('Tienda no encontrada');

            return redirect(route('markets.index'));
        }

        return view('markets.show')->with('market', $market);
    }

    /**
     * Show the form for editing the specified market.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $market = $this->marketRepository->find($id);

        if (empty($market)) {
            Flash::error('Tienda no encontrada');

            return redirect(route('markets.index'));
        }

        return view('markets.edit')->with('market', $market);
    }

    /**
     * Update the specified market in storage.
     *
     * @param int $id
     * @param UpdateMarketRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarketRequest $request)
    {
        $market = $this->marketRepository->find($id);

        if (empty($market)) {
            Flash::error('Tienda no encontrada');

            return redirect(route('markets.index'));
        }

        $market = $this->marketRepository->update($request->all(), $id);

        Flash::success('Tienda actualizada correctamente.');

        return redirect(route('markets.index'));
    }

    /**
     * Remove the specified market from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $market = $this->marketRepository->find($id);

        if (empty($market)) {
            Flash::error('Tienda no encontrada');

            return redirect(route('markets.index'));
        }

        $this->marketRepository->delete($id);

        Flash::success('Tienda eliminada correctamente.');

        return redirect(route('markets.index'));
    }
}
