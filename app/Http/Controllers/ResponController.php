<?php
// app/Http/Controllers/ResponController.php
namespace App\Http\Controllers;

use App\Models\Respon;
use Illuminate\Http\Request;

class ResponController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'ticket_id' => 'required|exists:tickets,id',
            'response' => 'required|string',
        ]);

        Respon::create([
            'ticket_id' => $request->ticket_id,
            'user_id' => auth()->id(),
            'response' => $request->response,
        ]);

        return back()->with('success', 'Response added successfully.');
    }

    public function destroy(Respon $respon)
    {
        $respon->delete();
        return back()->with('success', 'Response deleted successfully.');
    }
}
