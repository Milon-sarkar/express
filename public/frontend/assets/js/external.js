
$(document).ready(function() {
console.log('Hww');
});
// $(document).ready(function() {
//     $('#table').DataTable();
// });



//     $('#datepicker').datepicker({

//     });



    // $('#selector').change(function() {

    //     var option=$('#selector').val();
    //     console.log(option);
    //           alert("HVello");
    //       if (option) {
    //         $('.showcontent').show();
    //       } else {
    //         $('.showcontent').hide();
    //       }
    //     });


// $(document).ready(function(){
//     alert("Hello");
// $('.demotest').change(function (){
//     var t=$('.demotest').val();
//     alert(t);

// })
// });

function showContent(){
    var selectBox = document.getElementById("selector");
    var userInput = selectBox.options[selectBox.selectedIndex].value;
    if (userInput == 'received'){
        document.getElementById('hcontent').style.visibility = 'visible';
    }
    else{
        document.getElementById('hcontent').style.visibility = 'hidden';
    }
    return false;
}

