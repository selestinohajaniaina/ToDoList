<script>

function selection(filtre, ordre) {
            $.ajax({
                url: "selection.php",
                type: "post",
                data: {
                    filter: filtre,
                    order: ordre
                },
                success: function(retour) {
                    $(".conteneur").html(retour)
                }
            })
        }

      selection('times', 'ASC');

$('#btn').click(() => {
            let _filtre = $('#select').val();
            let _ordre = $("input[name='ordre']:checked").val();
            // alert( _ordre);
            selection(_filtre, _ordre);
});

</script>