let text = [
    'Many reasons to get up \n',
     'and start to get back in \n',
      'the business'
];

 
    let line = 0;
    let count = 0;
    let out = '';

    function typeLine(){
        let interval = setTimeout(function(){
            out += text[line][count];
            document.querySelector('.main_title').innerHTML = out;
            count++;

            if(count>= text[line].length){
                count = 0;
                line++;
                if(line == text.length){
                    clearTimeout(interval);
                    return true;
                }
            }
            typeLine();
        }, 200);
    }
    typeLine();

 

// menu

 

// document.addEventListener("click", (e) => {
//   const target = e.target;
//   if (target.classList.contains('burger')) {
//     document.querySelector('.menu').classList.toggle("show");
//   }
// });
let as =  document.querySelector('.burger');

as.addEventListener('click', function (event) {
    document.querySelector('.menu').classList.toggle("show");
    as.classList.toggle("act");
  });