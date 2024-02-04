// arrayListe est une variable de type tableau a deux dimention (matrice)
// pour stoquer chaques element du tableau
// [{ col1 }, { col2 }], // premier ligne
// [{ col1 }, { col2 }] // deuxieme ligne
let arrayList = [
    [{row: 0, col: 0, rowspan: 1, colspan: 1, content: ''}, {row: 0, col: 1, rowspan: 1, colspan: 1, content: ''}], // ligne 0
    [{row: 1, col: 0, rowspan: 1, colspan: 1, content: ''}, {row: 1, col: 1, rowspan: 1, colspan: 1, content: ''}] // ligne 1
];

// cette fonction actualise le contenu du tablea d'affichage
function showTable() {

    // initialisation du contenu d'element TABLE en '' (vide comme string)
    document.querySelector('.table').innerHTML = '';

    // prend une nouvelle string vide pour assigner les tr (element ligne du table) suivant
    let div = '';

    // tetezina ny ligne rehetra ao @arrayListe
    for(let rows = 0; rows < arrayList.length; rows++) {

        // ajouter d'abord la balise ouvrante du tr au variable
        div += '<tr>';

        // tetezina ny colonne rehetra ao @ligne
        for(let cols = 0; cols < arrayList[rows].length; cols++) {

            // ajouter l'element td et input dans le div et revenir dans le deuxieme colonne s'il y a
            div += `<td class='border' rowspan='${arrayList[rows][cols].rowspan}' colspan='${arrayList[rows][cols].colspan}'>
                        <input type='text' autocomplete=off style='width:100%' class='input outline-none' data-row='${rows}' data-col='${cols}' col='colomn' data-rowspan='${arrayList[rows][cols].rowspan}' data-colspan='${arrayList[rows][cols].colspan}' />
                    </td>`;
            // console.log(`rowspan='${arrayList[rows][cols].rowspan}' , colspan='${arrayList[rows][cols].colspan}' , data-row='${rows}' , data-col='${cols}'`);
        }

        // fermer le tr dans le div et revenir dans le deuxieme ligne s'il y a
        div += '</tr>';
    }

// ajouter enfin l'element div a l'interieur du table dans HTML
document.querySelector('.table').innerHTML = div;
}

// appeler un seul fois la fonction d'affichage du tableau apres la chargement du page
showTable();

// function qui return une liste de deux element
// premier valeur: nombre de ligne du arrayList
// deuxieme valeur: nombre de colonne du arrayList
function coutElement(position = 0) {

    // initialiser a vide deux variable, pour compte les lignes et colonnes
    let totalRows = 0;
    let totalCols = 0;

    // tetezina ny colonne rehetra ao @ligne volohany
    for(let cols of arrayList[position]) {
        // additionner toute les colspan au variable vide precedant
        totalCols += cols.colspan;
    }

    // tetezina ny ligne rehetra ao variable arrayList
    for(let rows of arrayList) {
        // additionner toute les rowspan au variable vide precedant
        totalRows += rows[position].rowspan;
    }

    // retourner au fonction les resultats obtenus
    return [totalRows, totalCols];
}

// console.log(coutElement());

$('.row').click(() => {
    let newRow = [];
    let nbrCol = coutElement(0)[0];
    console.log(nbrCol);
    for(let i = 0; i < coutElement(0)[1]; i++ ) {
        newRow.push({row: coutElement(0)[0], col: i, rowspan: 1, colspan: 1, content: ``});
        console.log(newRow);
    }
    arrayList.push(newRow);
    showTable();
    // console.log(arrayList[arrayList.length-1]);
});

$('.col').click(() => {
    for(let i = 0; i < arrayList.length; i++) {
        arrayList[i].push({row: i, col: arrayList[i][ arrayList[i].length - 1 ].col + 1, rowspan: 1, colspan: 1, content: ``});
    }
    showTable();
    // console.log(arrayList[arrayList.length-1]);
});

$('.delRow').click(() => {
    arrayList.pop();
    showTable();
    // console.log(arrayList[arrayList.length-1]);
});

$('.delCol').click(() => {
    arrayList.map((e) => e.pop());
    showTable();
    // console.log(arrayList[arrayList.length-1]);
});

let x, y;

$(document).on('dblclick', '.input', function() {
    // console.log($(this).data());
    // arrayList[$(this).data('row')].splice($(this).data('col'), 1);

    // try {
    //     arrayList[ $(this).data('row') ][ $(this).data('col')].colspan += 1;
    // }
    // catch {
    //     arrayList[ $(this).data('row') ][ $(this).data('col') -1].colspan += 1;
    // }

    $('#colspan').val( $(this).data('colspan') );
    $('#rowspan').val( $(this).data('rowspan') );
    x = $(this).data('row');
    y = $(this).data('col');
    console.log(x, y);
    $('#alert').show();

    // console.log(arrayList[ $(this).data('row') ][ $(this).data('col')+1 ]);
    showTable();
});

$('#alert').hide();

$('#canceled').click(() => {
    $('#alert').hide();
    showTable();
});

$('#modified').click(function(){
    
    
    if(y < arrayList[x].length - 1) {
            arrayList[ x ][ y ].colspan = $('#colspan').val();
            arrayList[x].splice(y + 1, 1);
    }
    
        arrayList[ x ][ y ].rowspan = $('#rowspan').val();


    $('#alert').hide();
    showTable();
});


