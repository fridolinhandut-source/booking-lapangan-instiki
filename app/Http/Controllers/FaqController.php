<?php
namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller {
    public function index() {
        $faqs = Faq::where('is_active',true)->orderBy('order')->get();
        return view('bantuan', compact('faqs'));
    }
    public function store(Request $request) {
        $request->validate(['question'=>'required','answer'=>'required']);
        Faq::create(['question'=>$request->question,'answer'=>$request->answer,'order'=>Faq::max('order')+1]);
        return back()->with('success','FAQ ditambahkan');
    }
    public function destroy($id) {
        Faq::destroy($id);
        return back()->with('success','FAQ dihapus');
    }
}