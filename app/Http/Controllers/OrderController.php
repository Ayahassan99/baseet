<?php

namespace App\Http\Controllers;

use App\Helpers\helpers;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    private $order_statuses = [
      'pending' => 'معلق',
      'ongoing' => 'جاري',
      'done' => "مكتمل",
      'canceled' => "ملغي"
    ];
    public function create(Request $request) {
        $newOrder = $request->all();
        $newOrder['userid'] = auth()->user()->id;
        Order::create($newOrder);
        return redirect()->route("user.orders.index");
    }
    public function index() {
        $userId = Auth::guard("worker")->check() ? Auth::guard("worker")->user()->id : auth()->user()->id;
        $orders = Order::where('userid', $userId)->get();
        $services = helpers::getServicesAsAssociative();
        for ($i = 0; $i < count($orders); $i++) {
            $orders[$i]->username = Auth::guard("worker")->check() ? $orders[$i]->user->name : $orders[$i]->worker->name;
            $orders[$i]->service = $services[$orders[$i]->worker->service];
            $orders[$i]->status = $this->order_statuses[$orders[$i]->status];
        }
        return view("orders.list")->with(["orders"=>$orders]);
    }
    public function list() {
        $orders = Order::all();
        $services = helpers::getServicesAsAssociative();
        for ($i = 0; $i < count($orders); $i++) {
            $orders[$i]->service = $services[$orders[$i]->worker->service];
            $orders[$i]->status = $this->order_statuses[$orders[$i]->status];
        }
        return view("dashboard.admin.order")->with(["orders"=>$orders]);
    }
    public function show($id) {
        $order = Order::where('id', $id)->first();
        $order->username = Auth::guard("worker")->check() ? $order->user->name : $order->worker->name;
        $order->statusText = $this->order_statuses[$order->status];
        return view("orders.show")->with(["order"=>$order]);
    }
    public function update_status(Request $request, Order $order) {
        $order->status = $request->get('status');
        $order->save();
        $return_path = auth()->guard('worker')->check() ? 'worker.order.show' : 'user.order.show';
        return redirect()->route($return_path, $order->id);
    }
    public function finish_order(Request $request, Order $order) {
        $order->status = 'done';
        $order->number_of_hours = $request->get('number_of_hours');
        $order->price = $request->get('price');
        $review = new Review();
        $review->text = $request->get('review');
        $review->rating = $request->get('rating');
        $review->orderid = $order->id;
        $review->save();
        $order->save();
        $return_path = auth()->guard('worker')->check() ? 'worker.order.show' : 'user.order.show';
        return redirect()->route($return_path, $order->id);
    }
}
