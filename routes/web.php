<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/features', function () {
    return view('features');
})->name('features');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// For Business - Main Index
Route::get('/for-business', function () {
    return view('for-business.index');
})->name('forbusiness.index');

// For Business - Individual Feature Pages
Route::get('/for-business/invoicing', function () {
    return view('for-business.invoicing');
})->name('forbusiness.invoicing');

Route::get('/for-business/expenses', function () {
    return view('for-business.expenses');
})->name('forbusiness.expenses');

Route::get('/for-business/reporting', function () {
    return view('for-business.reporting');
})->name('forbusiness.reporting');

Route::get('/for-business/multi-tenant', function () {
    return view('for-business.multi-tenant');
})->name('forbusiness.multitenant');

Route::get('/for-business/payment-processing', function () {
    return view('for-business.payment-processing');
})->name('forbusiness.payment');

Route::get('/for-business/bank-security', function () {
    return view('for-business.bank-security');
})->name('forbusiness.security');

Route::get('/for-business/bank-reconciliation', function () {
    return view('for-business.bank-reconciliation');
})->name('forbusiness.bankreconciliation');

Route::get('/for-business/budget-management', function () {
    return view('for-business.budget-management');
})->name('forbusiness.budget');

Route::get('/for-business/team-collaboration', function () {
    return view('for-business.team-collaboration');
})->name('forbusiness.team');

Route::get('/for-business/banking-integrations', function () {
    return view('for-business.banking-integrations');
})->name('forbusiness.bankingintegrations');

Route::get('/for-business/ecommerce-integration', function () {
    return view('for-business.ecommerce-integration');
})->name('forbusiness.ecommerce');

Route::get('/for-business/crm-integration', function () {
    return view('for-business.crm-integration');
})->name('forbusiness.crm');

Route::get('/for-business/api-webhooks', function () {
    return view('for-business.api-webhooks');
})->name('forbusiness.api');

Route::get('/for-business/tax-compliance', function () {
    return view('for-business.tax-compliance');
})->name('forbusiness.tax');

Route::get('/for-business/access-controls', function () {
    return view('for-business.access-controls');
})->name('forbusiness.access');

Route::get('/for-business/data-backup', function () {
    return view('for-business.data-backup');
})->name('forbusiness.backup');

