
var myHeaders = new Headers();
myHeaders.append(
  "Authorization",
  "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYzZGI4MzAwN2RkNTg4MTNmNjYzOTg4NyIsInVzZXJuYW1lIjoia2FuaGFpeWEucGFuY2hhbCIsImVtYWlsIjoia2FuaGFpeWFwYW5jaGFsMDNAZ21haWwuY29tIiwicm9sZSI6IlN0dWRlbnQiLCJpYXQiOjE2ODEyMDUwNjgsImV4cCI6MTY4MTIyMzA2OH0.YOmljq7kXT1MqPQTzZL7EY7LQLX12LFAt9b8YGSnLFM"
);

var requestOptions = {
  method: "GET",
  headers: myHeaders,

};

$(document).ready(()=>{
     $('#Course').change(()=>{
      let va=$('#Course :selected').val();
      if(va=='ops'){
        fetch("https://apitutorial.dev.radixweb.net/api/exam-api/getSingleUserResult/63db87117dd58813f66398c9", requestOptions)
        .then((response) => response.json())
        .then((result) => UserDetials(result[0].batchId.users))
      }
      else if(va=='opss'){
        fetch("https://apitutorial.dev.radixweb.net/api/exam-api/getSingleUserResult/63db82d47dd58813f6639881", requestOptions)
        .then((response) => response.json())
        .then((result) => UserDetials(result[0].batchId.users))
      }
    
    })

})





function UserDetials(userID){
    var tablew=document.getElementById("addsas");
    tablew.innerHTML='';
    for (const id of userID) {
        fetch(`https://apitutorial.dev.radixweb.net/api/user/${id}/userById`, requestOptions)
        .then((response) => response.json())
        .then((result) =>{
            tablew.innerHTML+=`<tr>
            <td>${result.fname +" "+ result.lname}</td>
            <td><button onclick="getMarks('${id}')">ViewRes</button></td> 
            </tr>`
            
            
    })
   
    }
    
   
}
const getMarks=(id)=>{
    console.clear();
    fetch(`https://apitutorial.dev.radixweb.net/api/exam-api/getSingleUserResult/${id}`, requestOptions)
        .then((response) => response.json())
        .then((result) => {
            for (const d of result) {
                console.log("courseName:",d.subCourceId.name, ", Marks:",d.internalExam, )
            }
        })
}


