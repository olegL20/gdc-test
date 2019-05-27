$(document).ready(function () {

    function getMin() {
        let rate = $('.active')[0].getAttribute('data-id');
        let cur = $('input[name="currency-value"]:checked').val();
        $.get({
            url: '/api/rates/get-min',
            data: {
                id: rate,
                cur: cur,
            },
            success: function (data) {
                $('input[type="range"]')[0].setAttribute('min', data);
                $('input[type="number"]')[0].setAttribute('min', data);
                $('input[type="range"]').val(data);
                $('input[type="number"]').val(data);
            }
        });
    }
   getMin();
   getData();

   $('.calculate-option').click(function (e) {
       $('.calculate-option').removeClass('active');
       let btn = e.target.getAttribute('id');
       $('#'+btn).addClass('active');
       getMin();
       getData();
   });

   $('input[type="range"]').change(function (e) {
       getData(e.target.value);
   });

    $('input[type="number"]').change(function (e) {
        getData(e.target.value);
    });

    $('input[name="currency-value"]').change(function (e) {
        getMin();
        getData();
    });


    function getData(value = $('input[type="number"]').val()) {
        let rate = $('.active')[0].getAttribute('data-id');
        let cur = $('input[name="currency-value"]:checked').val();

        $.get({
            url: '/api/rates/calculate',
            data: {
                amount: value,
                currency: cur,
                id: rate,
            },
            success: function (data) {
                console.log(data.perDay);
                $('#perDay').html(data.perDay);
                $('#total').html(data.total);
                $('#profit').html(data.profit);
            }
        })
    }
});
