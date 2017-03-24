$(document).ready(function(){



$('#state').change(function(e){
    changeVicinitySelect(this,'change')
})



function changeVicinitySelect(e,oc = null){
        
        var v = document.getElementById('vicinity');
        if(oc !== null)
            v.selectedIndex = 0;
            
        let vicinites = document.getElementsByClassName('vicinities');
        let len=vicinites.length;
        let toggle = true;

       
       

        for(i=0; i<len; i++){
                vicinites[i].style.display = "";
            }

        if(e.options[e.selectedIndex].value !== 'all'){
            toggleDisplayForVicinity(toggle,e.options[e.selectedIndex].value)

            for(i=0; i<len; i++){
                if(vicinites[i].dataset.stateId != e.options[e.selectedIndex].dataset.id){
                    vicinites[i].style.display = "none";
                }
            }
            
        }
            
        else{

            toggle = false;
            v.selectedIndex = 0;
            toggleDisplayForVicinity(toggle,e.options[e.selectedIndex].value)
        }
            

    }

    function toggleDisplayForVicinity(display = false,state = 'all'){
    
        if(!display || state == 'all'){
            document.getElementById('vicinity').disabled = !display;
        }
        else document.getElementById('vicinity').disabled = !display;
    }




})
