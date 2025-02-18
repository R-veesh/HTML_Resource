
function validateInput(){
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var exp = document.getElementById('exp').value;
    var male = document.getElementById('male').value;
    var female = document.getElementById('female').value;
    var verify = document.getElementById('verify').value;
    
    const name_error = document.getElementById('name_error');
    const email_error = document.getElementById('email_error'); 
    const exp_error = document.getElementById('exp_error');
    const male_error = document.getElementById('male_error');
    const female_error = document.getElementById('female_error');
    const verify_error = document.getElementById('verify_error');

    name_error.textContent = '';
    email_error.textContent = '';
    exp_error.textContent = '';
    male_error.textContent = '';
    female_error.textContent = '';
    verify_error.textContent = '';

    let isValid = true;
    if(name === ''){
        name_error.textContent = 'Please Entre Your Name';
        isValid = false;
    }
    if(email === !exp.includes("@")){
        email_error.textContent = 'Please Entre a valid Email';
        isValid = false;
    }
    if(exp === ''|| isNaN(exp)){
        exp_error.textContent = 'Please Entre Number';
        isValid = false;
    }
    if(!male.checked&& !female.checked){ 
        male_error.textContent = 'Please Select your gender';
        isValid = false;
    }
    if(verify === ''){
        verify_error.textContent = 'Please Verify';
        isValid = false;
    }
}