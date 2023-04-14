$(document).on("change",".currency",function(){
    let current = $("#current").val()
    let first = $("#first_currency").val()
    let second = $("#second_currency").val()
    if(first && second){
        $.ajax({type: "POST",
        url: "../config.php",
        data: {"first":first,"second":second},
        datatype: "text",
            success: function(result) {
                $("#next").val(current*result)
            }
        });
    }
})
$(document).on("keyup","#current",function(){
    let current = $("#current").val()
    let first = $("#first_currency").val()
    let second = $("#second_currency").val()
    if(first && second){
        $.ajax({type: "POST",
        url: "../config.php",
        data: {"first":first,"second":second},
        datatype: "text",
            success: function(result) {
                $("#next").val(current*result)
            }
        });
    }
})
$(document).on("click","#change",function(){
    let current = $("#current").val()
    let first = $("#first_currency").val()
    let second = $("#second_currency").val()
    $("#first_currency").val(second)
    $("#second_currency").val(first)
    if(first && second){
        $.ajax({url: "geeks.txt", 
        type: "POST",
        url: "../config.php",
        data: {"first":first,"second":second},
        datatype: "text",
            success: function(result) {
                $("#next").val(current*result)
            }
        });
    }
})
