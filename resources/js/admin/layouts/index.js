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
    $('.toolbar__catagory-link-img2').click(() => {
        
        const leng = $('.toolbar__catagory-item-list').attr('class').split(' ').length;
        
        if(leng == 1 ) $('.toolbar__catagory-item-list').addClass('activeHeight') 
        else $('.toolbar__catagory-item-list').removeClass('activeHeight')
    })
//activw click change background
  

    });
