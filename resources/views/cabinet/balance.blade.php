@extends('layouts.admin-layout')

@section('content')
    @php
        /**    * @var \zvook\Skrill\Forms\QuickCheckoutForm $form    **/
        echo $form->open(['class' => 'skrill-form']);
                $exclude = ['amount', 'currency'];

        echo $form->renderHidden($exclude);
    @endphp
    <label for="amount">Сумма</label>
    <input id='amount' type="text" name="amount">
    <label for="currency">Валюта</label>
    <select name="currency" id="currency">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
    </select>
    @php
        echo $form->renderSubmit('Пополнить', ['class' => 'btn btn-primary']);
    echo $form->close();
    @endphp
@endsection
