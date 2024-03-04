<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ticketController extends Controller
{
    public function createTicketPost(Request $request)
    {
        $ticket = new ticket();

        $ticket->kategori = $request->kategori;
        $ticket->prioritas = "1";
        $ticket->judul = $request->judul;
        $ticket->pesan = Hash::make($request->pesan);

        $ticket->save();

        return redirect('pengaduan')->with('success', 'Ticket successfully sent');
    }
}
