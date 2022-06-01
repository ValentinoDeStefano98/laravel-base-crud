const deleteForms = document.querySelectorAll('.delete-form');
console.log(deleteForms);


deleteForms.forEach(element => {
    const title = element.getAttribute('data-name')
    element.addEventListener('submit', (e)=>{
        e.preventDefault();
        const accept = confirm(`Stai per eliminare ${title}`);
        if(accept) e.target.submit();
    })
});