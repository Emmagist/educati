
// $(document).ready(function() {
//     var recordCount         =       2;
//     $("#testMore").click(function() {
//         alert("Yesssss")
//       recordCount = recordCount + 2;
//       $.ajax({
//         type: "GET",
//         url: "libs/load_data.php?count="+recordCount,
//         data: {},
//         contentType: "application/json; charset=utf-8",
//         dataType: "json",
//         cache: false,
//         success: function(response) {                        
//           var trHTML = "";
//           $.each(response, function (i, item) {
//             trHTML +=
//             <div class='col-lg-4 col-md-6 marginTop-30 wow fadeIn'>
//               <div class='card text-center height-100p shadow-v1'>
//                 <div class='card-header h-50'>
//                   <img class='w-100' src=' + item.image + ' alt='' height='80%' />
//                 </div>
//                 <div class='card-body px-3 py-0'>
//                   <a href='course-details.php?clid= + item.id + ' class='h6'>' + item.class + '</a>
//                   <div class='d-flex align-items-center justify-content-between'>
//                     <p class='mb-0 font-weight-semiBold ml-5'>
//                       <span class='text-primary '>&#x20A6;' + item.price + '</span>
//                     </p>
//                   </div>
//                 </div>
//                 <div class='card-footer border-top-0 d-flex'>
//                   <button class='btn btn-outline-primary mx-1'><a href='course-details.php?clid=" + item.id + ' class='buy_button'>Details</a></button>
                  
//                   <span class='pl-3'>
//                     <a href='#' class='btn btn-danger text-uppercase sc-add-to-cart course-detail-href' data-pge=' + item.id + ' data-class='' data-price=' + item.price + ' data-name=' + item.class + ' data-buddle='1' data-sub_type=''>Add to Cart</a>
//                   </span>
//                 </div>
                
//               </div>
//             </div>;
//           });
//           $('#fetchCourse').append(trHTML);
//         },
//         error: function (e) {
//           console.log(response);
//         }
//       });  
//     });        
//   });
