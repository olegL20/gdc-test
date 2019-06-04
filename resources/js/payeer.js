$(document).ready(function () {
    let amount = $('input[name="m_amount"]');
    let cur = $('select[name="m_curr"]');
    amount.change(function (e) {
        generateForm();
    });
    cur.change(function (e) {
        generateForm();

    });

    function generateForm() {
        let amount = $('input[name="m_amount"]').val();
        let cur = $('select[name="m_curr"]').val();

        $.get({
            url: '/api/generate-form',
            data: {
                amount: amount,
                currency: cur,
            },
            success: function (data) {
                console.log(data);
                console.log(amount, cur);
                $('.payeer-form').html(data);
            }
        })
    }
});
