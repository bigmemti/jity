<?php

use App\Models\User;
use App\Models\Field;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $fields = Field::all();
    $groups = Group::with(['time', 'week_day'])->withCount('users')->get();
    $users = User::all();
    return view('dashboard', ['fields' => $fields, 'groups' => $groups, 'users' => $users]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/form', function (Request $request) {
    $user = auth()->user();
    $user->fields()->sync($request->fields);
    $user->groups()->sync($request->groups);

    return to_route('dashboard');
})->name('form.submit');

require __DIR__.'/auth.php';
