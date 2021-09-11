// const app = Vue.createApp({
//     template:`<favorite></favorite>`
// })

// app.component('favorite',{
//     data(){
//         return{
//             message: 'MainGoal',
//             count: null,
//         }
//     },
//     created () {
//          let vm = this
//     axios
//       .get('/collections/getJson')
//       .then((response) => {
//         // const btn = document.getElementById('firstBtn');
//         // btn.remove();
        
//         const numbers = response.data.favorite_number[0].favorite;
//         vm.info = numbers 
//         console.log(numbers)
        
//         let row = document.createElement("li");
//         row.innerHTML = numbers.favorite_number ;
//         console.log(row)
        
//       })
//     },
    
//     template:`
//     <button type="button" @click="count++" class="btn btn-outline-warning">&#9825;</button>
    
//     `,
//     })

// app.mount('#app')



//自分用(Auth::user_id)
    // 初期(get_collection)
    //planのfavotite=1のとき
    // status==true
    
    //planのfavotite=0のとき
    // status==false

//みんな用
    // 初期(get_collection)
    // $favoriteNumber = Plan::where('favorite',1)->count();
    
    //自分がclickしたらgetJsonを呼び出す
        //  status==true()かplanのfavotite=1のとき
        // $favoriteNumber -1
        
        //  status==true()かplanのfavotite=0のとき
        // $favoriteNumber 





    axios
      .get('/collections/getJson')
      .then((response) => {
          
        const firstNumber = document.getElementById('favorite_number');
        firstNumber.innerHTML = '';
        
        // const numbers = response.data.favorite_number[0].favorite;
        // this.favorite_number = numbers 
        // console.log(numbers)
        let numbers = document.getElementById('favorite_number')
        
        var btn = document.getElementById('firstBtn');
        btn.addEventListener('click',function(numbers){
           numbers =  this.count++
           console.log(numbers)
        })
        
        let nextNumber = document.createElement("p");
        nextNumber.innerHTML = numbers.favorite_number ;
        console.log(nextNumber)

btn.appendChild(nextNumber);
                        }
                    )
        



    


    
