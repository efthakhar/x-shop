<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

// Web API Routes
Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);
Route::post('/send-otp', [UserController::class, 'SendOTPCode']);
Route::post('/verify-otp', [UserController::class, 'VerifyOTP']);
Route::post('/reset-password', [UserController::class, 'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/user-profile', [UserController::class, 'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/user-update', [UserController::class, 'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);

// User Logout
Route::get('/logout', [UserController::class, 'UserLogout']);

// Page Routes
Route::get('/userLogin', [UserController::class, 'LoginPage']);
Route::get('/userRegistration', [UserController::class, 'RegistrationPage']);
Route::get('/sendOtp', [UserController::class, 'SendOtpPage']);
Route::get('/verifyOtp', [UserController::class, 'VerifyOTPPage']);
Route::get('/resetPassword', [UserController::class, 'ResetPasswordPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/dashboard', [DashboardController::class, 'DashboardPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/userProfile', [UserController::class, 'ProfilePage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/customerPage', [CustomerController::class, 'CustomerPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/campaignPage', [CampaignController::class, 'CampaignListPage'])->middleware([TokenVerificationMiddleware::class]);

// Customer API
Route::post('/create-customer', [CustomerController::class, 'CustomerCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/list-customer', [CustomerController::class, 'CustomerList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-customer', [CustomerController::class, 'CustomerDelete'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/update-customer', [CustomerController::class, 'CustomerUpdate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/customer-by-id', [CustomerController::class, 'CustomerByID'])->middleware([TokenVerificationMiddleware::class]);

// Customer API
Route::get('/list-campaign', [CampaignController::class, 'CampaignList'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/create-campaign', [CampaignController::class, 'CampaignCreate'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/delete-campaign', [CampaignController::class, 'CampaignDelete'])->middleware([TokenVerificationMiddleware::class]);



