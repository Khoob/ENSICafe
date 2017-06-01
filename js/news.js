$(document).ready(function () {
    setInterval(chargerNews, 5000);
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
                alert(data)
                $('#actus').prepend(data);
                $('#actus li:last-child').remove();
            }
        }
    });
}




