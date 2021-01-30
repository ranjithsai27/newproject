var APIKEY ="a52fbaf401bbf824b64931b68086f58c";
var cityname = " ";

$(".myform").submit(function(e){
    e.preventDefault();
    cityname = $("#demo").val();
    var api ="https:api.openweathermap.org/data/2.5/weather?q="+cityname+"&appid="+APIKEY

    $.ajax({
        url:api,
        method:"GET",
        success:function(v){
            var deg_data=v.main;
            var temp_val= deg_data.temp;

            temp_val=parseInt(temp_val);
            temp_val=temp_val - 273.15;
            temp_val=Math.round(temp_val);
            $(".temp").html("<h2>temp in this " +cityname+ " is " + temp_val);
        }
    });

});