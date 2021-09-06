
const appdata = {
    data(){
        return{
            message: 'MainGoal',
            
        }
    },
    
}
var app = Vue.createApp(appdata)

// app.component('favorite',{
//     template:`
//     <button v-if="status == false" type="button" @click="favorite_check" class="btn btn-outline-warning">&#9825;</button><a v-if="status == false" href="#">{{$favorite_number}}</a>
//     <button v-else type="button" @click="favorite_check" class="btn btn-success">&#9829;</button><a v-if="status == true" href="#">a</a>
//     `,
//     data(){() =>{
        
//         if($my_favorite == 1){
//             this.status = true;    
//         }else{
//             this.status = false;  
//         return{
            
//         }
//     }
//     }},

app.component('favorite',{
    data(){
        return{
            status : true
        }
    },
    methods(){
        checkFavorite:() =>{
        my_favorite = 0       
                if($my_favorite === 1){
                    this.status.push = true;    
                }else{
                    this.status.push = false;  
        
}}},
    template:`
    <p>status={{status}}</p>
    <button v-if="status == true" type="button" @click="favorite_check" class="btn btn-outline-warning">&#9825;</button><a v-if="status == false" href="#">{{$favorite_number}}</a>
    <button v-else type="button" @click="favorite_check" class="btn btn-success">&#9829;</button><a v-if="status == true" href="#">a</a>
    `,
})

    
    
    
    
    // mounted(){
    // // methods: {
    // //     favorite_check(){   
    //     this.axios.get('/collections/getJson')
    //         .then((response) => {console.log(response.data)
    //     if(response.data[0] == 1) {
    //      console.log(response)
    //      this.status = true
    //      this.count = response.data[1]
    //   } else {
    //      console.log(response)
    //      this.status = false
    //      this.count = response.data[1]
    //   }
    //  })
    // }
     
    // }
    // }
    
    
// })
    



app.mount('#app')

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
        
        
    
    





    
