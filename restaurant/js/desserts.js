// buttons arrow
let btn_left    = document.querySelector(".btn_left");
let btn_right   = document.querySelector(".btn_right");

let circle      = document.querySelector(".circle"); //circle of slider

let dish        = document.querySelector(".dish");     //active dish

let slider_img  = document.querySelectorAll(".slider_img");     //fetch all slider imags 

let bgClr       = document.querySelector(".big_circle"); //continer of circle

let title       = document.querySelector(".food__desc h3"); //title of food

let arr =[];
for(const i of slider_img) {
    arr.push(i)
}

console.log(arr);


var degrees = 0;
var indx=0;
btn_left.onclick= function() {
    console.log(degrees + "deg");
    console.log(indx + "index");
    degrees +=40;
    if(degrees > 180){
        degrees = 0;

    }
    
    circle.style.transform= `rotate(${degrees}deg)`;
    indx++
    if(indx ==1){
        bgClr.style.backgroundColor= "#FFE9B6";
        title.style.color = "#FFB200";
        title.innerHTML = "Fast Food";
    }
    if(indx == 2){
        bgClr.style.backgroundColor= "#fedcd1";
        title.style.color = "#EB7E5B";
        title.innerHTML = "Ice Cream";
    }
    if(indx == 3){
        bgClr.style.backgroundColor= "#D0FFB4";
        title.style.color = "green";
        title.innerHTML = "Coocked Food";
    }
    if(indx == 4){
        
        bgClr.style.backgroundColor= "rgba(50, 158, 145, 0.5)";
        title.style.color = "#329E91";
        title.innerHTML = "Drinks";
    }
    if(indx == 5){
        bgClr.style.backgroundColor= "#fedcd1";
        title.style.color = "#EB7E5B";
        title.innerHTML = "Desserts";
        indx = 0;
    }
    dish.src = arr[indx].src;
    
    console.log(arr[indx].src);
    
    console.log(degrees);
    console.log(indx)
}


btn_right.onclick= function() {
    if(degrees > 0){
        degrees -= 40;

        }
    if(indx > 0){
        indx = indx - 1
        }

    if(indx == 0){
        bgClr.style.backgroundColor= "#fedcd1";
        title.style.color = "#EB7E5B";
        title.innerHTML = "Desserts";
        indx = 0;
    }
    if(indx ==1){
        bgClr.style.backgroundColor= "#FFE9B6";
        title.style.color = "#FFB200";
        title.innerHTML = "Fast Food";
    }
    if(indx == 2){
        bgClr.style.backgroundColor= "#fedcd1";
        title.style.color = "#EB7E5B";
        title.innerHTML = "Ice Cream";
    }
    if(indx == 3){
        bgClr.style.backgroundColor= "#D0FFB4";
        title.style.color = "#56AF09";
        title.innerHTML = "Coocked Food";
    }
    if(indx == 4){
        
        bgClr.style.backgroundColor= "rgba(50, 158, 145, 0.5)";
        title.style.color = "#329E91";
        title.innerHTML = "Drinks";
    }
     if(indx == 5){
            indx = 0;
        } 
        if(degrees > 0){
        
            circle.style.transform= `rotate(${degrees}deg)`;
        }else{
            circle.style.transform= `rotate(0deg)`;
            
        }   


    
    dish.src = arr[indx].src;
    
  
    

    console.log(degrees + "deg");
    console.log(indx + "index");
}
    
    
console.log( title);



