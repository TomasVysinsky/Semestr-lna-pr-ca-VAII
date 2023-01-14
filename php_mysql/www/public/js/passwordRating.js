var password = document.getElementById('password');

password.addEventListener('keyup', function(){
    var passwordArray = password.value.split('');
    var totalScore = 0;

    var rating = {
        number: 0,
        lowercase: 0,
        uppercase: 0,
        specialChar: 0,
        length: 0,
        total: 0
    }

    var validation = {
        isNumber: function(val){
            var pattern = /^\d+$/;
            return pattern.test(val);
        },
        isLowercase: function(val){
            var pattern = /[a-z]/;
            return pattern.test(val);
        },
        isUppercase: function(val){
            var pattern = /[A-Z]/;
            return pattern.test(val);
        },
        isSpecialChar: function(val){
            var pattern = /[!@#\$%\^\&*\)\(+=._-]/;
            return pattern.test(val);
        }
    }

    for (var i=0; i<passwordArray.length; i++){
        if (validation.isNumber(passwordArray[i])){
            rating.number = 1;
        } else if (validation.isLowercase(passwordArray[i])){
            rating.lowercase = 1;
        } else if (validation.isUppercase(passwordArray[i])){
            rating.uppercase = 1;
        } else if (validation.isSpecialChar(passwordArray[i])){
            rating.specialChar = 1;
        }
    }

    if (passwordArray.length === 0) {
        rating.number = 0;
        rating.lowercase = 0;
        rating.uppercase = 0;
        rating.specialChar = 0;
        rating.length = 0;
    } else if (passwordArray.length > 8) {
        rating.length = 1;
    }

    function assessTotalScore(){
        var ratingElement = document.querySelector(".rating");
        var submitButton = document.getElementById("submit");
        rating.total = rating.number + rating.lowercase + rating.uppercase + rating.specialChar + rating.length;

        if (rating.total === 0) {
            ratingElement.innerHTML = "";
            ratingElement.classList.remove("weakPassword", "moderatePassword", "strongPassword", "veryStrongPassword", "ultimatePassword");
            submitButton.disabled = true;
        } else if (rating.total === 1){
            ratingElement.innerHTML = "Weak password";
            ratingElement.classList.remove("moderatePassword", "strongPassword", "veryStrongPassword", "ultimatePassword");
            ratingElement.classList.add("weakPassword");
            submitButton.disabled = true;
        } else if (rating.total === 2){
            ratingElement.innerHTML = "Moderate password";
            ratingElement.classList.remove("weakPassword", "strongPassword", "veryStrongPassword", "ultimatePassword");
            ratingElement.classList.add("moderatePassword");
            submitButton.disabled = true;
        } else if (rating.total === 3){
            ratingElement.innerHTML = "Strong password";
            ratingElement.classList.remove("weakPassword", "moderatePassword");
            ratingElement.classList.add("strongPassword");
            submitButton.disabled = true;
        } else if (rating.total === 4) {
            ratingElement.innerHTML = "Very strong password";
            ratingElement.classList.remove("weakPassword", "moderatePassword", "strongPassword", "ultimatePassword");
            ratingElement.classList.add("veryStrongPassword");
            submitButton.disabled = false;
        } else if (rating.total === 5) {
            ratingElement.innerHTML = "Ultimate password";
            ratingElement.classList.remove("weakPassword", "moderatePassword", "strongPassword", "veryStrongPassword");
            ratingElement.classList.add("ultimatePassword");
            submitButton.disabled = false;
        }
    }

    assessTotalScore();
});