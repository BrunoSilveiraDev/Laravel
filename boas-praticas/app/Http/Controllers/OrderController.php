<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Repositories\OrderRepositoryEloquent;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    public function index()
    {
        // dd('teste');
        //$orders = Order::all();
        // pegando dos scopes, verificando qual é o scope pelo request
        $orders = Order::where(function($query){
            if(!empty(request()->get('status')))
                $query->status(request()->get('status'));
            if(request()->get('paid') == 1)
                $query->paid();
        })->get();


        //funciona mas não é tão boa prática...
        // if(request()->get('status'))
        // {
        //     switch(request()->get('status'))
        //     {
        //         case 'pending':
        //             $orders = $orders->where('status', 'pending');
        //         break;

        //         case 'delivered':
        //             $orders = $orders->where('status', 'delivered');
        //         break;
        //     }
        // }

        // if(request()->get('paid') == 1)
        // {
        //     $orders = $orders->where('paid', 1);
        // }

        return view('dashboard.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('dashboard.orders.create');
    }

    public function store(OrderRequest $request)
    {
        // dd($request->all());

        $order = Order::create($request->all());
        dd($order);
    }

    public function all(OrderRepository $repository)
    {
        //  ao invés de usar direto o Eloquent, uso o respository
        // return Order::all();
        return $repository->listAll();
    }
}
