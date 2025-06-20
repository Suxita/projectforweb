let currentPage = 1;

function goToPage(page) {

    document.querySelectorAll('.pagination button').forEach(btn => {
        btn.classList.remove('active');
    });
    
   
    event.target.classList.add('active');
    currentPage = page;
    
    console.log('Going to page ' + page);
}

function prevPage() {
    if (currentPage > 1) {
        currentPage--;
        goToPage(currentPage);
       
        document.querySelectorAll('.pagination button').forEach(btn => {
            btn.classList.remove('active');
        });
        document.querySelector('.pagination button:nth-child(' + (currentPage + 1) + ')').classList.add('active');
    }
}

function nextPage() {
    if (currentPage < 3) {
        currentPage++;
        goToPage(currentPage);
        
        document.querySelectorAll('.pagination button').forEach(btn => {
            btn.classList.remove('active');
        });
        document.querySelector('.pagination button:nth-child(' + (currentPage + 1) + ')').classList.add('active');
    }
}