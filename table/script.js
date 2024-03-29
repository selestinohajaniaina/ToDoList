// initialiser le nombre du ligne et colonne
let cols = 5;
let rows = 5;

// initialiser une liste vide, pour stoquer les elements a suprimer
let eles = []
/* asina liste colonne sy ligne @zay fusionnena auto */
let lignes = [];
let colonnes = [];

// repete tr au nombre du ligne
// repete td au nombre du colonne
for (let i = 0; i < rows; i++) {
    let tr = $('<tr></tr>');
    for (let j = 0; j < cols; j++) {
        // <input type='text' class='input outline-none' auto-complete=off/>
        tr.append($(`<td class='border border-black' data-row='${i}' data-col='${j}' data-colspan='1' data-rowspan='1'><input type='text' /></td>`));
    }
    // ajouter chaque au tableau HTML
    $('.conteneur').append(tr);
}

// td ecoute l'event click
$(document).on('click', 'td', function () {

    // si la class existe
    if($(this).hasClass('checked')) {
        // trouver l'emplacement [ligne, colonne]
        let newColonnes = colonnes.filter((e)=>!( e.row == $(this).data('row') && e.col == $(this).data('col') ));
        let newLignes = lignes.filter((e)=>!( e.row == $(this).data('row') && e.col == $(this).data('col') ));
        colonnes = newColonnes;
        lignes = newLignes;
        $(this).removeClass('checked');
        console.log(lignes, colonnes);

    // si la class n'existe pas dans cette element
    } else {
        // si eles contient le 1er element
        if(lignes[0] || colonnes[0]){
            // l'element choisi actuel est meme ligne ou colonne du 1er eles
            if($(this).data('row') == lignes[0].row || $(this).data('col') == colonnes[0].col) {
                // definir une class a cette element
                // sauvegarder son position dans eles
                $(this).addClass('checked');

                if($(this).data('row') == lignes[0].row) {
                    colonnes.push({row: $(this).data('row'), col: $(this).data('col'), colspan: $(this).data('colspan'), rowspan: $(this).data('rowspan')});
                } else {
                    lignes.push({row: $(this).data('row'), col: $(this).data('col'), colspan: $(this).data('colspan'), rowspan: $(this).data('rowspan')});
                }

                

            // l'element choisi actuel est diff au position de ligne ou colonne du 1er eles
            } else {
                alert('doit etre meme ligne ou colone');
            }

        // si eles ne contient pas le 1er element
        // definir une classe et sauvegarder sa position
        }else {
            lignes = [];
            colonnes = [];
            // $(this).hasClass('checked') ? $(this).removeClass('checked') : $(this).addClass('checked');
            $(this).addClass('checked');
            console.log($(this).data());
            colonnes.push({row: $(this).data('row'), col: $(this).data('col'), colspan: $(this).data('colspan'), rowspan: $(this).data('rowspan')});
            lignes.push({row: $(this).data('row'), col: $(this).data('col'), colspan: $(this).data('colspan'), rowspan: $(this).data('rowspan')});
        }
        // trier eles par ordre croissent
        // eles.sort();
        console.log(lignes, colonnes);
    }
    
    
});

// .btn enttend l'event click
$('.btn').click(function () {
    console.log(colspan(colonnes));
    $('.checked').first().attr('colspan', colspan(colonnes));
    $('.checked').first().attr('data-colspan', colspan(colonnes));
    $('.checked').first().attr('rowspan', rowspan(lignes));
    $('.checked').first().attr('data-rowspan', rowspan(lignes));

    $.ajax({
        url: "insert.php",
        type: "post",
        data: {
            col: $('.checked').first().data('col'),
            row: $('.checked').first().data('row'),
            colspan: colspan(colonnes),
            rowspan: rowspan(lignes),
        },
        success: function(res) {
            console.log(res);
        }
    })
    
    $('.checked').first().removeClass('checked');
    $('.checked').remove();
    lignes = [];
    colonnes = [];


})

function colspan(liste) {
    let nbrColSpan = 0;
    liste.map((e) => {
        nbrColSpan += e.colspan;
    });
    return nbrColSpan;
}

function rowspan(liste) {
    let nbrRowSpan = 0;
    liste.map((e) => {
        nbrRowSpan += e.rowspan;
    });
    return nbrRowSpan;
}