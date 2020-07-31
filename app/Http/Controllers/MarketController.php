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
     * Display a listing of the Category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categories = $this->marketRepository->paginate(10);

        return view('markets.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return Response
     */
    public function create()
    {
        return view('markets.create');
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CreateMarketRequest $request
     *
     * @return Response
     */
    public function store(CreateMarketRequest $request)
    {
        $input = $request->all();

        $category = $this->marketRepository->create($input);

        Flash::success('Tienda guardada correctamente.');

        return redirect(route('markets.index'));
    }

    /**
     * Display the specified Category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $category = $this->marketRepository->find($id);

        if (empty($category)) {
            Flash::error('Tienda no encontrada');

            return redirect(route('markets.index'));
        }

        return view('markets.show')->with('category', $category);
    }

    /**
     * Show the form for editing the specified Category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $category = $this->marketRepository->find($id);

        if (empty($category)) {
            Flash::error('Tienda no encontrada');

            return redirect(route('markets.index'));
        }

        return view('markets.edit')->with('category', $category);
    }

    /**
     * Update the specified Category in storage.
     *
     * @param int $id
     * @param UpdateMarketRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMarketRequest $request)
    {
        $category = $this->marketRepository->find($id);

        if (empty($category)) {
            Flash::error('Tienda no encontrada');

            return redirect(route('markets.index'));
        }

        $category = $this->marketRepository->update($request->all(), $id);

        Flash::success('Tienda actualizada correctamente.');

        return redirect(route('markets.index'));
    }

    /**
     * Remove the specified Category from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $category = $this->marketRepository->find($id);

        if (empty($category)) {
            Flash::error('Tienda no encontrada');

            return redirect(route('markets.index'));
        }

        $this->marketRepository->delete($id);

        Flash::success('Tienda eliminada correctamente.');

        return redirect(route('markets.index'));
    }
}
