<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Manager;

Route::group(['middleware' => 'manager', 'as' => 'manager.', 'prefix' => 'backend/manager/'], function (){

    Route::get('dashboard', [Manager\DashboardController::class, 'index'])->name('dashboard');
    Route::post('ui-autocomplete/sender-name', [Manager\InvoiceController::class, 'senderName'])->name('senderName');
    Route::post('ui-autocomplete/sender-phone', [Manager\InvoiceController::class, 'senderPhone'])->name('senderPhone');
    Route::post('ui-autocomplete/receiver-info', [Manager\InvoiceController::class, 'receiverInfo'])->name('receiverInfo');

//    Route::get('/invoice/received', [Manager\InvoiceController::class, 'received'])->name('invoice.received');
//    Route::post('/invoice/received', [Manager\InvoiceController::class, 'makeAsOngoing'])->name('invoice.makeAsOngoing');
//    Route::get('/invoice/going', [Manager\InvoiceController::class, 'going'])->name('invoice.going');
//    Route::post('/invoice/going', [Manager\InvoiceController::class, 'makeAsDelivered'])->name('invoice.makeAsDelivered');
//    Route::get('/invoice/delivered', [Manager\InvoiceController::class, 'delivered'])->name('invoice.delivered');

    Route::get('invoice/status/{status}', [Manager\InvoiceController::class, 'statusConstant'])->name('invoice.statusConstant');
    Route::get('invoice/branch/{branch}', [Manager\InvoiceController::class, 'branchConstant'])->name('invoice.branchConstant');
    Route::get('invoice/status/{status}/branch/{branch}', [Manager\InvoiceController::class, 'statusAndBranchConstant'])->name('invoice.statusAndBranchConstant');
    Route::post('invoice/maker-as-delivered', [Manager\InvoiceController::class, 'makeAsDelivered'])->name('invoice.makeAsDelivered');
    Route::post('invoice/maker-as-deleted', [Manager\InvoiceController::class, 'makeAsDeleted'])->name('invoice.makeAsDeleted');
    Route::post('invoice/maker-as-break', [Manager\InvoiceController::class, 'makeAsBreak'])->name('invoice.makeAsBreak');
    Route::post('chalan/maker-as-deleted', [Manager\ChalanController::class, 'makeAsDeleted'])->name('chalan.makeAsDeleted');

    Route::resource('invoice', Manager\InvoiceController::class);
    Route::get('condition-invoice/create', [Manager\InvoiceController::class, 'conditionInvoiceCreate'])->name('conditionInvoice.create');
    Route::get('condition-invoice', [Manager\InvoiceController::class, 'conditionInvoiceGet'])->name('conditionInvoice.get');
    Route::resource('chalan', Manager\ChalanController::class);

    Route::get('expense', [Manager\ExpenseController::class, 'getExpense'])->name('getExpense');
    Route::post('expense', [Manager\ExpenseController::class, 'storeExpense'])->name('storeExpense');
    Route::get('expense/{expense_date}', [Manager\ExpenseController::class, 'showExpense'])->name('showExpense');
    Route::get('expense-category', [Manager\ExpenseController::class, 'getExpenseCategory'])->name('getExpenseCategory');
    Route::post('expense-category', [Manager\ExpenseController::class, 'storeExpenseCategory'])->name('storeExpenseCategory');



});

