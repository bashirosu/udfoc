<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ExamsTypeController;
use App\Http\Controllers\ResultSearchController;
use App\Http\Controllers\StudentYearController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\StudentExamsController;
use App\Http\Controllers\StudentGroupController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tables', function () {
    return view('backend.table');
});
Route::get('/', function () {
    return view('backend.index');
});

Route::get('/search', function () {
    return view('backend.search.search');
});
//Route::get('/', [StudentController::class, 'index'])->name('index');


Route::get('/search2', function () {
    return view('search.start_search');
});


Route::get('student-list', [StudentController::class, 'index'])->name('index');
Route::get('add-student', [StudentController::class, 'addStudent']);
Route::get('edit-student/{id}', [StudentController::class, 'editStudent']);
Route::get('delete-student/{id}', [StudentController::class, 'deleteStudent']);

Route::post('save-student', [StudentController::class, 'saveStudent']);
Route::post('update-student', [StudentController::class, 'updateStudent']);



Route::get('/student/year/view', [StudentYearController::class, 'ViewYear'])->name('student.year.view');
Route::get('/student/year/add', [StudentYearController::class, 'AddYear'])->name('student.year.add');
Route::get('/student/year/store', [StudentYearController::class, 'StoreYear'])->name('student.year.store');
Route::get('/student/year/edit/{id}', [StudentYearController::class, 'EditYear'])->name('student.year.edit');
Route::post('student/year/update/{id}', [StudentYearController::class, 'UpdateYear'])->name('update.student.year');

Route::get('/student/class/view', [StudentClassController::class, 'ViewClass'])->name('student.class.view');
Route::get('/student/class/add', [StudentClassController::class, 'AddClass'])->name('student.class.add');
Route::get('/student/class/store', [StudentClassController::class, 'StoreClass'])->name('student.class.store');
Route::get('student/class/edit/{id}', [StudentClassController::class, 'EditClass'])->name('student.class.edit');
Route::post('student/class/update/{id}', [StudentClassController::class, 'UpdateClass'])->name('update.student.class');


Route::get('/group/view', [StudentGroupController::class, 'ViewGroup'])->name('student.group.view');
Route::get('/group/add', [StudentGroupController::class, 'AddGroup'])->name('student.group.add');
Route::get('/group/store', [StudentGroupController::class, 'StoreGroup'])->name('student.group.store');
Route::get('/group/edit/{id}', [StudentGroupController::class, 'editGroup'])->name('student.group.edit');
Route::post('/group/update/{id}', [StudentGroupController::class, 'updateGroup'])->name('student.group.update');


Route::get('/subject/view', [SubjectController::class, 'ViewSubject'])->name('school.subject.view');
Route::get('/subject/add', [SubjectController::class, 'AddSubject'])->name('school.subject.add');
Route::get('/subject/store', [SubjectController::class, 'StoreSubject'])->name('school.subject.store');
Route::get('/subject/edit/{id}', [SubjectController::class, 'editSubject'])->name('school.subject.edit');
Route::post('/subject/update/{id}', [SubjectController::class, 'updateSubject'])->name('school.subject.update');

Route::get('/exam/type/view', [ExamsTypeController::class, 'ViewExamType'])->name('exam.type.view');
Route::get('/exam/type/add', [ExamsTypeController::class, 'AddExamType'])->name('exam.type.add');
Route::get('/exam/type/store', [ExamsTypeController::class, 'StoreExamType'])->name('exam.type.store');
Route::get('/exam/type/edit/{id}', [ExamsTypeController::class, 'editExamType'])->name('exam.type.edit');
Route::post('/exam/type/update/{id}', [ExamsTypeController::class, 'updateExamType'])->name('exam.type.update');




Route::get('/student/exams/view', [StudentExamsController::class, 'ViewStudentList'])->name('student.exams.view');
Route::get('student/exams/register/{id}', [StudentExamsController::class, 'registerStudentExams'])->name('student.exams.register');
Route::post('/student/exams/store/{id}', [StudentExamsController::class, 'saveStudentExams'])->name('save.exams.result');
Route::get('/student/exams/pdf/{id}', [StudentExamsController::class, 'printPdf'])->name('print.exams.pdf');


Route::get('/student/registeredexams/view/{id}', [StudentExamsController::class, 'singleStudent'])->name('view.registered.result');

Route::get('search/direct/', [ResultSearchController::class, 'search'])->name('search');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
