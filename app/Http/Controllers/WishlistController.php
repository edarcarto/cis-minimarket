<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use App\Repositories\WishlistRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WishlistController extends AppBaseController
{
    /** @var  wishlistRepository */
    private $wishlistRepository;

    public function __construct(wishlistRepository $wishlistRepo)
    {
        $this->wishlistRepository = $wishlistRepo;
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
        $wishlists = $this->wishlistRepository->paginate(10);

        return view('wishlists.index')
            ->with('wishlists', $wishlists);
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return Response
     */
    public function create()
    {
        return view('wishlists.create');
    }

    /**
     * Store a newly created Category in storage.
     *
     * @param CreateCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        $input = $request->all();

        $wishlists = $this->wishlistRepository->create($input);

        Flash::success('Lista de deseos guardada correctamente.');

        return redirect(route('wishlists.index'));
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
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            Flash::error('Lista de deseos no encontrada');

            return redirect(route('wishlists.index'));
        }

        return view('wishlists.show')->with('wishlist', $wishlist);
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
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            Flash::error('Lista de deseos no encontrada');

            return redirect(route('wishlists.index'));
        }

        return view('wishlists.edit')->with('wishlist', $wishlist);
    }

    /**
     * Update the specified Category in storage.
     *
     * @param int $id
     * @param UpdateCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryRequest $request)
    {
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            Flash::error('Lista de deseos no encontrada');

            return redirect(route('wishlists.index'));
        }

        $wishlist = $this->wishlistRepository->update($request->all(), $id);

        Flash::success('Lista de deseos actualizada correctamente.');

        return redirect(route('wishlists.index'));
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
        $wishlist = $this->wishlistRepository->find($id);

        if (empty($wishlist)) {
            Flash::error('Lista de deseos no encontrada');

            return redirect(route('wishlists.index'));
        }

        $this->wishlistRepository->delete($id);

        Flash::success('Lista de deseos eliminada correctamente.');

        return redirect(route('wishlists.index'));
    }
}
