<?php
namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller {
    public function index() {
        $reviews = Review::where('is_approved',true)->with(['user','field'])->latest()->get();
        return view('ulasan', compact('reviews'));
    }
    public function store(Request $request) {
        $request->validate(['field_id'=>'required|exists:fields,id','rating'=>'required|integer|min:1|max:5','comment'=>'required']);
        Review::create(['user_id'=>Auth::id(),'field_id'=>$request->field_id,'rating'=>$request->rating,'comment'=>$request->comment,'is_approved'=>true]);
        return back()->with('success','Ulasan ditambahkan');
    }
}