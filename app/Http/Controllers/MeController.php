<?php

namespace App\Http\Controllers;

// use App\Http\Requests\CreateCustomerRequest;
// use App\Http\Requests\UpdateCustomerRequest;
use App\Repositories\OrderRepository;
use App\Repositories\CustomerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MeController extends AppBaseController
{
    /** @var  OrderRepository */
    private $orderRepository;
    private $customerRepository;

    public function __construct(OrderRepository $orderRepo, CustomerRepository $custormerRepo)
    {
        $this->orderRepository = $orderRepo;
        $this->customerRepository = $custormerRepo;
    }

    public function index(Request $request)
    {
        $customer = $this->customerRepository->getForUser(\Auth::id());
        $orders = $this->orderRepository->getMyOrders($customer->id);

        return view('me.index')
            ->with('orders', $orders);
    }

    public function wishlist(Request $request)
    {
        // $customer = $this->customerRepository->getForUser(\Auth::id());
        // $orders = $this->orderRepository->getMyOrders();

        return view('me.wishlist');
            // ->with('orders', $orders);
    }
}
