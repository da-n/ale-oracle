$(document).ready(function() {

  $("header h1").fitText(.5, {
    maxFontSize: "80px"
  });

  $("ul.social-scroller").simplyScroll({
    pauseOnHover: false,
    pauseOnTouch: false
  });

});

// $(function(){

//   var cache = {
//     '': $('div.content-default')
//   };

//   $("a").click(function() {
//     var href = $(this).attr( "href" );

//     $.bbq.pushState({ url: href });

//     return false;
//   });

//   $(window).bind( 'hashchange', function(e) {

//     var url = e.fragment;



//     // $('.bbq-loading').show();

//     if ( cache[ url ] ) {
//       // Since the element is already in the cache, it doesn't need to be
//       // created, so instead of creating it again, let's just show it!
//       cache[ url ].show();

//     } else {
//       $( '.content' ).children( ':visible' ).hide();

//       // Show "loading" content while AJAX content loads.
//       $( '.bbq-loading' ).show();

//       // Create container for this url's content and store a reference to it in
//       // the cache.
//       cache[url] = $('<article/>')

//       // Append the content container to the parent container.
//       .appendTo( '.content' )

//       // Load external content via AJAX. Note that in order to keep this
//       // example streamlined, only the content in .infobox is shown. You'll
//       // want to change this based on your needs.
//       .load( url.replace( 'url=/', '' ), function(){
//         // Content loaded, hide "loading" content.
//         // $('.bbq-loading').hide();
//       });

//     }

//     // $.ajax({
//     //   type : "GET",
//     //   url : url.replace( 'url=/', '' ),
//     //   dataType: "html",
//     //   beforeSend : function() {
//     //     $('.loading').show();
//     //   },
//     //   success : function(returnData) {
//     //     $("div.content").html(returnData);

//     //     // $.ajax({
//     //     //   type: "POST",
//     //     //   url: "inc/"+data_page+".php",
//     //     //   data: "id="+encodeURIComponent(pageID),
//     //     //   success: function(json) {
//     //     //     $("title").html(json.PageTitle);
//     //     //   }
//     //     // });
//     //     // next = $(next.selector);

//     //     if (cache[url]) {
//     //       $("ul.social-scroller").simplyScroll({
//     //         pauseOnHover: false,
//     //         pauseOnTouch: false
//     //       });
//     //     }
//     //   },
//     //   error : function(xhr, textStatus, errorThrown) {
//     //     //other stuff
//     //   },
//     //   complete : function() {
//     //     // $.unblockUI();
//     //     $('.loading').hide();
//     //   }
//     // });

//   });

//   $(window).trigger( 'hashchange' );

// });