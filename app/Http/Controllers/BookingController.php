<?php
namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Field;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller {
    public function index(Request $request) {
        $query = Booking::where('user_id', Auth::id())->with('field');
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }
        $bookings = $query->latest()->get();
        return view('pesan', compact('bookings'));
    }
    public function store(Request $request) {
        $request->validate(['field_id'=>'required|exists:fields,id','booking_date'=>'required|date','start_time'=>'required','duration'=>'required|integer|min:1']);
        $field = Field::findOrFail($request->field_id);
        Booking::create(['user_id'=>Auth::id(),'field_id'=>$request->field_id,'booking_date'=>$request->booking_date.' '.$request->start_time,'duration'=>$request->duration,'total_price'=>$field->price*$request->duration,'status'=>'pending','notes'=>$request->notes]);
        return redirect()->route('pesan')->with('success','Booking berhasil!');
    }
    public function cancel($id) {
        Booking::where('user_id',Auth::id())->findOrFail($id)->update(['status'=>'cancelled']);
        return back()->with('success','Booking dibatalkan');
    }
}