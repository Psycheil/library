<?php

use App\Models\Book;
use App\Models\Borrowing;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$modules = [
    'books' => [
        'title' => 'Books',
        'singular' => 'Book',
        'model' => Book::class,
        'fields' => [
            'title' => 'Title',
            'author' => 'Author',
            'category' => 'Category',
        ],
    ],
    'members' => [
        'title' => 'Members',
        'singular' => 'Member',
        'model' => Member::class,
        'fields' => [
            'name' => 'Name',
            'email' => 'Email',
            'contact' => 'Contact Number',
        ],
    ],
    'borrowings' => [
        'title' => 'Borrowed Books',
        'singular' => 'Borrowing',
        'model' => Borrowing::class,
        'fields' => [
            'book_title' => 'Book Title',
            'member_name' => 'Member Name',
            'due_date' => 'Due Date',
        ],
    ],
];

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string', 'min:6'],
    ]);

    return redirect()->route('dashboard');
})->name('login.store');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email'],
        'password' => ['required', 'string', 'min:6', 'confirmed'],
    ]);

    return redirect()->route('dashboard');
})->name('register.store');

Route::get('/dashboard', function () use ($modules) {
    $books = Book::count();
    $members = Member::count();
    $borrowings = Borrowing::count();

    return view('dashboard', [
        'cards' => [
            ['label' => 'Total Books', 'value' => $books],
            ['label' => 'Total Members', 'value' => $members],
            ['label' => 'Total Borrowed Books', 'value' => $borrowings],
        ],
        'modules' => $modules,
    ]);
})->name('dashboard');

foreach ($modules as $moduleKey => $moduleConfig) {
    Route::get("/{$moduleKey}", function () use ($moduleKey, $moduleConfig) {
        $modelClass = $moduleConfig['model'];
        $items = $modelClass::query()
            ->latest('id')
            ->get()
            ->map(function ($item) {
                return $item->toArray();
            })
            ->all();

        return view('crud.index', [
            'moduleKey' => $moduleKey,
            'module' => $moduleConfig,
            'items' => $items,
        ]);
    })->name("{$moduleKey}.index");

    Route::get("/{$moduleKey}/create", function () use ($moduleKey, $moduleConfig) {
        return view('crud.form', [
            'moduleKey' => $moduleKey,
            'module' => $moduleConfig,
            'item' => null,
            'formAction' => route("{$moduleKey}.store"),
            'formMethod' => 'POST',
            'submitLabel' => "Create {$moduleConfig['singular']}",
        ]);
    })->name("{$moduleKey}.create");

    Route::post("/{$moduleKey}", function (Request $request) use ($moduleKey, $moduleConfig) {
        $rules = [];
        foreach (array_keys($moduleConfig['fields']) as $field) {
            $rules[$field] = ['required', 'string', 'max:255'];
        }
        $validated = $request->validate($rules);
        $modelClass = $moduleConfig['model'];

        $modelClass::create($validated);

        return redirect()->route("{$moduleKey}.index")->with('status', "{$moduleConfig['singular']} created.");
    })->name("{$moduleKey}.store");

    Route::get("/{$moduleKey}/{id}/edit", function (string $id) use ($moduleKey, $moduleConfig) {
        $modelClass = $moduleConfig['model'];
        $item = $modelClass::findOrFail($id)->toArray();

        return view('crud.form', [
            'moduleKey' => $moduleKey,
            'module' => $moduleConfig,
            'item' => $item,
            'formAction' => route("{$moduleKey}.update", $id),
            'formMethod' => 'PUT',
            'submitLabel' => "Update {$moduleConfig['singular']}",
        ]);
    })->name("{$moduleKey}.edit");

    Route::put("/{$moduleKey}/{id}", function (Request $request, string $id) use ($moduleKey, $moduleConfig) {
        $rules = [];
        foreach (array_keys($moduleConfig['fields']) as $field) {
            $rules[$field] = ['required', 'string', 'max:255'];
        }
        $validated = $request->validate($rules);
        $modelClass = $moduleConfig['model'];

        $modelClass::findOrFail($id)->update($validated);

        return redirect()->route("{$moduleKey}.index")->with('status', "{$moduleConfig['singular']} updated.");
    })->name("{$moduleKey}.update");

    Route::delete("/{$moduleKey}/{id}", function (string $id) use ($moduleKey, $moduleConfig) {
        $modelClass = $moduleConfig['model'];
        $modelClass::findOrFail($id)->delete();

        return redirect()->route("{$moduleKey}.index")->with('status', "{$moduleConfig['singular']} deleted.");
    })->name("{$moduleKey}.destroy");
}
