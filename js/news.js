$(document).ready(function () {
    "use strict";
    setInterval(chargerNews, 60000);
});

var dernier_id;
function setId(id) {
    "use strict";
    dernier_id = id;
}

function chargerNews() {
    "use strict";
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




