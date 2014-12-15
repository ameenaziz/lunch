    function validate() {

        //errors get pushed on to this array
        var errors = new Array([]);
        /*
        if ( document.lunchevent.event_name.value=='') {
            errors += "you must select an event name\n"
        }
        */

        for ( var i = 0; i <document.lunchevent.elements.length; i++ ) {
          //checks for text fields with missing stuff  
          if ( document.lunchevent.elements[i].type === "text" ) {

                if( document.lunchevent.elements[i].value === "" ){
                   errors.push("Please enter an event name\n"); 
                   
                }
          }
        }

        //check if atleast 2 options from the checkboxes are selected
        var lunchevent_cb = document.lunchevent;

        var counter = 0;
        for ( var j = 0; j < lunchevent_cb.elements.length; j++ )
        {
            if ( lunchevent_cb.elements[j].type == "checkbox" )
            {
                if ( lunchevent_cb.elements[j].checked ) {
                    counter++;
                }
            }       
        }

        if ( counter<2 ) {

            errors.push( "Please select at least 2 options from the restaurants list" );
        } 

        //main validation condition
        if( errors.length === 0 ) {

            return true;

        } else {
            clear_errors();
            show_errors(errors);

            return false;
        }
    }


    //clears out the fixed errors
    function clear_errors () {
        var div = document.getElementById( "errors" );

        while ( div.hasChildNodes() ) {
            div.removeChild(div.firstChild);
        }


    }

    function show_errors( errors ) {

        var errorBox = document.getElementById( "errors" );
        
        for( var x = 0; x < errors.length; x++ ) {

            var error = document.createTextNode( errors[ x ] );
            var p = document.createElement( "p" );
            p.appendChild( error );
            errorBox.appendChild( p );
        }

    }

    //submit the form to js for validation 
    window.onload = function () {
        document.lunchevent.onsubmit = validate;
    };