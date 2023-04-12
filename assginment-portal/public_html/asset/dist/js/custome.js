$(document).ready(()=>{
    $(".tottagel-button").click(function(){
        $("#sideBar").slideToggle(700);
        let up=$('#up');
        let dwn=$('#down');
        if(up.hasClass('d-none')){   
            setTimeout(() => {
                $('#maindiv').removeClass('col-md-9') 
            }, 700);
            up.removeClass('d-none')
            dwn.addClass('d-none')
        }else{
            $('#maindiv').addClass('col-md-9') 
            up.addClass('d-none')
            dwn.removeClass('d-none')
        }
        
      });
})