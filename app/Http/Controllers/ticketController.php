<?php 
namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function create()
    {
        return view('create_ticket');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required|string|max:255',
            'keterangan' => 'required|string',
        ]);

        // Buat objek Ticket baru
        $ticket = new Ticket();

        // Isi atribut-atribut ticket
        $ticket->user_id = Auth::id(); // Mengambil ID pengguna yang sedang login
        $ticket->category_id = $request->kategori;
        $ticket->subject = $request->judul;
        $ticket->description = $request->keterangan;
        $ticket->status = 'open'; // Atur status secara default
        $ticket->priority = 'medium'; // Atur prioritas secara default

        // Simpan ticket ke dalam database
        $ticket->save();

        // Redirect ke halaman yang sesuai dengan peran pengguna
        if (Auth::user()->level == 'user') {
            return redirect('/pengaduan')->with('success', 'Pengaduan berhasil dibuat');
        } elseif (Auth::user()->level == 'admin') {
            return redirect('/admindashboard')->with('success', 'Pengaduan berhasil dibuat');
        }
    }

    public function findTicket(Request $request)
{
    $ticketId = $request->input('ticket_id');
    $ticket = Ticket::find($ticketId);

    if (!$ticket) {
        return redirect()->back()->with('error', 'Tiket tidak ditemukan.');
    }

    return view('user.cekpengaduan', compact('ticket'));
}


    public function getTickets()
    {
        $tickets = Ticket::all();

        return response()->json(['tickets' => $tickets]);
    }
}