const menuData = [
  {
    tech: "PHP OPS",
    modules: [
      {
        name: "Module-01",
        assignment: [
            {asName:"Assignment1",url:'php/module1/assignment1/asgnment1.php'},
            {asName:"Assignment2",url:'php/module1/assignment2/assignment2.php'},
            {asName:"Assignment3",url:'php/module1/assignment3/assignment3.php'},
            {asName:"Assignment4",url:'php/module1/assignment4/assignment4.php'},
        ],
      },
      {
        name: "Module-02",
        assignment: [
            {asName:"Assignment1",url:'php/module2/assignment1/asgnment1_m2.php'}
            
        ],
      },
      {
        name: "Module-03",
        assignment: [
            {asName:"Assignment1",url:'php/module3/assignment1/asgnment1_m3.php'},
            {asName:"Assignment2",url:'php/module3/assignment1/asgnment2_m3.php'}
            
        ],
      },
    ],
  },
  {
    tech: "Demo1",
    modules: [
      {
        name: "Module-01",
        assignment: [
            {asName:"Assignment1",url:'demo/module1/assignment1/asgnment1_m3.php'},
            
            
        ],
      }
     
    ],
  },
];


// path 
const path='http://php_dynamic_portal.localhost/';

$(document).ready(function () {

//    for print menu  
  function manuPrint(apiData) {
    let tech=$('.sidebardiv');
    for(obj of apiData){
        
        
        tech.append(

            `
            <div>
            <p>
              <a class="btn tech-button" data-bs-toggle="collapse" href="#${obj.tech.split(' ').join('')}" role="button"
                aria-expanded="false" aria-controls="${obj.tech.split(' ').join('')}">
                <svg xmlns="http://www.w3.org/2000/svg"
                  x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
                  <path
                    d="M 25 12 C 18.507813 12 12.621094 13.359375 8.273438 15.628906 C 3.925781 17.898438 1 21.167969 1 25 C 1 28.832031 3.925781 32.101563 8.273438 34.371094 C 12.621094 36.640625 18.507813 38 25 38 C 31.492188 38 37.378906 36.640625 41.726563 34.371094 C 46.074219 32.101563 49 28.832031 49 25 C 49 21.167969 46.074219 17.898438 41.726563 15.628906 C 37.378906 13.359375 31.492188 12 25 12 Z M 25 14 C 31.210938 14 36.824219 15.324219 40.800781 17.402344 C 44.777344 19.476563 47 22.203125 47 25 C 47 27.796875 44.777344 30.523438 40.800781 32.597656 C 36.824219 34.675781 31.210938 36 25 36 C 18.789063 36 13.175781 34.675781 9.199219 32.597656 C 5.222656 30.523438 3 27.796875 3 25 C 3 22.203125 5.222656 19.476563 9.199219 17.402344 C 13.175781 15.324219 18.789063 14 25 14 Z M 22.507813 16 L 20 28 L 22.625 28 L 23.890625 22 L 25.988281 22 C 26.65625 22 27.101563 22.109375 27.308594 22.332031 C 27.511719 22.554688 27.554688 22.976563 27.4375 23.582031 L 26.480469 28 L 29.144531 28 L 30.183594 23.222656 C 30.40625 22.078125 30.238281 21.238281 29.683594 20.726563 C 29.117188 20.207031 28.121094 20 26.636719 20 L 24.296875 20 L 25.128906 16 Z M 11 20 L 8.972656 31 L 11.617188 31 L 12.144531 28 L 13.792969 28 C 17.238281 28 19.113281 27.203125 19.8125 24.246094 C 20.414063 21.703125 18.875 20 16.332031 20 Z M 32 20 L 29.972656 31 L 32.617188 31 L 33.144531 28 L 34.792969 28 C 38.238281 28 40.113281 27.203125 40.8125 24.246094 C 41.414063 21.703125 39.875 20 37.332031 20 Z M 13.273438 22 L 15.332031 22 C 17.042969 22 17.402344 22.769531 17.3125 23.625 C 17.082031 25.832031 15.707031 26 14.230469 26 L 12.515625 26 Z M 34.273438 22 L 36.332031 22 C 38.042969 22 38.402344 22.769531 38.3125 23.625 C 38.082031 25.832031 36.707031 26 35.230469 26 L 33.515625 26 Z">
                  </path>
                </svg>
                ${obj.tech} <i class="bi bi-caret-down"></i></a>
            </p>
            <div class="row">
              <div class="col">
                <div class="collapse show multi-collapse" id="${obj.tech.split(' ').join('')}">
                  <ul class="list-unstyled modules${obj.tech.split(' ').join('')}">
                    
                    
                    
                  
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
            `
        );
     
      let mo=$(`.modules${obj.tech.split(' ').join('')}`);
        obj.modules.forEach((m)=>{   
            let modules=m.name.split(' ').join('')+(new Date()).getMilliseconds() 

         mo.append(
            `
            <li>
                      <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'asgnment1.php' ? 'active' : ''; ?>  sourse-link"
                        data-bs-toggle="collapse" href="#${modules}" role="button" aria-expanded="false"
                        aria-controls="${modules}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                        ${m.name}</a>

                      <div class="collapse show multi-collapse mx-5" id="${modules }">
                        <ul class="list-unstyled ul-assginmnet ${m.name+modules }asgment">
                          
                          
                        </ul>
                      </div>
                    </li>
            `
         )

        //  for assginment pritnt 
        let assmnet=$(`.${m.name+modules}asgment`);
        m.assignment.forEach((ass)=>{
          assmnet.append(`
          <li>  
            <a href="${path}components/${ass.url}"
              class="${window.location.pathname.split("/").pop()==ass.url.split("/").pop()?'active-link':''}  asgment-link">
               ${ass.asName}
             </a>
           </li>
        
          `)
        })
        
        })
        
    };
  }


//   calling 
  manuPrint(menuData);



// Searching 

$('#search').change(function(){
  $('#exampleModalToggle').modal('show');
  // console.log($(this).val())
  let user=$(this).val().toLowerCase();
  let x=menuData.map((data)=>{
    return data.modules.map((d)=>{
      return  d.assignment.filter((k)=>{
         return k.asName.toLowerCase().startsWith(user)
      })
      
    })
  })
  
  let modlashow=$('.s-print');
  modlashow.html('')
  
  let count=1;
  let tempvar='';
  x.map((p)=>{
    p.map((q)=>{
      
      q.map((main)=>{
        let serchdata=main.url.split('/');        
        serchdata.pop()
        count++
        tempvar+=
          `
          <p><strong>${serchdata.join('/')}</strong> :   <a href="${path}components/${main.url}">${main.asName}  </a></p>
          `;
      })
    })
  })
if(count==1){
  modlashow.append("Data not found !!");
}else{
  modlashow.append(tempvar)
}
 
})

});


var page = window.location.pathname.split("/").pop();
console.log( page );



