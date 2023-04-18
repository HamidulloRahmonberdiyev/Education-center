<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminCommentController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminJoinCourseControler;
use App\Http\Controllers\AdminLanguageController;
use App\Http\Controllers\AdminNewController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AdminTeacherController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminVideoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinCourseController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LANGUAGE ROUTES

Route::get('language/{locale}', [LanguageController::class, 'change_locale'])->name('locale.change');



// FRONTEND ROUTES

# Page Main
Route::get('/', [MainController::class, 'main'])->name('main');

# Page Search
Route::get('search', [SearchController::class, 'search'])->name('search');

# Page About
Route::get('/about', [PostController::class, 'about'])->name('about');
Route::get('/about/viewAll', [PostController::class, 'viewAll'])->name('viewAll');
Route::get('/about/{post}/show', [PostController::class, 'show'])->name('about.show');

# Page News
Route::get('/news', [NewController::class, 'news'])->name('front.news');
Route::get('/news/{new}/show', [NewController::class, 'show'])->name('front.news.show');
Route::get('/tags/{tag}/tag', [TagController::class, 'tag'])->name('front.tags.tag');

# Page Courses
Route::get('/courses', [CourseController::class, 'courses'])->name('front.courses');
Route::get('/courses/{course}/show', [CourseController::class, 'show'])->name('front.courses.show');

# Page Languages
Route::get('/languages', [LanguageController::class, 'languages'])->name('front.languages');
Route::get('/languages/{language}/show', [LanguageController::class, 'show'])->name('front.languages.show');
Route::get('/categories/{category}/category', [CategoryController::class, 'category'])->name('front.categories.category');

# Page Courses
Route::get('/videos', [VideoController::class, 'videos'])->name('front.videos');
Route::get('/videos/{video}/download', [VideoController::class, 'download'])->name('front.videos.download');

# Page Contact
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

# Route Comment
Route::post('/comments', [CommentController::class, 'comments_store'])->name('front.comments.store');

# Route JoinCourse
Route::post('/joincourses', [JoinCourseController::class, 'joincourses'])->name('front.joincourses.store');




// BACKEND ROUTES

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    # Admin Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    # Admin Page Posts   
    Route::resource('/posts', AdminPostController::class); 
    
    # Admin Page Teachers   
    Route::resource('/teachers', AdminTeacherController::class);
    
    # Admin Page Categories   
    Route::resource('/categories', AdminCategoryController::class);

    # Admin Page Tags   
    Route::resource('/tags', AdminTagController::class);

    # Admin Page Languages   
    Route::resource('/languages', AdminLanguageController::class);

    # Admin Page Courses   
    Route::resource('/courses', AdminCourseController::class);

    # Admin Page News   
    Route::resource('/news', AdminNewController::class);

    # Admin Page Videos   
    Route::resource('/videos', AdminVideoController::class);

    # Admin Page Comments   
    Route::resource('/comments', AdminCommentController::class);

    # Admin Page Users   
    Route::resource('/users', AdminUserController::class);

    # Admin Page Role   
    Route::resource('/roles', AdminRoleController::class);

    # Admin Page Joincourse
    Route::resource('/joincourses', AdminJoinCourseControler::class);

});


