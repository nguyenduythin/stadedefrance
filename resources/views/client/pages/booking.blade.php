<div class="reservation-modal-wrap">
    <div class="reserv-overlay crm">
        <div class="cd-reserv-overlay-layer" data-frame="25">
            <div class="reserv-overlay-layer"></div>
        </div>
    </div>
    <div class="reservation-modal-container bot-element">
        <div class="reservation-modal-item fl-wrap" id="modal-booking">
            <div class="close-reservation-modal crm"><i class="fal fa-times"></i></div>
            <div class="reservation-bg"></div>
            <div class="section-title">
                <h4>Don't forget to book a table</h4>
                <h2>Table Reservations</h2>
                <div class="dots-separator fl-wrap"><span></span></div>
            </div>
            <div class="reservation-wrap">
                <div id="reserv-message"></div>
                <form class="custom-form" method="post" action="{{ route('booking.add.api.client') }}"
                    name="reservationform" id="reservationform">
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="full_name" id="full_name" placeholder="Your Name *" value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" id="email" placeholder="Email Address *" value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="phone" id="phone" placeholder="Phone *" value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" min="1" max="20" name="persons" id="persons" placeholder="persons *"
                                    value="" />
                            </div>
                            <div class="col-sm-6" style="position: relative;">
                                <input type="text" placeholder="Date" id="res_date" autocomplete="off" name="date"
                                    value="" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="time"  autocomplete="off" class="flatpickr-time flatpickr-time-input text-start" placeholder="HH:MM" />
                            </div>
                            <div class="clearfix"></div>

                        </div>
                        <textarea class="content-ip" name="message" id="message" cols="30" rows="3" placeholder="Your Message:"></textarea>
                        <div class="clearfix"></div>
                        <button type="submit" class="btn color-bg" id="reservation-submit">Reserve Table <i
                                class="fal fa-long-arrow-right"></i></button>
                    </fieldset>
                </form>
            </div>
            <!-- reservation-wrap end-->
        </div>
    </div>
</div>
@section('script')
<script>
    $('.flatpickr-time').flatpickr({ enableTime: !0, noCalendar: !0 });
//   $.extend($.validator.messages, {
//     required: "Trường này không để trống!",
//     remote: "Please fix this field.",
//     email: "Please enter a valid email address.",
//     url: "Please enter a valid URL.",
//     date: "Please enter a valid date.",
//     dateISO: "Please enter a valid date (ISO).",
//     number: "Please enter a valid number.",
//     digits: "Please enter only digits.",
//     creditcard: "Please enter a valid credit card number.",
//     equalTo: "Please enter the same value again.",
//     accept: "Please enter a value with a valid extension.",
//     maxlength: $.validator.format("Please enter no more than {0} characters."),
//     minlength: $.validator.format("Please enter at least {0} characters."),
//     rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
//     range: $.validator.format("Please enter a value between {0} and {1}."),
//     max: $.validator.format("Please enter a value less than or equal to {0}."),
//     min: $.validator.format("Please enter a value greater than or equal to {0}.")
// });
var a = $('#reservationform');
a.validate({
    errorClass: "error",
    rules: {
        "full_name": {
            required: !0
        },
            "email": {
            required: !0
        },
        "phone": {
            required: !0,
            digits:true,minlength:10,maxlength:10
        },
        "date": {
            required: !0
        },
        "persons": {
            required: !0,
            number: true
        },
        "time": {
            required: !0,
        },
    },
    messages: {
        "full_name": {
            required: "Tên không để trống!"
        },
            "email": {
            required: "Email không để trống!",
            email: "Email chưa đúng định dạng!"
        },
        "phone": {
            required: "Số điện thoại không để trống!",
            minlength : "Định dạng số điện thoại 10 số!",
            maxlength : "Định dạng số điện thoại 10 số!"

        },
        "date": {
            required: "Ngày không để trống!"
        },
        "persons": {
            required: "Số người không để trống!",
            min: "Số người cần là số và lớn hơn 1!" ,
            max: "Số người nhỏ hơn 20!"
        },
        "time": {
            required: "Thời gian không để trống!"
        },
    }
}),
a.on("submit", function(e) {
    e.preventDefault();
    var s = a.valid();
    var form = this;
    if (s) {
    $.ajax({
        type: "POST",
        url: $(form).attr('action'),
        data: new FormData(form),
        processData: false,
        dataType: 'json',
        async: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            console.log(data);
            if (data.code == 0) {
                toastr.error(data.msg)
            }else if (data.code == 3){
                toastr.warning(data.msg)
            }else {
                $(form)[0].reset();
                // toastr.success('Bạn Đã đặt bàn thành Công!');
                window.location.href = "{{ route('client.thank') }}";
            }
        },
        error: function(error) {
            console.log("Thêm không thành công", error);
        }
    })                    
    }
});
</script>

@endsection