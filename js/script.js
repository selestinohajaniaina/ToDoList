      $('#alert').hide();
        $('#btn').click(() => {
            let text = $('#text').val();
            let time = $('#time').val();
            let err = '';

            if (text == "" || time == '') {
                err = 'Veillez tout remplir.';
            } else {
                err = '';
                $.ajax({
                    url: "create.php",
                    type: "post",
                    data: {
                        texte: text,
                        times: time
                    },
                    success: function(res) {
                        if (res == 1) {
                            $('#text').val('');
                            $('#time').val('');
                            selection();
                        } else {
                            $('#err').html('Une erreur est survenue.');
                        }
                    }
                })
            }
            $('#err').html(err);
            selection();
        })

        $('#canceled').click(() => {
            // console.log($('#check'));
            $('#alert').hide();
        });

        $('#deleted').click(() => {
            $.ajax({
                    url: "delete.php",
                    type: "post",
                    data: {
                        id: $('#contenuId').val(),
                    },
                    success: function(res) {
                        if (res == 1) {
                            $('#contenuId').val(''),
                            $('.contenu').val(''),
                            $('.contenuTime').val('')
                            $('#alert').hide();
                            selection();
                        }
                    }
                })
        });


        $('#modified').click(() => {
          // alert($('.contenu').text()); 
            $.ajax({
                    url: "modify.php",
                    type: "post",
                    data: {
                        id: $('#contenuId').val(),
                        texte: $('.contenu').val(),
                        times: $('.contenuTime').val(),
                        finish: $('#check').is(":checked") ? 1 : 0
                    },
                    success: function(res) {
                        if (res == 1) {
                            $('#contenuId').val(''),
                            $('.contenu').val(''),
                            $('.contenuTime').val('')
                            $('#alert').hide();
                            selection();
                        }
                        console.log(res);
                    }
                })
        });

        function selection() {
            $.ajax({
                url: "selection.php",
                type: "post",
                success: function(retour) {
                    $(".conteneur").html(retour)
                }
            })
        }

      selection();

      $(document).on("click", ".btnNom", function() {
              // alert($(this).data("id") + $(this).data("texte") + $(this).data("times") + $(this).data("date"));
              $('#alert').show();
              $('.contenuDate').html(' created at ' + $(this).data("date"));
              $('.contenu').html($(this).data("texte"));
              $('.contenuTime').val($(this).data("times"));
              $('#contenuId').val($(this).data("id"))
          })