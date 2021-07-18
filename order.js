var total=0;
function addItems(cost){
     total+=cost;
     document.getElementById('price').innerHTML=total;
}
function removeItems(cost){
     if(total==0)
     return;
     total-=cost;
     document.getElementById('price').innerHTML=total;
}
function verifyOrder(){
     if(total==0)
     {
          var failed=document.getElementById('failedmess');
          var success=document.getElementById('orderedmess');
          failed.classList.add("d-block");
          success.classList.remove("d-block");
     }
     else{
          var failed=document.getElementById('failedmess');
          var success=document.getElementById('orderedmess');
          failed.classList.remove("d-block");
          success.classList.add("d-block");
     }
}