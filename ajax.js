function get_data(){
    let money = $('#summa').val();

    $.ajax({
        method: "POST",
        url: "functions.php",
        data: {
            nominal: money
        }
    }).success(function(result){
       // alert(result);
        $("#result").html( result );
    })
 }
