let val = $("#txt").val()
$(document).on("click","#lower",function(){
    val = val.toLowerCase()
    $("#txt").val(val)
})
$(document).on("click","#upper",function(){
    val = val.toUpperCase()
    $("#txt").val(val)
})
