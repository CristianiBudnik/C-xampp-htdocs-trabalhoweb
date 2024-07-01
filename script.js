$(document).ready(function() {
    var experienciaIndex = 1;
    var formacaoIndex = 1;

    
    $('#add-experiencia').click(function() {
        experienciaIndex++;
        var html = '<div class="experiencia">' +
                   '<label for="cargo' + experienciaIndex + '">Cargo:</label>' +
                   '<input type="text" id="cargo' + experienciaIndex + '" name="cargo[]">' +
                   '<label for="empresa' + experienciaIndex + '">Empresa:</label>' +
                   '<input type="text" id="empresa' + experienciaIndex + '" name="empresa[]">' +
                   '<label for="periodo' + experienciaIndex + '">Período:</label>' +
                   '<input type="text" id="periodo' + experienciaIndex + '" name="periodo[]">' +
                   '</div>';
        $('#experiencias').append(html);
    });

    
    $('#add-formacao').click(function() {
        formacaoIndex++;
        var html = '<div class="formacao">' +
                   '<label for="curso' + formacaoIndex + '">Curso:</label>' +
                   '<input type="text" id="curso' + formacaoIndex + '" name="curso[]">' +
                   '<label for="instituicao' + formacaoIndex + '">Instituição:</label>' +
                   '<input type="text" id="instituicao' + formacaoIndex + '" name="instituicao[]">' +
                   '<label for="periodo_curso' + formacaoIndex + '">Período:</label>' +
                   '<input type="text" id="periodo_curso' + formacaoIndex + '" name="periodo_curso[]">' +
                   '</div>';
        $('#formacoes').append(html);
    });
});
