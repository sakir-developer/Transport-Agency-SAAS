<li>
    <a class="waves-effect waves-dark" href="{{ route('manager.dashboard') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">ড্যাশবোর্ড</span>
    </a>
</li>
@if(auth()->user()->branch->active_conditional_booking)
<li class="bg-primary">
    <a class="waves-effect waves-dark text-white" href="{{ route('manager.conditionInvoice.create') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">কন্ডিশন বিল তৈরি</span>
    </a>
</li>
@endif
<li class="bg-inverse">
    <a class="waves-effect waves-dark text-white" href="{{ route('manager.invoice.create') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">সাধারণ বিল তৈরি</span>
    </a>
</li>
@if(auth()->user()->branch->active_conditional_booking)
<li>
    <a class="waves-effect waves-dark" href="{{ route('manager.conditionInvoice.get') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">সকল কন্ডিশন বিল</span>
    </a>
</li>
@endif
<li>
    <a class="waves-effect waves-dark" href="{{ route('manager.invoice.index') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">সকল সাধারণ বিল</span>
    </a>
</li>
<li class="bg-success">
    <a class="waves-effect waves-dark text-white" href="{{ route('manager.invoice.statusConstant', 'received') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">রিসিভ বিল</span>
    </a>
</li>
<li class="bg-warning">
    <a class="waves-effect waves-dark text-white" href="{{ route('manager.invoice.statusConstant', 'on-going') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">গাড়িতে বিল</span>
    </a>
</li>
<li class="bg-info">
    <a class="waves-effect waves-dark text-white" href="{{ route('manager.invoice.statusConstant', 'delivered') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">ডেলিভারি বিল</span>
    </a>
</li>
<li>
    <a class="waves-effect waves-dark" href="{{ route('manager.chalan.index') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">চালান সমূহ</span>
    </a>
</li>
@if(auth()->user()->branch->active_expense_system)
    <hr class="bg-success">
<li>
    <a class="waves-effect waves-dark" href="{{ route('manager.getExpense') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">খরচ সমূহ</span>
    </a>
</li>
<li>
    <a class="waves-effect waves-dark" href="{{ route('manager.getExpenseCategory') }}">
        <i class="far fa-circle text-success"></i><span class="hide-menu">খরচ এর ধরণ</span>
    </a>
</li>
@endif
