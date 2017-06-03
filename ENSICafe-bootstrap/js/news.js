$(document).ready(function () {
    setInterval(chargerNews, 30000);
	$('#posterActu').on('submit',function(e){
        e.preventDefault(); 
 
        var $this = $(this);    // L'objet jQuery du formulaire
        //var prenom = $('#prenom').val();
        var type = $('#type').val();
        var contenu =$("#contenu").val();
        if(/*prenom === '' || */contenu === '') {
            alert('Les champs doivent êtres remplis');
        } else {
            $.ajax({
                url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
                type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
                data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
                success: function(html) {
                }
            });
        };
    });
});

var dernier_id;
function setId(id) {
    dernier_id = id;
}

function chargerNews() {
    $.ajax({
        url: 'news.php?id=' + dernier_id,
        success: function (data) {
            if (data !== '') {
                $('#actus').prepend(data);
                $('#actus li:last-child').remove();
            }
        }
    });
}

