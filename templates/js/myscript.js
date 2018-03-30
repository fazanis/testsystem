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
function delvop($id){
    if (confirm("Вы действительно хотите удалить тест и его содержимое")) {

        $.ajax({
            url: '/vopros/delete/',
            type: 'POST',
            data: {id: $id},
            cache: false,
            success: function (data) {
                location.reload();

            }
        })
    }
}

function addpole() {

    var el = document.getElementById('npole');
    id = el.dataset.id; // Получаем значение атрибута data-id

    $i = parseInt(id);
    $s = $i+1;

    $('#eshevar').append('<label class="col-sm-4 control-label">Ответ '+$s+'</label>'+
        '<div class="col-sm-8"><input type="text" name="otvet[]" placeholder="Ответ" class="form-control" />'+
        '<input type="text" name="ball[]" placeholder="Баллов за ответ" class="form-control" /></div>');
    // '<div class="col-xs-1">' +
    // '<input type="radio" name="prav" id="prav" value="'+$s+'">' +
    // '</div>'+
    // '<div class="col-xs-11"><input class="form-control" type="text" name="otv[]" id="otv'+$s+'" value="'+$s+'">' +
    // '</div>'
    el.dataset.id = $s;
}
