var a = document.getElementById("anchor");
        anchor.addEventListener('click',(event)=>{
        const value = event.target.value;
        
                
        axios.get('/reminders/getJson/{reflection_page}')
        .then(response => {
        const list = document.getElementById('unreflection_list');
        list.innerHTML = '';
                    
                    
        const plans = response.data.unreflection_plans;
        console.log(plans);
        for(let plan of plans){
        let row = document.createElement("li");
        let link = document.createElement("a");
        link.text = plan.plan_content;
        link.href = "/reflection_pages/"+plan.id;
        console.log(plan);
                          
        list.appendChild(row);    
        list.appendChild(link);
                        }
                    })
                    .catch(err => {
                      
                    })
            });
            