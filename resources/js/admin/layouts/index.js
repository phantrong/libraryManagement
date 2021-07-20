require('./default');
// $(function() {
//     console.log("Đây là nơi viết js cho layouts");
// })
document.addEventListener('DOMContentLoaded', function () {
    //activeWith
    let a = document.querySelector('.navbar1')
        a.children[0].onclick = (e) => {
        
        const b = document.querySelector('.book').getAttribute('class');
        console.log(b);
        if(b.split(' ')[2] == undefined) 	{
            document.querySelector('.book').setAttribute('class',`${b} activeWidth`)
        } else {
            document.querySelector('.book').setAttribute('class','grid book')
        }
    }
    //activeHeight for list item 
    $('#manage__book').click(() => {
        
        const leng = $('#manage__book').attr('class').split(' ').length;
        
        if(leng == 1 ) $('#manage__book').addClass('activeHeight') 
        else $('#manage__book').removeClass('activeHeight')
    })
//activw click change background
  

    });
