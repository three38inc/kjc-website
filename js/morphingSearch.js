(function() {
    var morphSearch = document.querySelector( '#morphsearch' ),
        //home = document.querySelector( '#home' ),
        about = document.querySelector( '#about' ),
        academics = document.querySelector( '#academics' ),
        research = document.querySelector( '#research' ),
        campus = document.querySelector( '#campus' ),
        student = document.querySelector( '#student' ),
        search = document.querySelector( '#search' ),
        search1 = document.querySelector( '#search1' ),
        input = document.querySelector( '.morphsearch-input' ),
        ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
        isOpen = isAnimating = false,
        test = document.querySelector('#test'),
        // show/hide search area
        toggleSearch = function(evt) {
            //classie.remove( test, 'open' );
            //alert(evt.target.tagName);
            // return if open and the input gets focused
            if( evt.type.toLowerCase() === 'focus' && isOpen) {
                evt.stopPropagation();
                return false;
            }
            if( evt.target.tagName === 'INPUT') {
                evt.stopPropagation();
                //classie.add( test, 'open' );
                //if( isOpen ) {
                //    classie.remove( morphSearch, 'open' );isOpen = !isOpen;
                //}
                //morphSearch = document.querySelector( '#morphsearch_search' );
                //morphSearch.addEventListener( 'click', toggleSearch );
                return false;
            }

            if( evt.target.tagName === 'BUTTON') {
                evt.stopPropagation();
                return false;
            }


            var offsets = morphsearch.getBoundingClientRect();
            if( isOpen ) {
                classie.remove( morphSearch, 'open' );
            }
            else {
                $('html,body').animate({ scrollTop: 0  }, 500);
                classie.add( morphSearch, 'open' );
            }
            isOpen = !isOpen;
        };

    // events
    input.addEventListener( 'focus', toggleSearch );
    morphSearch.addEventListener( 'click', toggleSearch );
    ctrlClose.addEventListener( 'click', toggleSearch );
    // esc key closes search overlay
    // keyboard navigation events
    document.addEventListener( 'keydown', function( ev ) {
        var keyCode = ev.keyCode || ev.which;
        if( keyCode === 27 && isOpen ) {
            toggleSearch(ev);
        }
    } );

    //                home.addEventListener('click', function(e){
    //                    morphSearch = document.querySelector( '#morphsearch' );
    //                    morphSearch.addEventListener( 'click', toggleSearch );
    //                    toggleSearch(e);
    //                });
    // about.addEventListener('click', function(e){
    //     if( isOpen ) {
    //         classie.remove( morphSearch, 'open' );isOpen = !isOpen;
    //     }
    //     morphSearch = document.querySelector( '#morphsearch_about' );
    //     morphSearch.addEventListener( 'click', toggleSearch );
    //     toggleSearch(e);
    // });
    // academics.addEventListener('click', function(e){
    //     if( isOpen ) {
    //         classie.remove( morphSearch, 'open' );isOpen = !isOpen;
    //     }
    //     morphSearch = document.querySelector( '#morphsearch_academics' );
    //     morphSearch.addEventListener( 'click', toggleSearch );
    //     toggleSearch(e);
    // });
    // research.addEventListener('click', function(e){
    //     if( isOpen ) {
    //         classie.remove( morphSearch, 'open' );isOpen = !isOpen;
    //     }
    //     morphSearch = document.querySelector( '#morphsearch_research' );
    //     morphSearch.addEventListener( 'click', toggleSearch );
    //     toggleSearch(e);
    // });
    // campus.addEventListener('click', function(e){
    //     if( isOpen ) {
    //         classie.remove( morphSearch, 'open' );isOpen = !isOpen;
    //     }
    //     morphSearch = document.querySelector( '#morphsearch_campus' );
    //     morphSearch.addEventListener( 'click', toggleSearch );
    //     toggleSearch(e);
    // });
    // student.addEventListener('click', function(e){
    //     if( isOpen ) {
    //         classie.remove( morphSearch, 'open' );isOpen = !isOpen;
    //     }
    //     morphSearch = document.querySelector( '#morphsearch_student' );
    //     morphSearch.addEventListener( 'click', toggleSearch );
    //     toggleSearch(e);
    // });

    search.addEventListener('click', function(e){

        if( isOpen ) {
            classie.remove( morphSearch, 'open' );isOpen = !isOpen;
        }
        if($('#top1').hasClass('big'))
        {
            $('#top1').removeClass('big');
        }
        //$('#search').html('<i class="fa fa-search"></i>');

        $.ajax({
            url: "../php/searchContent.php",
            success: function(result){
                $("#result_container").html(result);
            }
        });
        $('.morphsearch-form input[type="search"]').val('');
        $('.morphsearch-form input[type="search"]').focus();
        morphSearch = document.querySelector( '#morphsearch_search' );
        morphSearch.addEventListener( 'click', toggleSearch );
        toggleSearch(e);
    });

    search1.addEventListener('click', function(e){

        if( isOpen ) {
            classie.remove( morphSearch, 'open' );isOpen = !isOpen;
        }
        if($('#top1').hasClass('big')){
            $('#top1').removeClass('big');
        }
        //$('#search').html('<i class="fa fa-search"></i>');

        $.ajax({
            url: "../php/searchContent.php",
            success: function(result){
                $("#result_container").html(result);
                //alert(result);
            }
        });
        $('.morphsearch-form input[type="search"]').val('');
        $('.morphsearch-form input[type="search"]').focus();
        morphSearch = document.querySelector( '#morphsearch_search' );
        morphSearch.addEventListener( 'click', toggleSearch );
        toggleSearch(e);
    });


    /***** for demo purposes only: don't allow to submit the form *****/
    document.querySelector( '.morphsearch-form button[type="submit"]' ).addEventListener( 'click', function(ev) {
        if($('.morphsearch-form input[type="search"]').val()==""){
            $.ajax({
                url: "../php/searchContent.php",
                success: function(result){
                    $("#result_container").html(result);
                    alert("hi");
                }
            });
        }
        else{
            $.ajax({
                url: "../php/fetchResult.php?q="+$('.morphsearch-form input[type="search"]').val(),
                success: function(result){
                    $("#result_container").html(result);
                    //alert(result);
                }
            });
        }
        ev.preventDefault();
    } );

    $('.morphsearch-form input[type="search"]').on('keyup',function(e){
        if($('.morphsearch-form input[type="search"]').val()==""){
            $.ajax({
                url: "../php/searchContent.php",
                success: function(result){
                    $("#result_container").html(result);
                    //alert(result);
                }
            });
        }
        else{
            $.ajax({
                url: "../php/fetchResult.php?q="+$('.morphsearch-form input[type="search"]').val(),
                success: function(result){
                    $("#result_container").html(result);
                    //alert(result);
                }
            });
        }
    });
})();
