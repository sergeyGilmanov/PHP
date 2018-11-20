window.addEventListener('scroll', () =>{
    let head = document.querySelector(".header");
    let link = document.querySelectorAll('a');
    let border = document.querySelectorAll('.border');
    head.classList.add("back");
    for(let i = 0; i < link.length; i++){
        link[i].classList.add("back1");}
    for(let b = 0; b < border.length; b++){
        border[b].classList.add("border_add");
        border[b].classList.remove('border');
    }
    if(window.pageYOffset == 0){
        let border1 = document.querySelectorAll('.border_add');
        head.classList.remove('back');
        for(let i = 0; i < link.length; i++){
            link[i].classList.remove("back1");}
        for(let b = 0; b < border1.length; b++){
            border1[b].classList.remove("border_add");
            border1[b].classList.add('border');
        }
    }
});


function getForm(a) {
    document.querySelector(a).addEventListener('click', (e) => {
        if (e.target.tagName != 'INPUT') {
            e.preventDefault();
        } else {
            document.querySelector('.id_prod').value = e.target.dataset.id;
            document.querySelector('.callback').classList.remove('callback_off');
            document.querySelector('.close').addEventListener('click', () => {
                document.querySelector('.callback').classList.add('callback_off');
            });
        }
    });
}

getForm('.first_block');