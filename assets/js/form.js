$(document).ready(function () {
    $("#Checkbox1").change(function () {
        if ($("#Checkbox1").is(":checked")) {
            $("#housestreetsubdivision1_id").prop("disabled", false);
            $("#barangay1_id").prop("disabled", false);
            $("#citymunicipality1_id").prop("disabled", false);
            $("#province1_id").prop("disabled", false);
            $("#zipcodes1_id").prop("disabled", false);

            var housestreetsubdivision_id = $("#housestreetsubdivision_id").val();
            $("#housestreetsubdivision1_id").val(housestreetsubdivision_id);

            var barangay_id = $("#barangay_id").val();
            $("#barangay1_id").val(barangay_id);

            var citymunicipality_id = $("#citymunicipality_id").val();
            $("#citymunicipality1_id").val(citymunicipality_id);

            var province_id = $("#province_id").val();
            $("#province1_id").val(province_id);

            var zipcodes_id = $("#zipcodes_id").val();
            $("#zipcodes1_id").val(zipcodes_id);
        }
        if (!$("#Checkbox1").is(":checked")) {
            $("#housestreetsubdivision1_id").prop("enabled", false);
            $("#barangay1_id").prop("enabled", false);
            $("#citymunicipality1_id").prop("enabled", false);
            $("#province1_id").prop("enabled", false);
            $("#zipcodes1_id").prop("enabled", false);
        }
    });
    $("#Checkbox1").trigger("change");
});


$("#submit_now").on("click", function () {
    $("div.center").css({ filter: "blur(3px)" });
    $("div#prompt").css({ display: "block" });
});
$("#btn_cancel").on("click", function () {
    $("div.center").css({ filter: "blur(0px)" });
    $("div#prompt").css({ display: "none" });
});   
/*button trigger pinamay*/
$(function () {
    $("#btn_yes").on("click", function () {
        // do you stuff of button 1 click
        //alert('Button1 Clicked');
        setTimeout(function () {
            $('#yes').trigger('click');
        }, 100);
    });
});