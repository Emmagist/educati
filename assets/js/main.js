// Index Search
$('#result').hide();
$('#searchBox').on('keyup', function () {
    var val = $('#searchBox').val();
    if (val.length > 0) {
        $.ajax({
            url: 'libs/fetchSearch.php',
            method: 'POST',
            data: {
                search: 1,
                v: val
            },
            success: function (data) {
                $('#result').show();
                $('#result').html(data);
            },
            dataType: 'text'
        })
    }//else{
       // $('#searchBox').on('keyup', function () {
            //$('#result').hide();
        //}
    //}
});


// Course Search
// $('#courseResult').hide();
// $('#courseSearch').on('keyup', function () {
//     var val = $('#courseSearch').val();
//     if (val.length > 0) {
//         $.ajax({
//             url: 'libs/fetchSearch.php',
//             method: 'POST',
//             data: {
//                 courseSearch: 1,
//                 s: val
//             },
//             success: function (data) {
//                 $('#courseResult').show();
//                 $('#courseResult').html(data);

//             },
//             dataType: 'text'
//         })
//     }//else{
//        // $('#searchBox').on('keyup', function () {
//             //$('#result').hide();
//         //}
//     //}
// });


