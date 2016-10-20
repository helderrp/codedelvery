<?php
/**
 * Created by PhpStorm.
 * User: helder
 * Date: 20/10/16
 * Time: 10:06
 */

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function __construct(OrderRepository $orderRepository)
    {
        $this->repository = $orderRepository;
    }

    public function index()
    {
        $orders = $this->repository->paginate();
        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id, UserRepository $userRepository)
    {

        $list_status = [0 => 'Pendente', 1 => 'A caminho', 2 => 'Entregue', 3=>'Cancelado'];
        $deliveryman = $userRepository->getDeliverymen();
        $order = $this->repository->find($id);
        return view('admin.orders.edit', compact('order', 'list_status', 'deliveryman'));
    }

    public function update(Request $request, $id)
    {
        $all = $request->all();
        $this->repository->update($all, $id);
        return redirect()->route('admin.orders.index');
    }
}