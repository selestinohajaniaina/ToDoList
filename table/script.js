var row = 2;
var col = 2;

    function reload() {
        let contenu = '';
        for (let i = 0; i < row; i++) {
        contenu += '<tr>';
        for (let j = 0; j < col; j++) {
            contenu += `<td class='border'><input type='text' placeholder='' class='h-full w-full focus:outline-none' /></td>`;
        }
        contenu += '</tr>';
    }
    $('.table').html(contenu);
    }

    reload();

    $('.row').click(() => {
        row = row + 1;
        reload();
    });

    $('.col').click(() => {
        col = col + 1;
        reload();
    });