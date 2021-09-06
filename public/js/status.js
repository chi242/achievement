


        var selecter = document.getElementById("select_status");
        selecter.addEventListener('change',(event)=>{
        const value = event.target.value;
        
                
        axios.get('/reminders/getJson/'+value)
        .then(response => {
        const list = document.getElementById('achievement_list');
        list.innerHTML = '';
                    
                    
        const plans = response.data.achievement_plans;
        console.log(plans);
        for(let plan of plans){
        let row = document.createElement("li");
        row.innerHTML = plan.plan_content;
        console.log(plan);
                          
        list.appendChild(row);
                        }
                    })
                    .catch(err => {
                      
                    })
            });