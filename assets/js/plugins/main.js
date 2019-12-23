const BASE_URL = $('input[name="base_url"]').val();

$(function() {
    $("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function(event, currentIndex, newIndex) {
            if (newIndex >= 1) {
                $('.actions ul').addClass('actions-next');
            } else {
                $('.actions ul').removeClass('actions-next');
            }
            return true;
        },
        labels: {
            finish: "Finish",
            next: "Continue",
            previous: "Back"
        },
        onFinished: function() {
            formSubmit();
        }
    });

    // Custom Steps
    $('.wizard > .steps li a').click(function() {
        $(this).parent().addClass('checked');
        $(this).parent().prevAll().addClass('checked');
        $(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Step
    $('.forward').click(function() {
        $("#wizard").steps('next');
    });
    $('.backward').click(function() {
        $("#wizard").steps('previous');
    });
    // Input Focus
    $('.form-holder').delegate("input", "focus", function() {
        $('.form-holder').removeClass("active");
        $(this).parent().addClass("active");
    });

    $('input[name="birth_date"]').datepicker({
        format: 'yyyy-mm-dd',
    });


    $('#upload_image').click(function() {
        $('#upload_input').click();
        // accessCamera();
    })



    $('.form-control').keyup(function() {
        $(this).removeClass('error');
    })
});

function readImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#image')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);

        document.getElementById('image').style.display = 'block';
        document.getElementById('imageplaceholder').style.display = 'none';
    }

}

function accessCamera() {
    var video = document.querySelector("#videoElement");
    if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then(function(stream) {
                video.srcObject = stream;
            })
            .catch(function(error) {
                $('#upload_input').click();
            });
        var i = 0;


    }
}

function myFunction() {
    var x = document.getElementById("CANVAS");
    var ctx = x.getContext("2d");
    ctx.fillStyle = "#FF0000";

    ctx.drawImage(video, 0, 0, 400, 350);
    //ctx.fillRect(20, 20, 150, 100);
    // if (i < 10) {
    //     document.body.appendChild(x);
    //     i = i + 1;
    // };
}


function formSubmit() {
    var formData = new FormData($('#regform')[0]);

    $.ajax({
        url: BASE_URL + '/register/reguser',
        type: 'POST',
        data: formData,
        dataType: 'json',
        beforeSend: function(){
          $('.loader-mask').show();
        },
        success: function(response) {
          Swal.fire({
              title: response.title,
              icon: response.type,
              text: response.message,
              onClose: () => {
                  if (response.type == 'success') {
                      window.location.reload();
                  }

                  if (response.type == 'warning') {
                      $.each(response.returnData, function(key, value) {
                          $('input[name="' + key + '"]').addClass('error');
                      })
                  }
              }
          })
        },
        complete:function(){
          $('.loader-mask').hide();
        },
        cache: false,
        contentType: false,
        processData: false
    })

}
