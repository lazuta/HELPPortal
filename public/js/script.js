let search = document.querySelector('#search');
console.log(search)
search.oninput = function() {
    let srt_serach = document.querySelector('#search').value.toLowerCase();
    let cards = document.querySelectorAll('.card');

    cards.forEach(el => {
        let header = el.querySelector('.card-header > span').innerHTML.toLowerCase();
        let body = el.querySelector('.card-body > p').innerHTML.toLowerCase();
        
        if(header.includes(srt_serach) || body.includes(srt_serach)) {
            el.style.display = 'block';
        } else {
            el.style.display = 'none';
        }
    });
};
