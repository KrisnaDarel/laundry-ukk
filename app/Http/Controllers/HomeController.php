<?php

namespace App\Http\Controllers;

use App\User;
use App\Paket;
use App\Member;
use App\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $member = Member::all();
        $paket = Paket::all();
        $transaksi = Transaksi::all();

        $transaksiPaid = Transaksi::where('dibayar', 'dibayar')->get();

        // return view('home', compact('widget'), [
        //     'transaksiPaid' => $transaksiPaid
        // ]);

        return view('home', compact(
            'users', 
            'member', 
            'paket', 
            'transaksi', 
            'transaksiPaid', 
            )) ;
    }

    public function cariTgl(Request $request){

        $users = User::all();
        $member = Member::all();
        $paket = Paket::all();
        $transaksi = Transaksi::all();

        // $widget = [
        //     'users' => $users,
        //     'member' => $member,
        //     'paket' => $paket,
        //     'transaksi' => $transaksi
        //     //...
        // ];
        $transaksiPaid = Transaksi::where('dibayar', 'dibayar')->get();

        $from = $request->from . ' ' . '00:00:00';
        $to = $request->to . ' ' . '23:59:59';

        $transaksi = Transaksi::whereBetween('tgl_bayar', [$from, $to])->get();

        return view('home', compact(
            'users', 
            'member', 
            'paket', 
            'transaksi', 
            'transaksiPaid', 
            'from',
            'to'
            )) ;

        // return view('home', ['trx' => $trx, 'from' => $from, 'to' => $to]);
    }

    public function generateData() {

        
    }
}
