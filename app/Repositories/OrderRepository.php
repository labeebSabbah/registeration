<?php 

namespace App\Repositories;

use App\Models\Order;
use App\Interfaces\OrderRepositoryInterface;
use App\http\Requests\StoreOrderRequest;
use Illuminate\Http\Request;

class OrderRepository implements OrderRepositoryInterface
{
    public function index()
    {
        $orders = Order::where("completed", "0")->get();
        return view('index', compact('orders'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(StoreOrderRequest $request)
    {
        $data = $request->validated();
        $data["created_at"] = date("Y-m-d");
        $data["amount"] = strtr($data["amount"], array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
        $data["phone"] = strtr($data["phone"], array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
        $order = Order::create($data);
        return view('show', compact('order'));
    }

    public function show(Request $request)
    {
        $order = Order::where('id', $request->id)
            ->where('name', $request->name)
            ->firstOrFail();
        return view('show', compact('order'));
    }

    public function search()
    {
        return view("search");
    }

    public function update($id)
    {
        $order = Order::findOrFail($id);
        $order->update([
            "completed" => true
        ]);
        $order->save();

        return redirect()->route('admin');
    }

}