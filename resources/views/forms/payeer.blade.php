<form action="https://payeer.com/merchant/" method="post" class="form">
    <input type="hidden" name="m_cipher_method" value="AES-256-CBC">
    <input type="hidden" name="m_shop" value="{{$merchantId}}">
    <input type="hidden" name="m_orderid" value="{{$orderId}}">
{{--    <input type="hidden" name="form[ps]" value="2609">--}}
{{--    <input type="hidden" name="form[curr[2609]]" value="{{$cur}}">--}}
{{--    <input type="hidden" name="m_params" value="{{$params}}">--}}

    <input type="hidden" name="m_desc" value="{{$desc}}">

    <input type="hidden" name="m_sign" value="{{$sign}}">
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" name="m_amount" value="{{$amount}}">
        </div>
        <div class="col-md-4">
            <select  class="form-control" name="m_curr" id="">
                <option @if ($cur === 'USD') selected @endif value="USD">USD</option>
                <option @if ($cur === 'RUB') selected @endif value="RUB">RUB</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="submit" class="btn btn-primary" name="m_process" value="Send" />
        </div>
    </div>
</form>

<script src="{{asset('js/payeer.js')}}"></script>
