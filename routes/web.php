<?php
//approval (EO)
Route::get('/eo/approve_book', function () {
    return view('pages.eo_approv_book');
});
Route::get('/eo/approve_book/details', function () {
    return view('pages.eo_approv_bookdet');
});
//*User
Route::get('/user/approve_book', function () {
    return view('pages.user_approv_book');
});
Route::get('/user/approve_book/details', function () {
    return view('pages.user_approv_bookdet');
});


// halaman dashboard
Route::get('/dashboard', 'DashboardController@index');
Route::get('/chrt', function () {
    return view('pages.hula');
});
// Route::get('/dash_users', function () {
//     return view('pages.dashpage_user');
// });
// Route::get('/dash_eos', function () {
//     return view('pages.dashpage_eo');
// });
// Route::get('/dash_pakets', function () {
//     return view('pages.dashpage_paket');
// });
// Route::get('/dash_bookings', function () {
//     return view('pages.dashpage_booking');
// });
// Route::get('/dash_transacts', function () {
//     return view('pages.dashpage_transact');
// });
// Route::get('/dash_charts', function () {
//     return view('pages.dashpage_charts');
// });
//end dashboard section

//login/egister non modals
Route::get('/login', function () {
    return view('pages.login_page');
});
Route::get('/register', function () {
    return view('pages.register_page');
});
Route::get('/regist_eo', function () {
    return view('pages.register_eo');
});
//end section

//NOTIF USER dan EO
Route::get('/eo/notif', function () {
    return view('pages.eo_notification');
});
Route::get('/eo/notif/more', function () {
    return view('pages.eo_notif_detail');
});
Route::get('/user/notif', function () {
    return view('pages.user_notification');
});
Route::get('/user/notif/more', function () {
    return view('pages.user_notif_detail');
});

//MTD PAYMENT USER
Route::get('/user/payments', function () {
    return view('pages.user_mtd_payment');
});
Route::get('/kokom', function () {
    return view('pages.komplete');
});

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/edit_user', function () {
    return view('pages.user_editprofile');
});
Route::get('/request', function () {
    return view('pages.user_transact');
});

Route::get('/edit_eo', function () {
    return view('pages.eo_editprofile');
});

Route::get('/eo_profile', function () {
    return view('pages.eo_profile');
});

Route::get('/store', function () {
    return view('pages.eo_profile');
});

Route::get('/form', function () {
    return view('pages.form');
});

Route::post('/registereo', 'UserController@store_eo');
Route::post('/form_paket', 'TransactionController@store_transactions');
Route::get('/ambil_paket/{idpaket}', 'TransactionController@index_paket');

// LOGIN, REGISTER, LOGOUT
Route::group(['middleware' => 'web'], function () {
    Route::post('/register', 'UserController@store');
    Route::post('/login', 'UserController@login');
    Route::get('/logout', 'UserController@logout');
    Route::get('/', 'UserController@index');
});

//PAKET
Route::get('/paket','PaketController@index');
Route::post('/insert','PaketController@store');
Route::get('/paket_edit/{id}','PaketController@edit');
Route::post('/update/{id}','PaketController@update');
Route::get('/hapus_paket/{id}','PaketController@destroy');
Route::get('/detail_paket/{id}','PaketController@index_detail');
Route::resource('pakets', 'PaketController');

//SEARCHING
Route::post('/search', 'PaketController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
