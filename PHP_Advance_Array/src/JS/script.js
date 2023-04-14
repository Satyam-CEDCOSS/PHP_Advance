function display(){
    $.ajax({
        type:"POST",
        url:"../controller.php",
        data:{"operation":"display"},
        datatype:"text"
    }).done(function(result){
        $("#category").html(result)
    })
}
display()

$(document).on("change","#category",function(){
    let val = $("#category").val()
    $.ajax({
        type:"POST",
        url:"../controller.php",
        data:{"operation":"item","category":val},
        datatype:"text"
    }).done(function(result){
        $("#type").html(result)
    })
})

$(document).on("change","#type",function(){
    let val = $("#type").val()
    $.ajax({
        type:"POST",
        url:"../controller.php",
        data:{"operation":"id","category":val},
        datatype:"text"
    }).done(function(result){
        $("#p_id").html(result)
    })
})

$(document).on("change","#p_id",function(){
    let val = $("#p_id").val()
    $.ajax({
        type:"POST",
        url:"../controller.php",
        data:{"operation":"table","category":val},
        datatype:"text"
    }).done(function(result){
        $("#table_body").html(result)
    })
})