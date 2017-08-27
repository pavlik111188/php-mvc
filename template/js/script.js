function getTasksList() {
    $('#tasksTable').DataTable( {
        "columnDefs": [ {
            "targets": 'no-sort',
            "orderable": false
        } ],
        "pageLength": 3
    });
}

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.thumb').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
        $('.thumb').show();
    }
}
$('.preview').hide();
getTasksList();

$('#image').on("change", function () {
    readURL(this);
});

$('.prew-btn').on("click", function () {
   var userName = $('#userName').val();
   var userEmail = $('#userEmail').val();
   var task = $('#task').val();
   $('.card-title').html(userName);
   $('.card-subtitle').html(userEmail);
   $('.card-text').html(task);
   $('.preview').show();
});