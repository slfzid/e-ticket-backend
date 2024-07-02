<?php

// app/Http/Controllers/TicketController.php
namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Category;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with('user', 'category')->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('tickets.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Ticket::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'subject' => $request->subject,
            'description' => $request->description,
            'status' => 'open',
            'priority' => 'medium',
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function edit(Ticket $ticket)
    {
        $categories = Category::all();
        return view('tickets.edit', compact('ticket', 'categories'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $ticket->update([
            'category_id' => $request->category_id,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        return redirect()->route('tickets.show', $ticket->id)->with('success', 'Ticket updated successfully.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
    }
}