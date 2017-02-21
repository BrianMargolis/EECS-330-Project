/**
 * Created by brianmargolis on 2/9/17.
 */
function main() {
    $('.dropdown-inverse li > a').click(function (e) {
        $('.status').text(this.innerHTML);
    });
}