// $('form#checkBills').on('submit', function () {
//     // alert('oop');
//     var that = $(this), 
//       method = that.attr('method'),
//       data = {}
//     that.find('[name]').each(function (index, value) {
//       var that = $(this),
//         name = that.attr('name'),
//         value = that.val();
//         data[name] = value;
//         alert(data[name]);
//     });
//     $.ajax({
//       url: '../../libs/check_out.php',
//       type: method,
//       data: data,
//       alert(data)
//     //   success: function (data) {
//     //       alert(data);
//     //     location.reload();
//     //   }
//     })
//   })