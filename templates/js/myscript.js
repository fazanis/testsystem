function del($id){
    if (confirm("Вы действительно хотите удалить тест и его содержимое")) {

        $.ajax({
            url: '/tests/delete/',
            type: 'POST',
            data: {id: $id},
            cache: false,
            success: function (data) {
                location.reload();

            }
        })
    }
}
