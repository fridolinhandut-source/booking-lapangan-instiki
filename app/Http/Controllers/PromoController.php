<?php
namespace App\Http\Controllers;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller {
    public function index() {
        $promos = Promo::where('is_active',true)->where('valid_until','>=',now())->get();
        return view('promo', compact('promos'));
    }
    public function store(Request $request) {
        $request->validate(['title'=>'required','code'=>'required|unique:promos','description'=>'required','discount_percentage'=>'required|integer','valid_until'=>'required|date']);
        Promo::create($request->all());
        return back()->with('success','Promo ditambahkan');
    }
}