<?php


namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $services = Service::when($search, function ($query) use ($search) {

    $query->where('title', 'like', '%' . $search . '%');

})->paginate(6);

    return view('services.index', compact('services'));
}

    public function show(Service $service)
{
    return view('services.show', compact('service'));
}

    public function create()
{
    return view('services.create');
}

   public function store(Request $request)
{
    $validated = $request->validate([

        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

        'icon' => 'required|max:10',

        'title' => 'required|max:255',

        'description' => 'required',

    ]);

    if ($request->hasFile('image')) {

        $validated['image'] = $request
            ->file('image')
            ->store('services', 'public');

    }

    Service::create($validated);

    return redirect()
        ->route('services.index')
        ->with('success', 'Jasa berhasil ditambahkan!');
}

    public function edit(Service $service)
{
    return view('services.edit', compact('service'));
}

    public function update(Request $request, Service $service)
{
    $validated = $request->validate([
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'icon' => 'required|max:10',
        'title' => 'required|max:255',
        'description' => 'required',
    ]);
    
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $validated['image'] = $request
            ->file('image')
            ->store('services', 'public');
    }

    $service->update($validated);

    return redirect()
        ->route('services.show', $service)
        ->with('success', 'Jasa berhasil diperbarui!');
}

    public function destroy(Service $service)
{
    if ($service->image) {
        Storage::disk('public')->delete($service->image);
    }

    $service->delete();

    return redirect()
        ->route('services.index')
        ->with('success', 'Jasa berhasil dihapus.');
}

}