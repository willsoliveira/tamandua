
$(document).ready(function() {
    var campos_max          = 10;   //max de 10 campos
    var x = 1; // campos iniciais
    $('#NovoAnexo').click (function(e) {
            e.preventDefault();     //prevenir novos clicks
            if (x < campos_max) {
                $('#anexos').append('<span id="novo"><div class="form-group form-inline col-12"> <label for="anexo" class="col-form-label" >Arquivo: </label><input type="file" name="anexo" id="anexo" class="form-control col-sm" accept="image/*, .pdf" placeholder="Local do Anexo"></div> </div>\
                <div class="form-group form-inline col-12"> <label for="descricao_anexo" class="col-form-label" >Descrição do Anexo: </label> <input type="text" name="descricao_anexo" id="descricao_anexo" class="form-control col-sm" placeholder="Descrição do Anexo" > </div>\
                <a href="#" class="remover_campo btn btn-warning">Remover</a> </span>');
                    x++;
            }
    });

    // Remover o div anterior
    $('#anexos').on("click",".remover_campo",function(e) {
            e.preventDefault();
            $(this).parent('span').remove();
            x--;
    });
    //adiciona Pericia
    $('#NovaPericia').click (function(e) {
        var campos_max=1;
        e.preventDefault();     //prevenir novos clicks
        if (x <= campos_max) {
            $('#pericia').append('<span class="col-12" id="novo"><div class="form-group col-12 form-inline">\
            <label for="data_pericia" class="col-form-label">Data da Pericia</label>\
            <input type="date" name="data_pericia" id="data_pericia" class="form-control col-sm" placeholder="Escolha a data" >\
            <label for="horario_pericia" class="col-form-label">Horário da Pericia</label>\
            <input type="time" name="horario_pericia" id="horario_pericia" class="form-control col-sm">\
          </div>\
          <div class="form-group col-12">\
            <label for="local_pericia" class="col-form-label">Local da Pericia</label>\
            <input type="text" name="local_pericia" id="local_pericia" class="form-control col-sm" placeholder="Local da Perícia" >\
          </div>\
            <a href="#" class="remover_campo btn btn-warning">Remover</a> </span>');
                x++;
        }
    });
    $('#pericia').on("click",".remover_campo",function(e) {
        e.preventDefault();
        $(this).parent('span').remove();
        x--;
    });

});