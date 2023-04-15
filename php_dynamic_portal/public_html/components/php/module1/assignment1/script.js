let userData=[];

function submitData(name,address){
   if((name==""|| name==' ') || (address==""|| address==' ') ){
    $('#error-msg').text("Invalid Data !! ").css("color","red")
   }else{
    userData.push({"name":name,"address":address})
    tablePrint(userData)
   }
}


function tablePrint(userarray){
    let tb=$('#table');
    tb.html(`<h5>TABLE DATA</h5>
    <table class="table table-light table-hover">
        <thead>
            <th>Name
            </th>
            <th>Address
            </th>
        </thead>
        <tbody>
            
        </tbody>
    </table>`); 
    for (const dd of userarray) {
        $('tbody').append(
            `<tr>
                <td>${dd.name}</td>
                <td>${dd.address}</td>
             </tr>
            `
        )
    }
}
