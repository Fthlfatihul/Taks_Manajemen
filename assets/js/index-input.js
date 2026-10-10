const btnSubmit = document.getElementById('btn-submit')
const btnCancel = document.getElementById('btn-cancel')

btnCancel.addEventListener('click', function () {
    // window.location.href = "../index.php";
    window.history.back();
    
});
btnSubmit.addEventListener('click', function(event){
    // event.preventDefault();
    
});

