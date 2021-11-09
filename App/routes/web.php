<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Contact\IndexController as ContactIndexController;
use App\Http\Controllers\Dashboard\CreateArticleController;
use App\Http\Controllers\Dashboard\CreateProductController;
use App\Http\Controllers\Dashboard\IndexController as DashboardIndexController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Header\HeaderController;
use App\Http\Controllers\Home\IndexController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Nieuws\CreateController;
use App\Http\Controllers\Nieuws\IndexController as NieuwsIndexController;
use App\Http\Controllers\Over\IndexController as OverIndexController;
use App\Http\Controllers\Privacy\PrivacyController;
use App\Http\Controllers\Shop\IndexController as ShopIndexController;
use App\Http\Controllers\Sponsors\IndexController as SponsorsIndexController;
use App\Models\Post;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\ComparisonMethodDoesNotDeclareBoolReturnTypeException;

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

//main routing

Route::get('/' , IndexController::class)->name('home');
Route::get('home', IndexController::class)->name('home');

Route::get('/privacy', PrivacyController::class)->name('privacy');

Route::prefix('/over')
        ->name('over.')
        ->group(function() {
            Route::get('/', OverIndexController::class)->name('index');
        });

Route::prefix('/sponsors')
        ->name('sponsors.')
        ->group(function() {
            Route::get('/', SponsorsIndexController::class)->name('index');
        });

Route::prefix('/nieuws')
        ->name('nieuws.')
        ->group(function() {
            Route::get('/', NieuwsIndexController::class)->name('index');
            Route::get('/{post:slug}', function(Post $post) {
                return view('pages.nieuws.nieuwsdetail', [
                    'post' => $post
                ]);
            });

        });


Route::prefix('/shop')
        ->name('shop.')
        ->group(function() {
            Route::get('/', ShopIndexController::class)->name('index');
        });



Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact');

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');


Route::get('newsletter',[NewsletterController::class, 'index']);
Route::post('newsletter/store',[NewsletterController::class, 'store']);




Route::get('/test', function(){
    return view('test');
});
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin dashboard routing
Route::prefix('dashboard')->as('dashboard.')->group(function(){
    Route::middleware(['auth'])->group(function(){
        Route::get('/', DashboardIndexController::class)->name('index');

        Route::get('/orders', [OrderController::class, 'orderview'])-> name('order');

        //nieuwsberichten
        Route::get('/create', [CreateArticleController::class, 'index'])->name('create');
        Route::post('/create', [CreateArticleController::class, 'new'])->name('createnew');

        Route::get('/edit/{id}', [CreateArticleController::class, 'Editview'])->name('editview');
        Route::post('/edit/{id}', [CreateArticleController::class, 'Edit'])->name(('edit'));

        Route::get('/delete/{id}', [CreateArticleController::class, 'Delete'])->name('delete');



        //webshop
        Route::get('/createproduct', [CreateProductController::class, 'index'])->name('createproduct');
        Route::post('/createproduct', [CreateProductController::class, 'newProduct'])->name('createnewproduct');

        Route::get('/editproduct/{id}', [CreateProductController::class, 'editView'])->name(('editproductview'));
        Route::post('/editproduct/{id}', [CreateProductController::class, 'editProduct'])->name(('editproduct'));

        Route::get('/deleteproduct/{id}', [CreateProductController::class, 'deleteProduct'])->name('deleteProduct');
    });
});


//betaling
Route::get('checkout/{id}',[CheckoutController::class, 'checkout'])->name('checkout');
Route::post('checkout', [CheckoutController::class, 'afterpayment'] )->name('checkout.credit-card');
Route::get('checkout/form/{id}', [CheckoutController::class, 'form'])->name('checkoutform');
Route::post('checkout/form/{id}', [CheckoutController::class, 'formdata'])->name('formdata');


require __DIR__.'/auth.php';
