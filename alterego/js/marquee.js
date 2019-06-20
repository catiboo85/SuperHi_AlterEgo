// we can only run our javascript code once it has loaded 

window.onload = () => {
    // here we grab our marquee element 
    const marquee = document.querySelector('.marquee')
    if (marquee) {
      const marquees = new Array(40).fill(null)
    //   we go over our array and do a loop 
      marquees.forEach(el => {
        // here it clones the elements forty times and adds 
        // each one to the content of the page
        marquee.parentNode.append(marquee.cloneNode(true));
      })
    }
  }