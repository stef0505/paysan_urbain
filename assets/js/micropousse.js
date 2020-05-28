$(document).ready(function () {

    $('*[id^=card-]').click(function (e) {
        e.preventDefault();

        let name = $(this).data('name');
        let description = $(this).data('description');
        let image = $(this).children('img').attr("src");

        $("#titleMp").html(name);
        $("#txtMp").html(description);
        let srcImage = image;
        $("#imgMp").attr("src", srcImage);

    });
});