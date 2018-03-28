function del($id){
    var id = $id;
    alert(id);
    $.post("/tests/delete/"+id, {}, function (data) {
        $("#cart-count").html(data);
    });
    return false;
}



//    $(document).ready(function(){
//        alert('asdadsad');
////         $(".delettest").click(function () {
//
//        //     var id = $(this).attr("data-id");
//        //     $.post("/cart/addAjax/"+id, {}, function (data) {
//        //         $("#cart-count").html(data);
//        //     });
//        //     return false;
////         });
//    });
