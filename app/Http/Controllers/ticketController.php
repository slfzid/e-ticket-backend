<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class ticketController extends Controller
{
    public function createTicketPost(Request $request)
    {
        $ticket = new ticket();

        $ticket->status = "Issued";
        $ticket->layanan = $request->layanan;
        $ticket->kategori = $request->kategori;
        $ticket->judul = $request->judul;
        $ticket->keterangan = Hash::make($request->keterangan);
        $ticket->file = "-";
        $ticket->save();

        return redirect('pengaduan')->with('success', 'Ticket successfully sent');
    }
}
