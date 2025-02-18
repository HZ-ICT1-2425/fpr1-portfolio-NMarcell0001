<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // Fetch all FAQs from the database
        $faqs = Faq::all(); // You can adjust this to use pagination if needed

        // Pass the FAQs to the view
        return view('faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Create a new FAQ record
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        // Redirect to the FAQ index page with a success message
        return redirect()->route('faq.index')->with('success', 'FAQ created successfully!');
    }

    public function edit(Faq $faq)
    {
        return view('faq.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        // Validate the input
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Update the FAQ record
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        // Redirect to the FAQ index page with a success message
        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully!');
    }

    public function destroy(Faq $faq)
    {
        // Delete the FAQ record
        $faq->delete();

        // Redirect to the FAQ index page with a success message
        return redirect()->route('faq.index')->with('success', 'FAQ deleted successfully!');
    }
}
