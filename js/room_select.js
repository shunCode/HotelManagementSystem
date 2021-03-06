// 선택한 수만큼 객실이 선택되었는지 확인

var NOR = parseInt(document.getElementById("NOR").value);   // number of rooms

jQuery(document).ready(function($) {
    
    var booked = new Array();
    $("input[id=room]:disabled:disabled").each(function() {
        booked.push($(this).val());
    });

    $("input[id=room]:checkbox").change(function() {
        if($("input[id=room]:checkbox:checked").length == NOR) {
            $(":checkbox:not(:checked)").attr("disabled", "disabled");
        } else {
            $("input[id=room]:checkbox").each(function() {
                if (!booked.includes($(this).val())) $(this).removeAttr("disabled");
            });
        }
    });
    
    $(".select").click(function() { 
        var str = "Selected Rooms: "; 
        $(".select").each(function() {
            if ($(this).is(":checked")) str += $(this).val() + " "; 
        });
        $("#selected").text(str);
    });
});

function check() {
    if ($("input[id=room]:checkbox:checked").length != NOR) {
        if (NOR == 1) alert("Please select " + NOR + " room!");
        else alert("Please select " + NOR + " rooms!");
        return false;
    }
    return true;
}

// 선택한 기간 사이에 해당 객실에 하나라도 예약이 있으면 선택 불가능
function unavailable(sr) {
    $("input[id=room]").each(function() {
        if ($(this).val() == sr) $(this).attr("disabled", "disabled");
    });
}

// 각 선택한 객실의 인원 설정 기능
function guest_decrease1() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num1");
    var plimit = parseInt(document.getElementById("plimit1").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase1() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num1");
    var plimit = parseInt(document.getElementById("plimit1").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease2() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num2");
    var plimit = parseInt(document.getElementById("plimit2").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase2() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num2");
    var plimit = parseInt(document.getElementById("plimit2").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease3() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num3");
    var plimit = parseInt(document.getElementById("plimit3").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase3() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num3");
    var plimit = parseInt(document.getElementById("plimit3").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease4() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num4");
    var plimit = parseInt(document.getElementById("plimit4").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase4() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num4");
    var plimit = parseInt(document.getElementById("plimit4").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease5() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num5");
    var plimit = parseInt(document.getElementById("plimit5").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase5() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num5");
    var plimit = parseInt(document.getElementById("plimit5").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease6() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num6");
    var plimit = parseInt(document.getElementById("plimit6").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase6() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num6");
    var plimit = parseInt(document.getElementById("plimit6").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease7() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num7");
    var plimit = parseInt(document.getElementById("plimit7").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase7() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num7");
    var plimit = parseInt(document.getElementById("plimit7").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease8() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num8");
    var plimit = parseInt(document.getElementById("plimit8").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase8() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num8");
    var plimit = parseInt(document.getElementById("plimit8").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease9() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num9");
    var plimit = parseInt(document.getElementById("plimit9").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase9() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num9");
    var plimit = parseInt(document.getElementById("plimit9").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}

function guest_decrease10() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num10");
    var plimit = parseInt(document.getElementById("plimit10").value);
    var num = guest.value;
    if (num > plimit) {
        var price2 = parseInt($('.price2').html().replace(/,/g, ''));
        $('.price2').html(price2 - 22000 * nights);
    }
    if (num > 1) num--;
    guest.value = num;
}

function guest_increase10() {
    var nights = parseInt(document.getElementById("nights").value);
    var guest = document.getElementById("guest_num10");
    var plimit = parseInt(document.getElementById("plimit10").value);
    var num = guest.value;
    if (num < 10) {
        num++;
        if (num > plimit) {
            var price2 = parseInt($('.price2').html().replace(/,/g, ''));
            $('.price2').html(price2 + 22000 * nights);
        }
    }
    guest.value = num;
}