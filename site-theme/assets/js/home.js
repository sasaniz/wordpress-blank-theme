
  function opendescription(index) {
    var descriptions = document.querySelectorAll('.factor-description');
    var arrow = document.querySelectorAll('.factor-arrow');
    if(!descriptions[index].classList.contains('factor-slide-description')) {
       descriptions.forEach(element => {
          element.classList.remove('factor-slide-description');
       });
       arrow.forEach(element => {
          element.classList.remove('rotate-factor-arrow');
       });
       descriptions[index].classList.add('factor-slide-description');
       arrow[index].classList.add('rotate-factor-arrow');
    }else{
       arrow[index].classList.remove('rotate-factor-arrow');
       descriptions[index].classList.remove('factor-slide-description');
 
    }
   
 }