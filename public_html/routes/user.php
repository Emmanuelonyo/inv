<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\User\ViewsController;
use App\Http\Controllers\User\WithdrawalController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\PaystackController;
use App\Http\Controllers\User\UserSubscriptionController;
use App\Http\Controllers\User\UserInvPlanController;
use App\Http\Controllers\User\VerifyController;
use App\Http\Controllers\User\SomeController;
use App\Http\Controllers\User\SocialLoginController;
use App\Http\Controllers\User\ExchangeController;
use App\Http\Controllers\User\FlutterwaveController;
use App\Http\Controllers\User\MembershipController;
use App\Http\Controllers\User\TransferController;
use App\Http\Controllers\User\VerificationCodeController;
use App\Http\Controllers\User\NotificationController;
use App\Http\Controllers\User\TradingController;
use Illuminate\Support\Facades\Route;

// Email verification routes
Route::get('/verify-email', 'App\Http\Controllers\User\UsersController@verifyemail')->middleware('auth')->name('verification.notice');

// New verification code routes
Route::middleware(['auth'])->group(function () {
	Route::get('/verify-code', [VerificationCodeController::class, 'show'])->name('verification.code');
	Route::post('/verify-code', [VerificationCodeController::class, 'verify'])->name('verification.verify-code');
	Route::post('/email/verification-code', [VerificationCodeController::class, 'send'])->name('verification.send-code');
});

// Comment out or remove the old verification route
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
//     return redirect('/dashboard');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// Modify this route to resend verification codes instead of links
Route::post('/email/verification-notification', function (Request $request) {
	$request->user()->sendEmailVerificationNotification();
	return back()->with('message', 'Verification code sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// Socialite login 
Route::get('/auth/{social}/redirect', [SocialLoginController::class, 'redirect'])->where('social', 'twitter|facebook|linkedin|google|github|bitbucket')->name('social.redirect');
Route::get('/auth/{social}/callback', [SocialLoginController::class, 'authenticate'])->where('social', 'twitter|facebook|linkedin|google|github|bitbucket')->name('social.callback');

Route::get('/ref/{id}', 'App\Http\Controllers\Controller@ref')->name('ref');

/*    Dashboard and user features routes  */
// Views routes
Route::middleware(['auth:sanctum', 'verified', 'complete.kyc'])->get('/dashboard', [ViewsController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->prefix('dashboard')->group(function () {

	// Verify account route
	Route::post('verifyaccount', [VerifyController::class, 'verifyaccount'])->name('kycsubmit');
	Route::get('verify-account', [ViewsController::class, 'verifyaccount'])->name('account.verify');
	Route::get('kyc-form', [ViewsController::class, 'verificationForm'])->name('kycform');
	Route::get('support', [ViewsController::class, 'support'])->name('support');

	Route::middleware('complete.kyc')->group(function () {
		Route::get('account-settings', [ViewsController::class, 'profile'])->name('profile');
		Route::get('accountdetails', [ViewsController::class, 'accountdetails'])->name('accountdetails');
		Route::get('notification', [ViewsController::class, 'notification'])->name('notification');

		Route::get('deposits', [ViewsController::class, 'deposits'])->name('deposits');
		Route::get('skip_account', [ViewsController::class, 'skip_account']);

		Route::get('tradinghistory', [ViewsController::class, 'tradinghistory'])->name('tradinghistory');
		Route::get('accounthistory', [ViewsController::class, 'accounthistory'])->name('accounthistory');
		Route::get('withdrawals', [ViewsController::class, 'withdrawals'])->name('withdrawalsdeposits')->middleware(['password.confirm']);
		Route::get('subtrade', [ViewsController::class, 'subtrade'])->name('subtrade');
		Route::get('buy-plan', [ViewsController::class, 'mplans'])->name('mplans');
		Route::get('myplans/{sort}', [ViewsController::class, 'myplans'])->name('myplans');
		Route::get('sort-plans/{sorttype}', [ViewsController::class, 'sortPlans'])->name('sortplans');

		Route::get('plan-details/{id}', [ViewsController::class, 'planDetails'])->name('plandetails');
		Route::get('cancel-plan/{id}', [UserInvPlanController::class, 'cancelPlan'])->name('cancelplan');

		Route::get('referuser', [ViewsController::class, 'referuser'])->name('referuser');


		Route::get('manage-account-security', [ViewsController::class, 'twofa'])->name('twofa');
		Route::get('transfer-funds', [ViewsController::class, 'transferview'])->name('transferview');

		// Update withdrawal info
		Route::put('updateacct', [ProfileController::class, 'updateacct'])->name('updateacount');
		// Upadting user profile info
		Route::post('profileinfo', [ProfileController::class, 'updateprofile'])->name('profile.update');
		// Update password
		Route::put('updatepass', [ProfileController::class, 'updatepass'])->name('updateuserpass');

		// Update emal preference
		Route::put('update-email-preference', [ProfileController::class, 'updateemail'])->name('updateemail');

		// Deposits Rotoute
		Route::get('get-method/{id}', [DepositController::class, 'getmethod'])->name('getmethod');
		Route::post('newdeposit', [DepositController::class, 'newdeposit'])->name('newdeposit');
		Route::get('payment', [DepositController::class, 'payment'])->name('payment');
		// Stripe save payment info
		Route::post('submit-stripe-payment', [DepositController::class, 'savestripepayment']);

		// Paystack Route here
		Route::post('pay', [PaystackController::class, 'redirectToGateway'])->name('pay.paystack');
		Route::get('paystackcallback', [PaystackController::class, 'handleGatewayCallback']);
		Route::post('savedeposit', [DepositController::class, 'savedeposit'])->name('savedeposit');

		// Flutterwave Routes here
		Route::post('/payviaflutterwave', [FlutterwaveController::class, 'initialize'])->name('paybyflutterwave');
		// The callback url after a payment
		Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');

		// Withdrawals
		Route::post('enter-amount', [WithdrawalController::class, 'withdrawamount'])->name('withdrawamount');
		Route::get('withdraw-funds', [WithdrawalController::class, 'withdrawfunds'])->name('withdrawfunds');
		Route::get('getotp', [WithdrawalController::class, 'getotp'])->name('getotp');
		Route::post('completewithdrawal', [WithdrawalController::class, 'completewithdrawal'])->name('completewithdrawal');

		// Subscription Trading
		Route::post('savemt4details', [UserSubscriptionController::class, 'savemt4details'])->name('savemt4details');
		Route::get('delsubtrade/{id}', [UserSubscriptionController::class, 'delsubtrade'])->name('delsubtrade');
		Route::get('renew/subscription/{id}', [UserSubscriptionController::class, 'renewSubscription'])->name('renewsub');

		// Investment, user buys plan
		Route::post('joinplan', [UserInvPlanController::class, 'joinplan'])->name('joinplan');

		Route::post('changetheme', [SomeController::class, 'changetheme'])->name('changetheme');

		Route::post('paypalverify/{amount}', 'App\Http\Controllers\Controller@paypalverify')->name('paypalverify');
		Route::get('cpay/{amount}/{coin}/{ui}/{msg}', 'App\Http\Controllers\Controller@cpay')->name('cpay');
		Route::get('asset-balance', [ExchangeController::class, 'assetview'])->name('assetbalance');
		Route::get('swap-history', [ExchangeController::class, 'history'])->name('swaphistory');

		Route::get('asset-price/{base}/{quote}/{amount}', [ExchangeController::class, 'getprice'])->name('getprice');
		Route::post('exchange', [ExchangeController::class, 'exchange'])->name('exchangenow');
		Route::get('balances/{coin}', [ExchangeController::class, 'getBalance'])->name('getbalance');

		// USer to User transfer
		Route::post('transfertouser', [TransferController::class, 'transfertouser'])->name('transfertouser');

		// binance crypto payments routes
		Route::get('/binance/success', [ViewsController::class, 'binanceSuccess'])->name('bsuccess');
		Route::get('/binance/error', [ViewsController::class, 'binanceError'])->name('berror');


		//membership route for user side
		Route::name('user.')->group(function () {
			Route::get('/courses', [MembershipController::class, 'courses'])->name('courses');
			Route::get('/course-details/{course}/{id}', [MembershipController::class, 'courseDetails'])->name('course.details');
			Route::post('/buy-course', [MembershipController::class, 'buyCourse'])->name('buycourse');
			Route::get('/my-courses', [MembershipController::class, 'myCourses'])->name('mycourses');
			Route::get('/course-details/{id}', [MembershipController::class, 'myCoursesDetails'])->name('mycoursedetails');
			Route::get('/learning/{lesson}/{course?}', [MembershipController::class, 'learning'])->name('learning');
		});

		//signals
		Route::get('/trade-signals', [ViewsController::class, 'tradeSignals'])->name('tsignals');
		Route::get('/renew-subscription', [TransferController::class, 'renewSignalSub'])->name('renewsignals');

		// Trading platform routes
		Route::get('trading', [TradingController::class, 'index'])->name('trading');
		Route::get('trading/crypto', [TradingController::class, 'crypto'])->name('trading.crypto');
		Route::get('trading/stocks', [TradingController::class, 'stocks'])->name('trading.stocks');
		Route::get('trading/crypto/{symbol}', [TradingController::class, 'showCrypto'])->name('trading.crypto.symbol');
		Route::get('trading/stocks/{symbol}', [TradingController::class, 'showStocks'])->name('trading.stocks.symbol');
		
		// Trading API endpoints for frontend
		Route::prefix('api/trading')->name('api.trading.')->group(function () {
			// Watchlist endpoints
			Route::get('watchlist', [TradingController::class, 'getWatchlist'])->name('watchlist');
			Route::post('watchlist/add', [TradingController::class, 'addToWatchlist'])->name('watchlist.add');
			Route::delete('watchlist/remove/{id}', [TradingController::class, 'removeFromWatchlist'])->name('watchlist.remove');
			
			// User preferences endpoints
			Route::get('preferences', [TradingController::class, 'getPreferences'])->name('preferences');
			Route::post('preferences', [TradingController::class, 'savePreferences'])->name('preferences.save');
			
			// Market data endpoints (proxy to external APIs)
			Route::get('market/crypto', [TradingController::class, 'getCryptoMarket'])->name('market.crypto');
			Route::get('market/stocks', [TradingController::class, 'getStockMarket'])->name('market.stocks');
			Route::get('symbol/crypto/{symbol}', [TradingController::class, 'getCryptoSymbol'])->name('symbol.crypto');
			Route::get('symbol/stocks/{symbol}', [TradingController::class, 'getStockSymbol'])->name('symbol.stocks');
			
			// New API endpoints for the crypto and stocks views
			Route::get('crypto/symbol', [TradingController::class, 'getCryptoSymbol'])->name('crypto.symbol');
			Route::get('crypto/candles', [TradingController::class, 'getCryptoCandles'])->name('crypto.candles');
			Route::get('crypto/top', [TradingController::class, 'getTopCryptos'])->name('crypto.top');
			Route::get('stocks/symbols', [TradingController::class, 'getStockSymbols'])->name('stocks.symbols');
			Route::get('stocks/quote/{symbol}', [TradingController::class, 'getStockQuoteFinnhub'])->name('stocks.quote');
			
			// Order endpoints
			Route::post('order/create', [TradingController::class, 'createOrder'])->name('order.create');
			Route::get('orders', [TradingController::class, 'getOrders'])->name('orders');
			Route::get('order/{id}', [TradingController::class, 'getOrder'])->name('order.show');
			Route::delete('order/{id}', [TradingController::class, 'cancelOrder'])->name('order.cancel');
		});

		// Notification routes
		Route::get('notifications', [NotificationController::class, 'index'])->name('notifications');
		Route::get('notifications/mark-as-read/{id}', [NotificationController::class, 'markAsRead'])->name('notifications.mark');
		Route::get('notifications/mark-all-as-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.markAll');
		Route::get('notifications/delete/{id}', [NotificationController::class, 'destroy'])->name('notifications.delete');
		Route::get('notifications/delete-all', [NotificationController::class, 'deleteAll'])->name('notifications.deleteAll');
		
		// API routes for notifications
		Route::get('api/notifications/unread-count', [NotificationController::class, 'getUnreadCount'])->name('notifications.unread-count');
		Route::get('api/notifications/latest', [NotificationController::class, 'getLatest'])->name('notifications.latest');
	});
});
Route::post('sendcontact', 'App\Http\Controllers\User\UsersController@sendcontact')->name('enquiry');