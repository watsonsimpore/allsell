<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->get()->take(20);
        $totalSales = Order::where('status','delivered')->count();
        $totalRevenues = Order::where('status','delivered')->sum('total',);
        $todaySales = Order::where('status','delivered')->whereDate('created_at',Carbon::today())->count();
        $todayRevenues = Order::where('status','delivered')->whereDate('created_at',Carbon::today())->sum('total',);
        return view('livewire.admin.admin-dashboard-component',[
            'orders' => $orders,
            'totalSales' => $totalSales,
            'totalRevenues' => $totalRevenues,
            'todaySales' => $todaySales,
            'todayRevenues' => $todayRevenues
        ])->layout('layouts.base');
    }
}
